<?php
$module_name = 'Q_HoaDon';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        2 => 
        array (
          0 => 'LBL_GIAMGIA_HD',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'giamgia_hd',
            'customCode' => '{include file="custom/modules/Q_HoaDon/tpls/giamgia_hd.tpl"}',
            'tabindex' => 'GiamGiaHD',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'q_hoadon_q_cthd_1_name',
            'label' => 'LBL_Q_HOADON_Q_CTHD_1_FROM_Q_CTHD_TITLE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'contacts_q_hoadon_1_name',
            'label' => 'LBL_CONTACTS_Q_HOADON_1_FROM_CONTACTS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
