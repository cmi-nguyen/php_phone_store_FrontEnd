<?php require_once("./admin/includes/scripts/api/APIs.php");
$url = 'http://localhost:8090/bill';
$resp = getList($url);
// calculate best sell
$todaySale = 0;
$monthlySale=0;
foreach ($resp as $rs) {
    if(str_contains($rs->date,date("Y/m/d"))){
        $todaySale+=$rs->total;
    }
    if(str_contains($rs->date,date("m/d"))){
        $monthlySale+=$rs->total;
    }
}