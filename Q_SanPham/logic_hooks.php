<?php
    $hook_version = 1;
    $hook_array['before_save'][] = array(
        1, //Integer
        'ID tu dong tang', //String
        'custom/modules/Q_SanPham/logicQ_SanPham.php', //String or null if using namespaces
        'logicQ_SanPham', //String
        'Ma_SP_BeforeSave', //String
    );