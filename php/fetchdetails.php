<?php
include('conn.php');
$key=$_POST['key'];
$sql="SELECT * FROM db limit 10";
$que=mysqli_query($conn,$sql);
$result=mysqli_fetch_all($que,MYSQLI_ASSOC);

$count=0;

foreach($result as $data){

if(strpos(strtolower($data['First_Name']),strtolower($key))!==false || strpos(strtolower($data['Last_Name']),strtolower($key))!==false || strpos(strtolower($data['Student_ID']),strtolower($key))!==false){

 echo   '<div class="stu_card">';
echo "<div class='pic'>";
 echo  " <img src='images/".$data['pic']."' style='width:100%;height:100%;' >";
echo  "</div>";
 echo  ' <div class="detail">';
echo '  <h6 class="stu_name">'.$data['First_Name'].' '.$data['Last_Name'].'</h6>';
 echo      ' <h6 class="stu_ID">'.$data['Student_ID'].'</h6>';
   echo     '<h6 class="stu_phone">'.$data['Phone_Number'].'</h6>';
 
 echo '  </div>';
echo '</div>';
$count++;
}


}

if($count==0){
echo '<h3 class="stu_phone">No results found</h3>';
}
$count=0;


mysqli_close($conn);