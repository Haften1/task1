<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
	"main" => Array(
		"NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
		"STAGES" => Array(
			"files.php",
			"template.php",
			"settings.php",
			"post_event.php",
            "import.php",
		),
	),
	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK"),
		"STAGES" => Array(
			"types.php", //IBlock types
			"services.php",
			"testimonials.php",
			"portfolio.php",
			"sponsors.php",
			"team.php",
			"partners.php",
			"features.php",
			"news.php",
			"prices.php",	
		),
	),
);
?>