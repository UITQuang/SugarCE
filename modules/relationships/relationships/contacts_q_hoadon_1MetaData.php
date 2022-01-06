<?php
// created: 2021-12-24 08:15:22
$dictionary["contacts_q_hoadon_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_q_hoadon_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Q_HoaDon',
      'rhs_table' => 'q_hoadon',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_q_hoadon_1_c',
      'join_key_lhs' => 'contacts_q_hoadon_1contacts_ida',
      'join_key_rhs' => 'contacts_q_hoadon_1q_hoadon_idb',
    ),
  ),
  'table' => 'contacts_q_hoadon_1_c',
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
      'name' => 'contacts_q_hoadon_1contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_q_hoadon_1q_hoadon_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_q_hoadon_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_q_hoadon_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_q_hoadon_1contacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_q_hoadon_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_q_hoadon_1q_hoadon_idb',
      ),
    ),
  ),
);