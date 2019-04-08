<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=footer.tags
Tags=footer.tpl:{FOOTER_RC}
[END_COT_EXT]
==================== */

/**
 * Share plugin: footer
 *
 * @author Roffun
 * @copyright (c) CmsCot.net, 2017 - TO THIS DAY & ABOVE. All rights reserved.
 * @license BSD License, https://github.com/Roffun/share-plugin-cotonti/blob/master/LICENSE
 **/

defined('COT_CODE') or die('Wrong URL.');

require_once cot_incfile('share', 'plug', 'resources');

$out['footer_rc'] .= $R['share_goodshare_lib'];
Resources::embedFooter(cot_rc_minify('window.addEventListener("load",function(){let sh_h = document.querySelectorAll(".goodshare[hidden]");if(sh_h){'.$R['share_goodshare_css'].'for(let i = 0; i < sh_h.length; i++) {sh_h[i].removeAttribute("hidden");}}});', 'js',99));
