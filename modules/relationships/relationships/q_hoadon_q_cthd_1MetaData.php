<?php
// created: 2021-12-24 08:14:02
$dictionary["q_hoadon_q_cthd_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'q_hoadon_q_cthd_1' => 
    array (
      'lhs_module' => 'Q_HoaDon',
      'lhs_table' => 'q_hoadon',
      'lhs_key' => 'id',
      'rhs_module' => 'Q_CTHD',
      'rhs_table' => 'q_cthd',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'q_hoadon_q_cthd_1_c',
      'join_key_lhs' => 'q_hoadon_q_cthd_1q_hoadon_ida',
      'join_key_rhs' => 'q_hoadon_q_cthd_1q_cthd_idb',
    ),
  ),
  'table' => 'q_hoadon_q_cthd_1_c',
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
      'name' => 'q_hoadon_q_cthd_1q_hoadon_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'q_hoadon_q_cthd_1q_cthd_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'q_hoadon_q_cthd_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'q_hoadon_q_cthd_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'q_hoadon_q_cthd_1q_hoadon_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'q_hoadon_q_cthd_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'q_hoadon_q_cthd_1q_cthd_idb',
      ),
    ),
  ),
);