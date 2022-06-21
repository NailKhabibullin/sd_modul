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

use Tygh\Registry;

defined('BOOTSTRAP') or die('Access denied');

    if (!isset($_COOKIE['approve']) && !($mode === 'adult_access')) {
        return [CONTROLLER_STATUS_OK, 'index.adult_access'];
    } elseif (isset($_COOKIE['approve']) && $_COOKIE['approve'] == 0 && !($mode === 'denied')) {
        return [CONTROLLER_STATUS_OK, 'index.denied'];
    }

if ($mode === 'adult_access') {

    if (!empty($_POST)) {
        $age = fn_age_calculation($birthday);
            if ($age >=18) {
                SetCookie('approve', 1);
                return [CONTROLLER_STATUS_REDIRECT, 'index.index'];
                } else {
                    SetCookie('approve', 0);
                    return [CONTROLLER_STATUS_REDIRECT, 'index.denied'];
                }
        }
}
