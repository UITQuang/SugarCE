<?php 

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicQ_SanPham{
    
    public function Ma_SP_BeforeSave(&$bean, $event, $arguments){
      
    //      global $db;
    //      $ten = $_POST['ten_sp'];  
    //      $number=1;
    
    // $sqlSelect = "SELECT stt_sp FROM Q_SanPham WHERE stt_sp='$number'";
    //     $row = $db->fetchOne($sqlSelect);
    // //
    // while (empty($row)==false){       
      
    //     $number++;
        
    //  $sqlSelect = "SELECT stt_sp FROM Q_SanPham WHERE stt_sp='$number'";
    //  $row = $db->fetchOne($sqlSelect);
       
    // } 
    // $sqlUpdate = "UPDATE Q_SanPham
    // SET stt_sp=  $number
    // WHERE ten_sp='" . $ten ."'";
    // $db->query($sqlUpdate);

    // $id_sp= ""; 
    // if ($number<=9) { $id_sp = "SP000"."$number"; }
    // if (($number<=99) and ($number>9)) { $id_sp= "SP00"."$number";}
    // if (($number<=999) and ($number>99)) { $id_sp= "SP0"."$number";}
    // if ($number>999) { $id_sp= "SP"."$number";}
    // $sqlUpdate = "UPDATE Q_SanPham
    // SET ma_sp='" . $id_sp . "'
    // WHERE ten_sp='" . $ten ."'";
    // $db->query($sqlUpdate);
    global $db;

    $sqlSelect = "SELECT count(*) as total FROM Q_SanPham ";
    $sum= $db->query($sqlSelect);
    $sum=$db->fetchByAssoc($sum);
    $number=$sum['total']+1;
    $id_sp= ""; 
    if ($number<=9) { $id_sp = "SP000"."$number"; }
    if (($number<=99) and ($number>9)) { $id_sp= "SP00"."$number";}
    if (($number<=999) and ($number>99)) { $id_sp= "SP0"."$number";}
    if ($number>999) { $id_sp= "SP"."$number";}
    $bean->ma_sp=$id_sp;
    $bean->name=$bean->ten_sp;
    }
    
    
}
