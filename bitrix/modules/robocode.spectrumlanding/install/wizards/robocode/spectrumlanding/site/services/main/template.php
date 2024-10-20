<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (!defined("WIZARD_TEMPLATE_ID"))
    return;

$bitrixTemplateDir = $_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . WIZARD_TEMPLATE_ID;

CopyDirFiles(
    $_SERVER["DOCUMENT_ROOT"] . WizardServices::GetTemplatesPath(WIZARD_RELATIVE_PATH . "/site") . "/" . WIZARD_TEMPLATE_ID,
    $bitrixTemplateDir,
    $rewrite = true,
    $recursive = true,
    $delete_after_copy = false
);



//Attach template to default site
$obSite = CSite::GetList($by = "def", $order = "desc", Array("LID" => WIZARD_SITE_ID));
if ($arSite = $obSite->Fetch()) {

    $arTemplates = Array();
    $arTemplates[] = Array("CONDITION" => "", "SORT" => 1, "TEMPLATE" => "spectrum");

    $arFields = Array(
        "TEMPLATE" => $arTemplates,
        "NAME" => $arSite["NAME"],
    );

    $obSite = new CSite();
    $obSite->Update($arSite["LID"], $arFields);
}
COption::SetOptionString("main", "wizard_template_id", WIZARD_TEMPLATE_ID, false, WIZARD_SITE_ID);



?>
