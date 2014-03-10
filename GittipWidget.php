<?php
/**
 * GittipWidget.php
 * This widget makes it possible to insert gittip widgets in articles.
 * The syntax is: <gittip>username</gittip>
 * License: Simpified BSD License.
*/

$wgExtensionCredits['parserhook'][] = array(
	'path'        => __FILE__,
	'name'        => 'GittipWidget',
	'author'      => array('Marc Juul'),
	'url'         => 'http://github.com/juul/mediawiki-gittip-widget',
	'version'     => '0.1'
);

$wgHooks['SkinAfterBottomScripts'][] = "gittipWidgetJS";
$wgHooks['ParserFirstCallInit'][] = "gittipWidget";


function gittipWidget(&$parser) {
  $parser->setHook('gittip', 'gittipWidgetTag' );
}

function gittipWidgetTag($input, $argv, $parser) {
  $input = preg_replace('/[^\w\d-]+/', '', $input);
  $input = preg_replace('/^-/', '', $input);
  if(empty($input)) {
    return "<p>GittipWidget error: No username specified.</p>";
  }
  return '<div data-gittip-username="'.$input.'"></div>';
}

function gittipWidgetJS($skin, &$text) {
  $text = $text.'<script src="//gttp.co/v1.js"></script>';
}


