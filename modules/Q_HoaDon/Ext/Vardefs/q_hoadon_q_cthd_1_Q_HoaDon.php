<?php
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
