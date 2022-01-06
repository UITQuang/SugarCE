<?php
$module_name = 'Q_NhaCungCap';
$listViewDefs [$module_name] = 
array (
  'TEN_NCC' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TEN_NCC',
    'width' => '10%',
    'default' => true,
  ),
  'MA_NCC' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_NCC',
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
);
?>
