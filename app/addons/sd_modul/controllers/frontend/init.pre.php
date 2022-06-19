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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $suffix = '';
    if (!isset($_COOKIE['approve'])) {
        $suffix = '.modul';
    } elseif(isset($_COOKIE['approve']) && $_COOKIE['approve'] == 0) {
        $suffix = '.denied';
    }
}

if ($mode === 'modul') {
    if (!empty($_POST)) {
        $age = fn_age_calculation($birthday);
            if ($age >=18) {
                SetCookie('approve', 1);
                //fn_print_die ($_COOKIE);
                } else {
                    SetCookie('approve', 0);
                    $suffix = '.denied';
                }
        }
}
