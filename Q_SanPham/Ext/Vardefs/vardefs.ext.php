<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-12-25 10:06:17
$dictionary["Q_SanPham"]["fields"]["q_cthd_q_sanpham_1"] = array (
  'name' => 'q_cthd_q_sanpham_1',
  'type' => 'link',
  'relationship' => 'q_cthd_q_sanpham_1',
  'source' => 'non-db',
  'module' => 'Q_CTHD',
  'bean_name' => 'Q_CTHD',
  'vname' => 'LBL_Q_CTHD_Q_SANPHAM_1_FROM_Q_CTHD_TITLE',
);


// created: 2021-12-24 08:13:03
$dictionary["Q_SanPham"]["fields"]["q_nhacungcap_q_sanpham_1"] = array (
  'name' => 'q_nhacungcap_q_sanpham_1',
  'type' => 'link',
  'relationship' => 'q_nhacungcap_q_sanpham_1',
  'source' => 'non-db',
  'module' => 'Q_NhaCungCap',
  'bean_name' => 'Q_NhaCungCap',
  'vname' => 'LBL_Q_NHACUNGCAP_Q_SANPHAM_1_FROM_Q_NHACUNGCAP_TITLE',
  'id_name' => 'q_nhacungcap_q_sanpham_1q_nhacungcap_ida',
);
$dictionary["Q_SanPham"]["fields"]["q_nhacungcap_q_sanpham_1_name"] = array (
  'name' => 'q_nhacungcap_q_sanpham_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_Q_NHACUNGCAP_Q_SANPHAM_1_FROM_Q_NHACUNGCAP_TITLE',
  'save' => true,
  'id_name' => 'q_nhacungcap_q_sanpham_1q_nhacungcap_ida',
  'link' => 'q_nhacungcap_q_sanpham_1',
  'table' => 'q_nhacungcap',
  'module' => 'Q_NhaCungCap',
  'rname' => 'name',
);
$dictionary["Q_SanPham"]["fields"]["q_nhacungcap_q_sanpham_1q_nhacungcap_ida"] = array (
  'name' => 'q_nhacungcap_q_sanpham_1q_nhacungcap_ida',
  'type' => 'link',
  'relationship' => 'q_nhacungcap_q_sanpham_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_Q_NHACUNGCAP_Q_SANPHAM_1_FROM_Q_SANPHAM_TITLE',
);


$dictionary['Q_SanPham']['fields']['ten_sp'] = array( 'name' => 'ten_sp', 'type' => 'varchar', 'label' => 'LBL_TEN_SP', 'requited' => true, );

$dictionary['Q_SanPham']['fields']['ma_sp'] = array( 'name' => 'ma_sp', 'type' => 'varchar', 'label' => 'LBL_MA_SP', 'requited' => true, );

$dictionary['Q_SanPham']['fields']['gia_ban_sp'] = array( 'name' => 'gia_ban_sp', 'type' => 'int', 'label' => 'LBL_GIA_BAN_SP', 'requited' => true, );
?>