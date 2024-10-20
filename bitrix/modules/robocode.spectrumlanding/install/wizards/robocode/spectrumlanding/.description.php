<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(!defined("WIZARD_DEFAULT_SITE_ID") && !empty($_REQUEST["wizardSiteID"])) 
	define("WIZARD_DEFAULT_SITE_ID", $_REQUEST["wizardSiteID"]); 

$arWizardDescription = Array(
	"NAME" => GetMessage("ROBOCODE_WIZARD_NAME"), 
	"DESCRIPTION" => GetMessage("ROBOCODE_WIZARD_DESC"),
	"VERSION" => "1.0.0",
	"START_TYPE" => "WINDOW",
	"WIZARD_TYPE" => "INSTALL",
	"IMAGE" => "/images/" . LANGUAGE_ID . "/solution.gif",
	"PARENT" => "wizard_sol",
	"TEMPLATES" => Array(
		Array("SCRIPT" => "wizard_sol")
	),
	"STEPS" => array(),
);

$arWizardDescription["STEPS"] = (defined("WIZARD_DEFAULT_SITE_ID")) ?
	array(
		"PersonType",
		"PaySystem",
		"CatalogStep",
		"SiteSettingsStep",
		"DataInstallStep",
		"FinishStep"
	) : array(
		"SelectSiteStep",
		"SiteSettingsStep",
		"PersonType",
		"PaySystem",
		"CatalogStep",
		"DataInstallStep",
		"FinishStep"
	);
?>