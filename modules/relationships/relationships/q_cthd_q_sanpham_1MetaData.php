<?php
// created: 2021-12-25 10:06:17
$dictionary["q_cthd_q_sanpham_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'q_cthd_q_sanpham_1' => 
    array (
      'lhs_module' => 'Q_CTHD',
      'lhs_table' => 'q_cthd',
      'lhs_key' => 'id',
      'rhs_module' => 'Q_SanPham',
      'rhs_table' => 'q_sanpham',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'q_cthd_q_sanpham_1_c',
      'join_key_lhs' => 'q_cthd_q_sanpham_1q_cthd_ida',
      'join_key_rhs' => 'q_cthd_q_sanpham_1q_sanpham_idb',
    ),
  ),
  'table' => 'q_cthd_q_sanpham_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'q_cthd_q_sanpham_1q_cthd_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'q_cthd_q_sanpham_1q_sanpham_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'q_cthd_q_sanpham_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'q_cthd_q_sanpham_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'q_cthd_q_sanpham_1q_cthd_ida',
        1 => 'q_cthd_q_sanpham_1q_sanpham_idb',
      ),
    ),
  ),
);