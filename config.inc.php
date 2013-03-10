<?php

/**
 * REDAXO Redaxpress
 *
 * @author Design
 * @author ralph.zumkeller[at]yakamara[dot]de Ralph Zumkeller
 * @author <a href="http://www.yakamara.de">www.yakamara.de</a>
 *
 * @author Umsetzung
 * @author thomas[dot]blum[at]redaxo[dot]de Thomas Blum
 * @author <a href="http://www.blumbeet.com">www.blumbeet.com</a>
 *
 * @package redaxo4
 * @version svn:$Id$
 */

$mypage = 'redaxpress';

$REX['ADDON']['version'][$mypage] = '1.5';
$REX['ADDON']['author'][$mypage] = 'Design: Wordpress, Magnetum GmbH';
$REX['ADDON']['supportpage'][$mypage] = 'magnetum.de';

if($REX["REDAXO"])
{

  function rex_be_style_redaxpress_css_add($params)
  {
    $params["subject"] .= '
      <!--[if lte IE 7]>
        <link rel="stylesheet" href="../files/addons/be_style/plugins/redaxpress/css_ie_lte_7.css" type="text/css" media="screen, projection, print" />
      <![endif]-->
      <!--[if lte IE 6]>
        <link rel="stylesheet" href="../files/addons/be_style/plugins/redaxpress/css_ie_lte_6.css" type="text/css" media="screen, projection, print" />
      <![endif]-->';
    return $params["subject"];
  }

  rex_register_extension('PAGE_HEADER', 'rex_be_style_redaxpress_css_add');

  function rex_be_style_redaxpress_css_body($params)
  {
    $params["subject"]["class"][] = "be-style-redaxpress-skin";
    return $params["subject"];
  }

  rex_register_extension('PAGE_BODY_ATTR', 'rex_be_style_redaxpress_css_body');

}