<?php

/**
 * Share plugin: english translation
 *
 * @author Roffun
 * @copyright (c) CmsCot.net, 2017 - TO THIS DAY & ABOVE. All rights reserved.
 * @license BSD License, https://github.com/Roffun/share-plugin-cotonti/blob/master/LICENSE.txt
 **/

defined('COT_CODE') or die('Wrong URL.');

$L['info_name'] = 'Share on social networks';
$L['info_desc'] = 'The output of the block with social networking buttons to share on click';

$L['cfg_sh_size'] = 'Button size';
$L['cfg_sh_size_params'] = 'Big,Medium,Small';
$L['cfg_sh_counter'] = 'Enable counter';
$L['cfg_sh_messagers'] = 'Enable messagers';
$L['cfg_sh_justify'] = 'Horizontal block layout';
$L['cfg_sh_justify_params'] = 'Left, Center, Right';

$L['share_license'] = 'Terms of use:' .cot_rc_link ($cfg['plugins_dir']. '/share/LICENSE.txt', 'BSD 3-Clause License', array ('target' => '_ blank ',' class' => cot_plugin_active ('highslide')? 'license highslide-ajax': 'license'));
$L['share_oficial'] = cot_rc_link('https://cmscot.net/extensions/community-social/share-plugin','A page with a description of the plugin on CmsCot.net', array ('target'=>'_ blank'));
$L['info_notes'] = $L['share_license']. '<br>'. $L['share_oficial'];
