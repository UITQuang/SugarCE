<?php
$module_name = 'Q_HoaDon';
$listViewDefs [$module_name] = 
array (
  'MA_HD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_HD',
    'width' => '10%',
    'default' => true,
  ),
  'GIAMGIA_HD' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_GIAMGIA_HD',
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
