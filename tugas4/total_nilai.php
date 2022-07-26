<?php
$nama =(string)readline("masukkan nama siswwa");
$uts =(int)readline("masukkan nilai UTS");
$uas =(int)readline("masukkan nilai uas");

$total=($uts + $uas)/2;
if ($total>90){
    echo "$nama, anda mendapatkan nilai sempurna :".$total;
}elseif($total>=80){
    echo "$nama, anda mendapatkan nilai bagus :".$total;
}elseif($total>=60){
    echo "$nama, anda mendapatkan nilai kurang bagus :".$total;
}elseif($total>=40){
    echo "$nama, anda mendapatkan nilai jelek";
}else {
    echo "$nama nilai anda jelek harap mengulang kembali";
}
?>