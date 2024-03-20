<?php
include_once("connection.php");
// $fid = "";
if (isset($_GET['fid'])) {
    echo $fid = $_GET['fid'];
}
$date = date('y/m/d');

echo $sql1 = "Select gsid from group_stud_tbl where faculty_id = $fid";
$res1 = mysqli_query($con, $sql1);
while ($row = mysqli_fetch_assoc($res1)) {
    $sql2 = "Select * from progress_tbl where grpid = $row[gsid]";
    $res2 = mysqli_query($con, $sql2);
    // mysqli_close($con);
    $x = mysqli_num_rows($res2);

    if ($x > 0) {
    } else {
        getdata($row['gsid']);
    }

}
function getdata($d){
    include_once("connection.php");
    $date = date('y/m/d');
    $query = "INSERT INTO `progress_tbl`(`proid`, `grpid`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `date1`)
        VALUES ('','$d',0,0,0,0,0,0,0,0,0,'$date')";
    $result = mysqli_query($con, $query);
}

$sql = "select * from `group_stud_tbl` g join `progress_tbl` p on g.gsid=p.grpid where g.faculty_id = $fid";
$res = mysqli_query($con, $sql);
$arr = [];
$x = [];
while ($data = mysqli_fetch_assoc($res)) {
    $arr[] = $data;
    $a = $data['p1'] + $data['p2'] + $data['p3'] + $data['p4'] + $data['p5'] + $data['p6'] + $data['p7'] + $data['p8'] + $data['p9'];
    $amt = ($a * 100) / 900;
    $x[] = $amt;
}
$x1 = 0;
foreach ($arr as &$data) {
    $data['count'] = $x[$x1];
    $x1++;
}
echo json_encode($arr);
?>