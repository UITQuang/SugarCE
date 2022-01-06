<?php
$module_name = 'Q_SanPham';
$listViewDefs [$module_name] = 
array (
  'TEN_SP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TEN_SP',
    'width' => '10%',
    'default' => true,
  ),
  'MA_SP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_SP',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'GIA_BAN_SP' => 
  array (
    'type' => 'int',
    'label' => 'LBL_GIA_BAN_SP',
    'width' => '10%',
    'default' => true,
  ),
);
?>
