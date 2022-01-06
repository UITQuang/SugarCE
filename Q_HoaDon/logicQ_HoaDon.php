<?php 

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicQ_HoaDon{
    
    public function Ma_HD_BeforeSave(&$bean, $event, $arguments){
      
    //      global $db;
    //      $ten = $_POST['name'];  
    //      $number=1;
    
    // $sqlSelect = "SELECT stt_hd FROM Q_HoaDon WHERE stt_hd='$number'";
    //     $row = $db->fetchOne($sqlSelect);
    // //
    // while (empty($row)==false){       
      
    //     $number++;
        
    //  $sqlSelect = "SELECT stt_hd FROM Q_HoaDon WHERE stt_hd='$number'";
    //  $row = $db->fetchOne($sqlSelect);
       
    // } 
    // $sqlUpdate = "UPDATE Q_HoaDon
    // SET stt_hd=  $number
    // WHERE name ='" . $ten ."'";
    // $db->query($sqlUpdate);

    // $id_hd= ""; 
    // if ($number<=9) { $id_hd = "HD000"."$number"; }
    // if (($number<=99) and ($number>9)) { $id_hd= "HD00"."$number";}
    // if (($number<=999) and ($number>99)) { $id_hd= "HD0"."$number";}
    // if ($number>999) { $id_hd= "hd"."$number";}
    // $sqlUpdate = "UPDATE Q_HoaDon
    // SET ma_hd='" . $id_hd . "'
    // WHERE name='" . $ten ."'";
    // $db->query($sqlUpdate);
    global $db;

    $sqlSelect = "SELECT count(*) as total FROM Q_HoaDon ";
    $sum= $db->query($sqlSelect);
    $sum=$db->fetchByAssoc($sum);
    $number=$sum['total']+1;
    $id_hd= ""; 
    if ($number<=9) { $id_hd = "HD000"."$number"; }
    if (($number<=99) and ($number>9)) { $id_hd= "HD00"."$number";}
    if (($number<=999) and ($number>99)) { $id_hd= "HD0"."$number";}
    if ($number>999) { $id_hd= "HD"."$number";}
    $bean->ma_hd=$id_hd;
    $bean->name='Hóa Đơn '."$number" ;   }
    
    
}
