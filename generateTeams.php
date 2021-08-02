
<?php 

require_once('mysqli_connect.php');
$query = "SELECT * FROM Players";

$response = @mysqli_query($db, $query);

//$response = mysqli_use_result($db, $query);
//$response = mysqli_store_result($db, $query); 
//$myJSON = json_encode($response);
//echo $myJSON
$json = mysqli_fetch_all ($response, MYSQLI_ASSOC);
echo json_encode($json );

    //  $playerArr = array();

    // while($row = mysqli_fetch_array($response)){
    //     $name = $row['fname'] . ' ' . $row['lname'];
    //     $r = $row['fname'] . ', ' . $row['lname'] . ', ' . $row['gender'];
    //     array_push($playerArr, $r);
    // }
    //  $myJSON = json_encode($playerArr);

    //  echo $myJSON;   

?>