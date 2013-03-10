<?php

/**
 * REDAXO Default-Theme
 *
 * @author Design
 * @author magnetum.de
 * @author <a href="http://www.magnetum.de">www.magnetum.de</a>
 * 
 * @package redaxo4
 * @version svn:$Id$
 */

$error = '';

if ($error != '')
  $REX['ADDON']['installmsg']['redaxpress'] = $error;
else
  $REX['ADDON']['install']['redaxpress'] = true;

?>