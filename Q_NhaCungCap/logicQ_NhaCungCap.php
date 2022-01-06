<?php 

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicQ_NhaCungCap{
    //  static $already_ran = false;
    public function Ma_NCC_BeforeSave(&$bean, $event, $arguments){
        // if(self::$already_ran == true) return;
        //    self::$already_ran = true;    

        // $bean_ncc = BeanFactory::getBean('Q_NhaCungCap');
        // $bean_ncc->stt_ncc="1";
    //      global $db;
    //      $ten = $_POST['ten_ncc'];  
    //      $number=1;
    
    // $sqlSelect = "SELECT stt_ncc FROM Q_NhaCungCap WHERE stt_ncc='$number'";
    //     $row = $db->fetchOne($sqlSelect);
    // //
    // while (empty($row)==false){       
      
    //     $number++;
        
    //  $sqlSelect = "SELECT stt_ncc FROM Q_NhaCungCap WHERE stt_ncc='$number'";
    //  $row = $db->fetchOne($sqlSelect);
       
    // } 
    // $sqlUpdate = "UPDATE Q_NhaCungCap
    // SET stt_ncc=  $number
    // WHERE ten_ncc='" . $ten ."'";
    // $db->query($sqlUpdate);
    global $db;

    $sqlSelect = "SELECT count(*) as total FROM Q_NhaCungCap ";
    $sum= $db->query($sqlSelect);
    $sum=$db->fetchByAssoc($sum);
    $number=$sum['total']+1;
    $id_ncc= ""; 
    if ($number<=9) { $id_ncc = "NCC000"."$number"; }
    if (($number<=99) and ($number>9)) { $id_ncc= "NCC00"."$number";}
    if (($number<=999) and ($number>99)) { $id_ncc= "NCC0"."$number";}
    if ($number>999) { $id_ncc= "NCC"."$number";}
    $bean->ma_ncc=$id_ncc;
    $bean->name='Q_'."$bean->ten_ncc";
    // $sqlUpdate = "UPDATE Q_NhaCungCap
    // SET ma_ncc='" . $id_ncc . "'
    // WHERE ten_ncc='" . $ten ."'";
    // $db->query($sqlUpdate);
     }
    
    
}
