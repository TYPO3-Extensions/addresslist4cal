<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "addresslist4cal".
 *
 * Auto generated 19-06-2013 22:06
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Address List for Calendar Events',
	'description' => 'Adds selection of tt_address records to the CAL extension.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.7',
	'dependencies' => 'cal,tt_address',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Michael Oehlhof',
	'author_email' => 'typo3@oehlhof.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.1.0-0.0.0',
			'typo3' => '4.5.0-4.7.99',
			'cal' => '1.3.3-1.5.2',
			'tt_address' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:78:{s:9:"ChangeLog";s:4:"58d9";s:12:"ext_icon.gif";s:4:"477a";s:17:"ext_localconf.php";s:4:"73fd";s:14:"ext_tables.php";s:4:"a6a8";s:14:"ext_tables.sql";s:4:"d23f";s:16:"locallang_db.xml";s:4:"6251";s:22:"Documentation/make.bat";s:4:"cf97";s:22:"Documentation/Makefile";s:4:"c5ae";s:24:"Documentation/README.txt";s:4:"a9b2";s:47:"Documentation/build/doctrees/environment.pickle";s:4:"772b";s:42:"Documentation/build/doctrees/index.doctree";s:4:"9054";s:38:"Documentation/build/html/genindex.html";s:4:"e5f5";s:35:"Documentation/build/html/index.html";s:4:"8c0b";s:36:"Documentation/build/html/objects.inv";s:4:"268b";s:36:"Documentation/build/html/search.html";s:4:"e000";s:39:"Documentation/build/html/searchindex.js";s:4:"e353";s:58:"Documentation/build/html/_images/manual_html_cal_event.png";s:4:"3fac";s:43:"Documentation/build/html/_sources/index.txt";s:4:"c527";s:48:"Documentation/build/html/_static/ajax-loader.gif";s:4:"ae66";s:42:"Documentation/build/html/_static/basic.css";s:4:"941d";s:51:"Documentation/build/html/_static/comment-bright.png";s:4:"0c85";s:50:"Documentation/build/html/_static/comment-close.png";s:4:"2635";s:44:"Documentation/build/html/_static/comment.png";s:4:"882e";s:45:"Documentation/build/html/_static/contents.png";s:4:"a547";s:44:"Documentation/build/html/_static/doctools.js";s:4:"550f";s:49:"Documentation/build/html/_static/down-pressed.png";s:4:"ebe8";s:41:"Documentation/build/html/_static/down.png";s:4:"f6f3";s:41:"Documentation/build/html/_static/file.png";s:4:"6587";s:42:"Documentation/build/html/_static/jquery.js";s:4:"db2c";s:42:"Documentation/build/html/_static/minus.png";s:4:"8d57";s:41:"Documentation/build/html/_static/plus.png";s:4:"0125";s:45:"Documentation/build/html/_static/pygments.css";s:4:"639b";s:43:"Documentation/build/html/_static/README.txt";s:4:"d883";s:46:"Documentation/build/html/_static/s-buttons.png";s:4:"e2ee";s:47:"Documentation/build/html/_static/searchtools.js";s:4:"8314";s:50:"Documentation/build/html/_static/shadow-footer.jpg";s:4:"1fa6";s:56:"Documentation/build/html/_static/shadow-page-505x505.png";s:4:"c7bd";s:47:"Documentation/build/html/_static/typo3-logo.png";s:4:"9907";s:47:"Documentation/build/html/_static/typo3basic.css";s:4:"170a";s:48:"Documentation/build/html/_static/typo3sphinx.css";s:4:"4901";s:46:"Documentation/build/html/_static/underscore.js";s:4:"5831";s:47:"Documentation/build/html/_static/up-pressed.png";s:4:"8ea9";s:39:"Documentation/build/html/_static/up.png";s:4:"ecc3";s:46:"Documentation/build/html/_static/websupport.js";s:4:"8dcd";s:61:"Documentation/build/html/_static/fonts/share-bold-webfont.eot";s:4:"8c37";s:61:"Documentation/build/html/_static/fonts/share-bold-webfont.svg";s:4:"8ec6";s:61:"Documentation/build/html/_static/fonts/share-bold-webfont.ttf";s:4:"2199";s:62:"Documentation/build/html/_static/fonts/share-bold-webfont.woff";s:4:"ab6f";s:63:"Documentation/build/html/_static/fonts/share-italic-webfont.eot";s:4:"d209";s:63:"Documentation/build/html/_static/fonts/share-italic-webfont.svg";s:4:"ad8a";s:63:"Documentation/build/html/_static/fonts/share-italic-webfont.ttf";s:4:"298c";s:64:"Documentation/build/html/_static/fonts/share-italic-webfont.woff";s:4:"3f06";s:64:"Documentation/build/html/_static/fonts/share-regular-webfont.eot";s:4:"a366";s:64:"Documentation/build/html/_static/fonts/share-regular-webfont.svg";s:4:"a5ef";s:64:"Documentation/build/html/_static/fonts/share-regular-webfont.ttf";s:4:"3a9a";s:65:"Documentation/build/html/_static/fonts/share-regular-webfont.woff";s:4:"b60d";s:48:"Documentation/build/html/_static/icons/howto.png";s:4:"efbe";s:51:"Documentation/build/html/_static/icons/question.png";s:4:"b0c5";s:46:"Documentation/build/html/_static/icons/tip.png";s:4:"1534";s:50:"Documentation/build/html/_static/icons/warning.png";s:4:"4f88";s:48:"Documentation/build/html/_static/icons/world.png";s:4:"009f";s:45:"Documentation/build/latex/addresslist4cal.pdf";s:4:"bf21";s:52:"Documentation/build/latex/addresslist4cal.synctex.gz";s:4:"2446";s:45:"Documentation/build/latex/addresslist4cal.tex";s:4:"7085";s:38:"Documentation/build/latex/fncychap.sty";s:4:"568e";s:34:"Documentation/build/latex/Makefile";s:4:"aa81";s:51:"Documentation/build/latex/manual_html_cal_event.png";s:4:"3fac";s:36:"Documentation/build/latex/python.ist";s:4:"c88d";s:36:"Documentation/build/latex/sphinx.sty";s:4:"9441";s:41:"Documentation/build/latex/sphinxhowto.cls";s:4:"1296";s:42:"Documentation/build/latex/sphinxmanual.cls";s:4:"3b8e";s:47:"Documentation/build/latex/sphinxtypo3manual.cls";s:4:"8945";s:38:"Documentation/build/latex/tabulary.sty";s:4:"e4c4";s:28:"Documentation/source/conf.py";s:4:"ef79";s:30:"Documentation/source/index.rst";s:4:"c527";s:53:"Documentation/source/images/manual_html_cal_event.png";s:4:"3fac";s:14:"doc/manual.sxw";s:4:"893e";s:49:"hooks/class.tx_addresslist4cal_frontend_hooks.php";s:4:"cf7a";}',
	'suggests' => array(
	),
);

?>