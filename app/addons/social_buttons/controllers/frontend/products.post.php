<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

/** @var string $controller */

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'view') {

    $restored_send_data = fn_restore_post_data('send_data');
    if (!empty($restored_send_data)) {
        Tygh::$app['view']->assign('send_data', $restored_send_data);
    }

    $params = [
        'object_id' => (int) $_REQUEST['product_id'],
        'object'    => $controller,
        'lang_code' => CART_LANGUAGE,
    ];

    $provider_settings = fn_get_sb_provider_settings($params);

    Tygh::$app['view']->assign('display_button_block', fn_sb_display_block($provider_settings));
    Tygh::$app['view']->assign('provider_settings', $provider_settings);
    Tygh::$app['view']->assign('provider_meta_data', fn_get_sb_providers_meta_data($params));
}
