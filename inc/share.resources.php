<?php
/**
 * Share plugin: resources
 *
 * @author Roffun
 * @copyright (c) CmsCot.net, 2017 - TO THIS DAY & ABOVE. All rights reserved.
 * @license BSD License, https://github.com/Roffun/share-plugin-cotonti/blob/master/LICENSE.txt
 **/

defined('COT_CODE') or die('Wrong URL.');

$R['share_goodshare_lib'] = '<script src="'.$cfg['plugins_dir'] . '/share/lib/goodshare/goodshare.min.js" defer></script>';
if ($cfg['plugin']['share']['css'])
{
$R['share_goodshare_css'] = 'var h=document.head|| document.getElementsByTagName("head")[0];if(h)var s = document.createElement("link");s.rel = "stylesheet";s.href = "'.$cfg['plugins_dir'] .'/share/lib/goodshare/goodshare.min.css";h.appendChild(s);';
}
