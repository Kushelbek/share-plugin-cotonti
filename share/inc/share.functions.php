<?php
/**
 * Share functions
 *
 * @author Roffun
 * @copyright (c) CmsCot.net, 2017 - TO THIS DAY & ABOVE. All rights reserved.
 * @license BSD License, https://github.com/Roffun/share-plugin-cotonti/blob/master/LICENSE
 **/

defined('COT_CODE') or die('Wrong URL');

require_once cot_langfile('share', 'plug');

function share($justify)
{
    if (empty($justify)) {
        $justify = cot::$cfg['plugin']['share']['sh_justify'];
    }
    $t = new XTemplate(cot_tplfile('share', 'plug'));

    $t->assign('SHARE_ID', cot_unique(4).'_');

    if (cot::$cfg['plugin']['share']['sh_counter']) {
        $t->assign(array(
            'SHARE_VKONTAKTE_COUNTER' => '<q data-counter="vkontakte"></q>',
            'SHARE_FACEBOOK_COUNTER' => '<q data-counter="facebook"></q>',
            'SHARE_ODNOKLASSNIKI_COUNTER' => '<q data-counter="odnoklassniki"></q>',
            'SHARE_MOIMIR_COUNTER' => '<q data-counter="moimir"></q>',
            'SHARE_LINKEDIN_COUNTER' => '<q data-counter="linkedin"></q>',
            'SHARE_TUMBLR_COUNTER' => '<q data-counter="tumblr"></q>',
            'SHARE_SURFINGBIRD_COUNTER' => '<q data-counter="surfingbird"></q>',
            'SHARE_PINTEREST_COUNTER' => '<q data-counter="pinterest"></q>',
            'SHARE_REDDIT_COUNTER' => '<q data-counter="reddit"></q>',
            'SHARE_BUFFER_COUNTER' => '<q data-counter="buffer"></q>',
            'SHARE_STUMBLEUPON_COUNTER' => '<q data-counter="stumbleupon"></q>',
            'SHARE_POCKET_COUNTER' => '<q data-counter="pocket"></q>',
            'SHARE_XING_COUNTER' => '<q data-counter="xing"></q>'));
    }
    $t->assign(array(
    'SHARE_SIZE' => 'sh-' . cot::$cfg['plugin']['share']['sh_size'],
    'SHARE_JUSTIFY' =>  $justify.'--'
));
    $t->parse('MAIN');

    return $t->text('MAIN');
}
