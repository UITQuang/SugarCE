<?php
 // created: 2021-12-24 08:15:22
$layout_defs["Contacts"]["subpanel_setup"]['contacts_q_hoadon_1'] = array (
  'order' => 100,
  'module' => 'Q_HoaDon',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_Q_HOADON_1_FROM_Q_HOADON_TITLE',
  'get_subpanel_data' => 'contacts_q_hoadon_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
