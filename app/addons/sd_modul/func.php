<?php

use Tygh\Languages\Languages;

defined('BOOTSTRAP') or die('Access denied');

function fn_age_calculation($birthday) {
    if (!empty($_POST['guest_data']['birthday'])) {
        $birthday = $_POST['guest_data']['birthday'];
        $year = date('Y', strtotime($birthday));
        $month = date('m-d', strtotime($birthday));

        $_year = date('Y', TIME);
        $_month = date('m-d', TIME);

        $age = $_year - $year;

        if ($month > $_month) {
            $age--;
        }
        return $age;
    }
    return false;
}
