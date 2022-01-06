<?php
$module_name = 'Q_SanPham';
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
          0 => 
          array (
            'name' => 'ten_sp',
            'label' => 'LBL_TEN_SP',
            'tabindex' => 'TenSP',
          ),
          1 => 
          array (
            'name' => 'gia_ban_sp',
            'label' => 'LBL_GIA_BAN_SP',
            'tabindex' => 'GiaBan',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'q_nhacungcap_q_sanpham_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
