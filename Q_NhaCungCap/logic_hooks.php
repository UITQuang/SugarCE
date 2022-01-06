<?php
    $hook_version = 1;

    // $hook_array['before_save'][] = array(
    //     1, //Integer
    //     'ID tu dong tang', //String
    //     'custom/modules/Q_NhaCungCap/logicQ_NhaCungCap1.php', //String or null if using namespaces
    //     'logicQ_NhaCungCap1', //String
    //     'Ma_NCC_AfterSave', //String
    // );
    $hook_array['before_save'][] = array(
        1, //Integer
        'ID tu dong tang', //String
        'custom/modules/Q_NhaCungCap/logicQ_NhaCungCap.php', //String or null if using namespaces
        'logicQ_NhaCungCap', //String
        'Ma_NCC_BeforeSave', //String
    );