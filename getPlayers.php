
<?php 

    require_once('mysqli_connect.php');
    $query = "SELECT fname, lname, gender FROM Players";
  //  $query = "INSERT $fname, $lname , $gender INTO Players";

  
    $response = @mysqli_query($db, $query);

   // echo $response;
    // $myJSON = json_encode($response);

    //      echo $myJSON;  
    // $row = mysqli_fetch_array($response);
    // $myJSON = json_encode($playerArr);

    //     echo $myJSON;
        
    // if($response){
    //     // $row = mysqli_fetch_array($response);
    //     // echo $row;
         $playerArr = array();
    //$foo = new StdClass();
        while($row = mysqli_fetch_array($response)){
            $name = $row['fname'] . ' ' . $row['lname'];
            $r = $row['fname'] . ', ' . $row['lname'] . ', ' . $row['gender'];
          //$name = $row['fullname'];
            array_push($playerArr, $r);
//             $foo = array($row);
// $foo .= (object)$foo;
            //echo $row['fname'] . ' ' . $row['lname'];
        }
         $myJSON = json_encode($playerArr);
   // $myJSON = json_encode($foo);
         echo $myJSON;   
    //     //return $playerArr;
    //     //print_r( $playerArr );
    // }
  
    //echo 'testing1';
    //  require_once('mysqli_connect.php');
   
   // $db = \framework\App\Config\Database::connect();
    
    //\Config\Database::connect();
   
    //$this->db->connection_status();
      // $fname = $this->$db->input->post('fname');
      // $lname = $this->$db->input->post('lname');
      // $gender = $this->$db->input->post('gender');
  
      // echo $fname;
  
      // $data = array('fname'=>$fname, 'lname'=>$lname, 'gender'=>$gender);
  
      // if($this->$db->insert('Players', $data)) {
      //     echo 'success';
      // }
  
  
  //}




//}

// require_once('mysqli_connect.php');
// $db = $this->load->database('olympics',TRUE);
//   $connected = $db->initialize();
//   if (!$connected) {
//     $db = $this->database->load('olympics',TRUE);
//   } 

//$this->db->connection_status;
// $query = "SELECT f_name, l_Name FROM Players";
// $response = @mysqli_query($dbc, $query);
// if($response){
//     while($row = mysqli_fetch_array($response)){
//         echo $row['f_name'] . ' ' . $row['l_Name'];
//     }
//}
//$this->db->connection_status;


?>