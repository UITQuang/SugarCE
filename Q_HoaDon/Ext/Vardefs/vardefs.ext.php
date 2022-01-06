<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2021-12-24 08:14:02
$dictionary["Q_HoaDon"]["fields"]["q_hoadon_q_cthd_1"] = array (
  'name' => 'q_hoadon_q_cthd_1',
  'type' => 'link',
  'relationship' => 'q_hoadon_q_cthd_1',
  'source' => 'non-db',
  'module' => 'Q_CTHD',
  'bean_name' => 'Q_CTHD',
  'vname' => 'LBL_Q_HOADON_Q_CTHD_1_FROM_Q_CTHD_TITLE',
  'id_name' => 'q_hoadon_q_cthd_1q_cthd_idb',
);
$dictionary["Q_HoaDon"]["fields"]["q_hoadon_q_cthd_1_name"] = array (
  'name' => 'q_hoadon_q_cthd_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_Q_HOADON_Q_CTHD_1_FROM_Q_CTHD_TITLE',
  'save' => true,
  'id_name' => 'q_hoadon_q_cthd_1q_cthd_idb',
  'link' => 'q_hoadon_q_cthd_1',
  'table' => 'q_cthd',
  'module' => 'Q_CTHD',
  'rname' => 'name',
);
$dictionary["Q_HoaDon"]["fields"]["q_hoadon_q_cthd_1q_cthd_idb"] = array (
  'name' => 'q_hoadon_q_cthd_1q_cthd_idb',
  'type' => 'link',
  'relationship' => 'q_hoadon_q_cthd_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_Q_HOADON_Q_CTHD_1_FROM_Q_CTHD_TITLE',
);


$dictionary['Q_HoaDon']['fields']['ma_hd'] = array( 'name' => 'ma_hd', 'type' => 'varchar', 'label' => 'LBL_MA_HD', 'requited' => true, );
$dictionary['Q_HoaDon']['fields']['stt_hd'] = array( 'name' => 'stt_hd', 'type' => 'varchar', 'label' => 'LBL_STT_HD', 'requited' => true, );
$dictionary['Q_HoaDon']['fields']['giamgia_hd'] = array( 'name' => 'giamgia_hd', 'type' => 'enum', 'label' => 'LBL_GIAMGIA_HD', 'requited' => true, );
$dictionary['Q_HoaDon']['fields']['giamgia_hd2'] = array( 'name' => 'giamgia_hd2', 'type' => 'varchar', 'label' => 'LBL_GIAMGIA_HD2', 'requited' => false, );

?>