<?php 
session_start();
require_once("connection.php");
// $json=array();
if(isset($_GET['fid'])){$fid = $_GET['fid'];}
$sql = "Select * from sub_schedule_tbl where fid=$fid";
$res = mysqli_query($con,$sql);


$formattedschedule=[];
foreach($res as $ress){
    $formattedschedule[]=[
        'title'=>$ress['sub_remark'],
        'date'=>$ress['sub_weekly_date'],
        'start'=>$ress['sub_start_date'],
        'end'=>$ress['sub_end_date']
        // 'url'=>''
    ];
}
echo json_encode($formattedschedule);   
    
?>
