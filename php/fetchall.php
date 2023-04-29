<?php
include('conn.php');

$sql="SELECT * FROM db limit 10";
$que=mysqli_query($conn,$sql);
$result=mysqli_fetch_all($que,MYSQLI_ASSOC);


foreach($result as $data){

    echo   '<div class="stu_card">';
    echo "<div class='pic'>";
     echo  " <img src='images/".$data['pic']."' style='width:100%;height:100%;' >";
    echo  "</div>";
     echo  ' <div class="detail">';
    echo '  <h6 class="stu_name" style="font-family:fantasy;">'.$data['First_Name'].' '.$data['Last_Name'].'</h6>';
     echo      ' <h6 class="stu_ID" style="font-family:fantasy;">'.$data['Student_ID'].'</h6>';
       echo     '<h6 class="stu_phone" style="font-family:fantasy;">'.$data['Phone_Number'].'</h6>';
     echo '  </div>';
    echo '</div>';

}



mysqli_close($conn);