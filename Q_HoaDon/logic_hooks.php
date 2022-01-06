<?php
    $hook_version = 1;
    $hook_array['before_save'][] = array(
        1, //Integer
        'ID tu dong tang', //String
        'custom/modules/Q_HoaDon/logicQ_HoaDon.php', //String or null if using namespaces
        'logicQ_HoaDon', //String
        'Ma_HD_BeforeSave', //String
    );