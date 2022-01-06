<?php
$module_name = 'Q_NhaCungCap';
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
            'name' => 'ten_ncc',
            'label' => 'LBL_TEN_NCC',
            'tabindex' => 'TenNCC',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
