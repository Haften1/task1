<?

require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/install/wizard_sol/wizard.php");

class SelectSiteStep extends CSelectSiteWizardStep
{
	function InitStep()
	{
		parent::InitStep();

		$wizard =& $this->GetWizard();
		$wizard->solutionName = "spectrumlanding";
		
        $this->SetNextStep("site_settings");
	}
	
}



class SiteSettingsStep extends CSiteSettingsWizardStep
{
	
	function InitStep()
	{
		$wizard =& $this->GetWizard();
		$wizard->solutionName = "spectrumlanding";
		parent::InitStep();

		$this->SetTitle(GetMessage("wiz_settings"));
		$this->SetNextStep("data_install");
		$this->SetNextCaption(GetMessage("wiz_install"));
		
		$siteID = $wizard->GetVar("siteID");		
		
		//$siteLogo = $this->GetFileContentImgSrc(WIZARD_SITE_PATH."include/company_logo.php", "/bitrix/wizards/bitrix/demo_community/site/templates/taby/images/logo.jpg");

		//$siteLogoImg = "/bitrix/wizards/akropol/landing001/images/ru/logotip.png";
		//$siteBgImg = "/bitrix/wizards/akropol/landing001/images/ru/bg03.jpg";

		global $USER;
		$AdminsMail=$USER->GetParam("EMAIL");
		
		
		$wizard->SetDefaultVars(
			Array(
				"siteName" => GetMessage("wiz_name"),
				"siteDescription" => GetMessage("wiz_slogan"), 
				"siteSeoTitle" => GetMessage("wiz_name"), 
				"siteSeoDescription" => GetMessage("wiz_slogan"),
				"siteSeoKeywords" => GetMessage("wiz_keywords"),  
				"admins_e_mail" => $AdminsMail,
			)
		);	
		
	}

	function ShowStep()
	{
		
		$wizard =& $this->GetWizard();
		//$siteLogo = $wizard->GetVar("siteLogo", true);
		//$siteCopyright = $wizard->GetVar("siteCopyright", true);
		//$this->content ='<div style="'.$siteBgImg.'"> </div>';
		$this->content .= '<div class="wizard-input-form">';
		
		
		//$siteLogoImg = $wizard->GetVar("siteLogoImg", true);
		
		$this->content .= '
		<div class="wizard-upload-img-block">
			<div class="wizard-catalog-title">'.GetMessage("wiz_company_name").'</div>
			'.$this->ShowInputField('text', 'siteName', array("id" => "siteName", "class" => "wizard-field")).'
		</div>';
				
		$this->content .= '
		<div class="wizard-upload-img-block">
			<div class="wizard-catalog-title">'.GetMessage("wiz_company_description").'</div>
			'.$this->ShowInputField('text', 'siteDescription', array("id" => "siteDescription", "class" => "wizard-field")).'
		</div>';
		
		$this->content .= '
		<div class="wizard-upload-img-block">
			<div class="wizard-catalog-title">'.GetMessage("wiz_company_email").'</div>
			'.$this->ShowInputField('text', 'admins_e_mail', array("id" => "admins_e_mail", "class" => "wizard-field")).'
		</div>';
				
		$this->content .= '
		<div class="wizard-metadata-title">'.GetMessage("wiz_seo").'</div>
		<div class="wizard-upload-img-block">
			<label for="siteMetaTitle" class="wizard-input-title">'.GetMessage("wiz_seo_title").'</label>
			'.$this->ShowInputField('text', 'siteSeoTitle', array("id" => "siteSeoTitle", "class" => "wizard-field")).'
		</div><div class="wizard-upload-img-block">
			<label for="siteMetaDescription" class="wizard-input-title">'.GetMessage("wiz_seo_description").'</label>
			'.$this->ShowInputField('text', 'siteSeoDescription', array("id" => "siteSeoDescription", "class" => "wizard-field")).'
		</div><div class="wizard-upload-img-block">
			<label for="siteMetaKeywords" class="wizard-input-title">'.GetMessage("wiz_seo_keywords").'</label>
			'.$this->ShowInputField('text', 'siteSeoKeywords', array("id" => "siteSeoKeywords", "class" => "wizard-field")).'
		</div>';

	}
}

class DataInstallStep extends CDataInstallWizardStep
{
}

class FinishStep extends CFinishWizardStep
{
	function InitStep()
	{
		$this->SetStepID("finish");
		$this->SetNextStep("finish");
		$this->SetTitle(GetMessage("FINISH_STEP_TITLE"));
		$this->SetNextCaption(GetMessage("wiz_go"));
	}

	function ShowStep()
	{
		global $USER;
		$wizard =& $this->GetWizard();

		$siteID = WizardServices::GetCurrentSiteID($wizard->GetVar("siteID"));

		if (strlen($siteID) > 0 and is_object($USER) and method_exists($USER, 'GetEmail')) {
			$obSite = new CSite();
			$t = $obSite->Update($siteID, array(
				'EMAIL' => $USER->GetEmail(),
				'NAME' => GetMessage('wiz_site_name'),
				'SERVER_NAME' => $this->getSiteUrl()
			));
		};

		$rsSites = CSite::GetByID($siteID);
		$siteDir = SITE_DIR;
		if ($arSite = $rsSites->Fetch())
			$siteDir = $arSite["DIR"];

		$wizard->SetFormActionScript(str_replace("//", "/", $siteDir . "/?finish"));

		$this->CreateNewIndex();

		COption::SetOptionString("main", "wizard_solution", $wizard->solutionName, false, $siteID);

		$this->content .= GetMessage("FINISH_STEP_COMPOSITE");
		$this->content .= '<br/><center><a href="/bitrix/admin/composite.php?lang=ru">'.CFile::ShowImage("/bitrix/wizards/robocode/spectrumlanding/images/ru/composite.gif", 600, 250, "border=0 vspace=15").'</a></center>';
		$this->content .= '<center><b><a href="/bitrix/admin/composite.php?lang=ru">'.GetMessage("FINISH_STEP_COMPOSITE_LINK").'</a></b></center>';


		if ($wizard->GetVar("installDemoData") == "Y")
			$this->content .= GetMessage("FINISH_STEP_REINDEX");

	}

	function getSiteUrl()
	{
		$PARSE_HOST = parse_url(getenv('HTTP_HOST'));
		if (isset($PARSE_HOST['port']) and $PARSE_HOST['port'] == '80') {
			$HOST = $PARSE_HOST['host'];
		}
		elseif (isset($PARSE_HOST['port']) and $PARSE_HOST['port'] == '443') {
			$HOST = $PARSE_HOST['host'];
		}
		elseif(isset($PARSE_HOST['port'])) {
			$HOST = $PARSE_HOST['host'] . ":" . $PARSE_HOST['port'];
		} else {
			$HOST = $PARSE_HOST['host'];
		}
		return $HOST;
	}
}
?>