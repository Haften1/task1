<?
global $MESS;
$PathInstall = str_replace("\\", "/", __FILE__);
$PathInstall = substr($PathInstall, 0, strlen($PathInstall)-strlen("/index.php"));
IncludeModuleLangFile($PathInstall."/index.php");

Class robocode_spectrumlanding extends CModule
{
	const MODULE_ID = "robocode.spectrumlanding";
	var $MODULE_ID = "robocode.spectrumlanding";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $MODULE_GROUP_RIGHTS = "Y";

	function robocode_spectrumlanding()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php"); 

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

		$this->MODULE_NAME = GetMessage("ROBOCODE_INSTALL_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("ROBOCODE_INSTALL_DESCRIPTION");
		$this->PARTNER_NAME = GetMessage("ROBOCODE_SPER_PARTNER");
		$this->PARTNER_URI = GetMessage("ROBOCODE_PARTNER_URI");
	}


	function InstallDB($install_wizard = true)
	{
		global $DB, $DBType, $APPLICATION;

		RegisterModule("robocode.spectrumlanding");
		RegisterModuleDependences("main", "OnBeforeProlog", "robocode.spectrumlanding", "CSitePersonal", "ShowPanel");

		return true;
	}

	function UnInstallDB($arParams = Array())
	{
		global $DB, $DBType, $APPLICATION;

		UnRegisterModuleDependences("main", "OnBeforeProlog", "robocode.spectrumlanding", "CSitePersonal", "ShowPanel"); 
		UnRegisterModule("robocode.spectrumlanding");

		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles()
	{
        CopyDirFiles(
            $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/components/",
            $_SERVER["DOCUMENT_ROOT"]."/bitrix/components/",
			true, true
        );
		return true;
	} 

	function InstallPublic()
	{
	}

	function UnInstallFiles()
	{
        DeleteDirFilesEx(
            $_SERVER["DOCUMENT_ROOT"]."/bitrix/components/".$this->MODULE_ID."/"
        );
		return true;
	}

	function DoInstall()
	{
        global $APPLICATION, $step;

		$this->InstallFiles();
		$this->InstallDB(false);
		$this->InstallEvents();
		$this->InstallPublic();

		$APPLICATION->IncludeAdminFile(GetMessage("ROBOCODE_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/step.php");
    }

	function DoUninstall()
	{
		global $APPLICATION, $step;

		$this->UnInstallDB();
		$this->UnInstallFiles();
		$this->UnInstallEvents();
		$APPLICATION->IncludeAdminFile(GetMessage("ROBOCODE_UNINSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/unstep.php");
    }
}
?>