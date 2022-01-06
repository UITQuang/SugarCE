<?php
// created: 2021-12-24 08:15:22
$dictionary["Q_HoaDon"]["fields"]["contacts_q_hoadon_1"] = array (
  'name' => 'contacts_q_hoadon_1',
  'type' => 'link',
  'relationship' => 'contacts_q_hoadon_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_Q_HOADON_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_q_hoadon_1contacts_ida',
);
$dictionary["Q_HoaDon"]["fields"]["contacts_q_hoadon_1_name"] = array (
  'name' => 'contacts_q_hoadon_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_Q_HOADON_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_q_hoadon_1contacts_ida',
  'link' => 'contacts_q_hoadon_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Q_HoaDon"]["fields"]["contacts_q_hoadon_1contacts_ida"] = array (
  'name' => 'contacts_q_hoadon_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_q_hoadon_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_Q_HOADON_1_FROM_Q_HOADON_TITLE',
);
