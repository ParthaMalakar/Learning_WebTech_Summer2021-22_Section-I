<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($conn){
    //     echo "Success";
    // }else{
    //     echo "DB Error...";
    // }

    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);
    
  echo  "<table border ='2'>";
  echo   "<tr>";
  echo   "<th>Id</th>";
  echo   "<th>Name</th>";
  echo "<th>Password</th>";
  echo "<th>Email</th>";
  echo  "</tr>";
 



while($row= mysqli_fetch_assoc($result)){
      echo "<tr><td>";
      echo $row['Id']."</td>";
      echo "<td>".$row['Name']."</td>";
      echo "<td>". $row['Password'] ."</td>";
       echo "<td>". $row['Email']."</td>";


    

     
       
    }

     echo "</table>";
?>