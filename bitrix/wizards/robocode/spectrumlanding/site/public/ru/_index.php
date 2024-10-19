<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "#SITE_SEO_TITLE#");
$APPLICATION->SetTitle("#SITE_SEO_TITLE#");
$APPLICATION->SetPageProperty("keywords", "#SITE_SEO_KEYWORDS#");
$APPLICATION->SetPageProperty("description", "#SITE_SEO_DESCRIPTION#");
?><section id="home_wrapper" class="home-wrapper">
<div class="gradient_overlay">
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center padding-top-80">
			<h1 class="home-title wow fadeIn" data-wow-delay="0.5s">
			<?$APPLICATION->IncludeFile(
						SITE_DIR."/include/block1/text1.php",
						Array(),
						Array("MODE"=>"html")
					);?> </h1>
			<div class="home-subtitle wow fadeIn" data-wow-delay="1s">
				 <?$APPLICATION->IncludeFile(
						SITE_DIR."/include/block1/text2.php",
						Array(),
						Array("MODE"=>"html")
					);?>
			</div>
 <a href="#newsletter" class="btn btn-lg btn-margin btn-white scrool wow fadeIn" data-wow-delay="1.5s"> <?$APPLICATION->IncludeFile(
						SITE_DIR."/include/block1/btn1.php",
						Array(),
						Array("MODE"=>"html")
					);?> </a> <a href="#services" class="btn btn-lg btn-white-transparent scrool wow fadeIn" data-wow-delay="1.75s"> <?$APPLICATION->IncludeFile(
						SITE_DIR."/include/block1/btn2.php",
						Array(),
						Array("MODE"=>"html")
					);?> </a>
			<?$APPLICATION->IncludeFile(
						SITE_DIR."/include/block1/img.php",
						Array(),
						Array("MODE"=>"html")
					);?>
		</div>
	</div>
</div>
 </section> <section id="services">
<div class="section-white">
	<div class="container">
		<div class="row margin-bottom-30">
			<div class="col-md-12 text-center">
				<h2 class="section-title">
				<?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block2/title.php",
							Array(),
							Array("MODE"=>"html")
						);?> </h2>
				<div class="separator_wrapper">
 <i class="icon icon-star-two red"></i>
				</div>
				 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block2/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
			</div>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"services",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#SERVICES_IBLOCK_ID#",
		"IBLOCK_TYPE" => "robocode_spectrum",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("BTN_TEXT","BTN_COLOR",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
 </section> <section class="section-dark no-padding-bottom">
<div class="container">
	<div class="row margin-bottom-30">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h2 class="section-title grey">
			<?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block3/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h2>
			<div class="separator_wrapper_white">
 <i class="icon icon-star-two grey"></i>
			</div>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block3/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
	 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block3/text2.php",
							Array(),
							Array("MODE"=>"html")
						);?>
</div>
 </section>
<div class="section-testimonials">
	<div class="container testimonials-wrapper">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"testimonials",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#TESTIMONIALS_IBLOCK_ID#",
		"IBLOCK_TYPE" => "robocode_spectrum",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "1",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("OTZ_POSITION","OTZ_NAME",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
 <section class="section-white medium-padding">
<div class="container">
	<div class="row">
		<div class="col-md-6 margin-top-30 margin-bottom-30">
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block5/img.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
		<div class="col-md-6 margin-top-50 margin-bottom-30">
			<h3 class="medium-title"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block5/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?></h3>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block5/text2.php",
							Array(),
							Array("MODE"=>"html")
						);?> <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block5/text3.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
</div>
 </section> <section class="section-dark portfolio-padding" id="portfolio">
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12 text-center">
			<h2 class="section-title grey"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block6/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h2>
			<div class="separator_wrapper_white">
 <i class="icon icon-star-two grey"></i>
			</div>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block6/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
	<div class="row">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"portfolio",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#PORTFOLIO_IBLOCK_ID#",
		"IBLOCK_TYPE" => "robocode_spectrum",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
 </section> <section class="section-white medium-padding">
<div class="container">
	<div class="row">
		<div class="col-md-6 margin-top-35 margin-bottom-30">
			<h3 class="medium-title"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block7/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h3>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block7/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
		<div class="col-md-6 margin-top-30 margin-bottom-30">
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block7/video.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
</div>
 </section>
<div class="section-grey sponsors-padding">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-12 sponsors">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"sponsors",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#SPONSORS_IBLOCK_ID#",
		"IBLOCK_TYPE" => "robocode_spectrum",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
			</div>
		</div>
	</div>
</div>
 <section class="team-section" id="team">
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h2 class="section-title white"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block9/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h2>
			<div class="separator_wrapper_white">
 <i class="icon icon-star-two grey"></i>
			</div>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block9/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
	<div class="row">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"team",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#TEAM_IBLOCK_ID#",
		"IBLOCK_TYPE" => "robocode_spectrum",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("TEAM_POSITION","TEAM_FB","TEAM_VK","TEAM_TV",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
 </section> <section id="partners">
<div class="section-white">
	<div class="container">
		<div class="row margin-bottom-50">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h2 class="section-title"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block10/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h2>
				<div class="separator_wrapper">
 <i class="icon icon-star-two red"></i>
				</div>
				 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block10/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
			</div>
		</div>
		<div class="row">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"partners",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#PARTNERS_IBLOCK_ID#",
		"IBLOCK_TYPE" => "robocode_spectrum",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
		</div>
	</div>
</div>
 </section> <section class="section-dark medium-padding">
<div class="container">
	<div class="row">
		<div class="col-md-6 margin-top-30 margin-bottom-30">
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block11/img.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
		<div class="col-md-6 margin-top-50 margin-bottom-30">
			<h3 class="medium-title white"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block11/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h3>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block11/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
</div>
 </section> <section class="section-grey small-padding-bottom story" id="features">
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12 text-center">
			<h2 class="section-title"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block12/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h2>
			<div class="separator_wrapper">
 <i class="icon icon-star-two red"></i>
			</div>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block12/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"features",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#FEATURES_IBLOCK_ID#",
		"IBLOCK_TYPE" => "robocode_spectrum",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?><br>
</div>
 </section> <section class="section-dark" id="blog">
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h2 class="section-title white"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block13/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h2>
			<div class="separator_wrapper_white">
 <i class="icon icon-star-two white"></i>
			</div>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block13/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
	<div class="row">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#NEWS_IBLOCK_ID#",
		"IBLOCK_TYPE" => "robocode_spectrum",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
 </section> <section class="section-white" id="pricing">
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12 text-center">
			<h2 class="section-title"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block14/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h2>
			<div class="separator_wrapper">
 <i class="icon icon-star-two red"></i>
			</div>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block14/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"price",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#PRICES_IBLOCK_ID#",
		"IBLOCK_TYPE" => "robocode_spectrum",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("PRICE_VALUTA","PRICE_PRICE","PRICE_DESCR","PRICE_BTN","PRICE_COLOR",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	<div class="row">
		<div class="col-md-12 text-center">
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block14/text2.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
</div>
 </section> <section class="section-dark" id="contact">
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h2 class="section-title grey"><?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block15/title.php",
							Array(),
							Array("MODE"=>"html")
						);?></h2>
			<div class="separator_wrapper_white">
 <i class="icon icon-star-two grey"></i>
			</div>
			 <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block15/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>
		</div>
	</div>
	<?$APPLICATION->IncludeComponent(
	"robocode:feedback.main", 
	"feedback", 
	array(
		"BUTTON_MESSAGE" => "Отправить",
		"COMPONENT_TEMPLATE" => "feedback",
		"EMAIL_HINT_TEXT" => "email",
		"EMAIL_HINT_TITLE" => "Ваш E-mail",
		"EMAIL_TO" => "#MAIL#",
		"EVENT_MESSAGE_ID" => array(
			0 => "#EMAIL_TEMPLATE_ID#",
		),
		"MESSAGE_HIDTH" => "10",
		"MESSAGE_HINT_TITLE" => "Сообщение",
		"NAME_HINT_TEXT" => "Ваше имя",
		"NAME_HINT_TITLE" => "Ваше имя",
		"OK_TEXT" => "Спасибо! Ваше сообщение было отправлено!",
		"PHONE_HINT_TEXT" => "+7(926)123-45-67",
		"PHONE_HINT_TITLE" => "Ваш телефон",
		"REQUIRED_FIELDS" => array(
			0 => "PHONE",
		),
		"USED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
			2 => "EMAIL",
			3 => "MESSAGE",
		),
		"USE_CAPTCHA" => "N",
		"USE_IN_COMPONENT" => "N",
        "AJAX_MODE" => "Y",
        "AJAX_OPTION_SHADOW" => "N", 
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
	),
	false
);?>
</div>
 </section>
 <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright">
                                <?$APPLICATION->IncludeFile(
							SITE_DIR."/include/block16/text1.php",
							Array(),
							Array("MODE"=>"html")
						);?>               
                    </div>                    
                </div>                
            </div>            
        </div>                
    </div>
	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>