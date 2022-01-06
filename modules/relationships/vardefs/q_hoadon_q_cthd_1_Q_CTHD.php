<?php
// created: 2021-12-24 08:14:02
$dictionary["Q_CTHD"]["fields"]["q_hoadon_q_cthd_1"] = array (
  'name' => 'q_hoadon_q_cthd_1',
  'type' => 'link',
  'relationship' => 'q_hoadon_q_cthd_1',
  'source' => 'non-db',
  'module' => 'Q_HoaDon',
  'bean_name' => 'Q_HoaDon',
  'vname' => 'LBL_Q_HOADON_Q_CTHD_1_FROM_Q_HOADON_TITLE',
  'id_name' => 'q_hoadon_q_cthd_1q_hoadon_ida',
);
$dictionary["Q_CTHD"]["fields"]["q_hoadon_q_cthd_1_name"] = array (
  'name' => 'q_hoadon_q_cthd_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_Q_HOADON_Q_CTHD_1_FROM_Q_HOADON_TITLE',
  'save' => true,
  'id_name' => 'q_hoadon_q_cthd_1q_hoadon_ida',
  'link' => 'q_hoadon_q_cthd_1',
  'table' => 'q_hoadon',
  'module' => 'Q_HoaDon',
  'rname' => 'name',
);
$dictionary["Q_CTHD"]["fields"]["q_hoadon_q_cthd_1q_hoadon_ida"] = array (
  'name' => 'q_hoadon_q_cthd_1q_hoadon_ida',
  'type' => 'link',
  'relationship' => 'q_hoadon_q_cthd_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_Q_HOADON_Q_CTHD_1_FROM_Q_HOADON_TITLE',
);
