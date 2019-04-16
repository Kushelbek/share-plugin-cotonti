<?php

/**
 * Share плагин: русский перевод
 *
 * @author Roffun
 * @copyright (c) CmsCot.net, 2017 - TO THIS DAY & ABOVE. All rights reserved.
 * @license BSD License, https://github.com/Roffun/share-plugin-cotonti/blob/master/LICENSE.txt
 **/

defined('COT_CODE') or die('Wrong URL.');

$L['info_name'] = 'Поделиться в социальных сетях';
$L['info_desc'] = 'Вывод блока с кнопками социальных сетей, чтобы поделиться по клику';

$L['cfg_sh_size'] = 'Размер кнопок';
$L['cfg_sh_size_params'] = 'Большие,Средние,Маленькие';
$L['cfg_sh_counter'] = 'Включить счетчик';
$L['cfg_sh_messagers'] = 'Включить мессенджеры';
$L['cfg_sh_justify'] = 'Горизонтальное расположение блока';
$L['cfg_sh_justify_params'] = 'Слева,По центру,Справа';

$L['share_license'] = 'Условия использования: '.cot_rc_link($cfg['plugins_dir'].'/share/LICENSE.txt','BSD 3-Clause License', array('target'=>'_blank','class'=>cot_plugin_active('highslide') ? 'license highslide-ajax ': 'license'));
$L['share_oficial'] = cot_rc_link('https://cmscot.net/extensions/community-social/share-plugin','Страница c описанием плагина на CmsCot.net', array('target'=>'_blank'));
$L['info_notes'] = $L['share_license'].'<br>'.$L['share_oficial'];
