
<?php 
//echo'<h3>DID THIS WORK?<h3>';
 //class players extends CI_PUBLIC{
//   public function __construct()
//   {
//           parent::__construct();
//           // Your own constructor code
//           $dbInfo = '
// {
//   "driver": "MySQL",
//   "host": "localhost",
//   "database_name": "olympics",
//   "user": "olympicdb",
//   "password": "Fin09ley"
// }';
  //$db = db_connect($default);
//$db = Database::connect($default);
//$db=\Config\Database::connect($default);

  //$this->db->connection_status();
  ////}
  //echo 'testing2';
  //$db = mysqli_connect("localhost","olympicdb","Fin09ley","olympics");
  // $db = require_once('mysqli_connect.php');
  // $db = db_connect();

  //require_once('mysqli_connect.php');
  //function addPlayer() {
    //echo 'test123';
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
//echo $fname;
    require_once('mysqli_connect.php');
    //$query = "SELECT fname, lname FROM Players";
  //  $query = "INSERT $fname, $lname , $gender INTO Players";
    $sql = "INSERT INTO Players (fname, lname, gender) VALUES ('$fname', '$lname', '$gender')";
   // $q = @mysqli_query($db, $sql);
    if (mysqli_query($db, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
    
    // $response = @mysqli_query($db, $query);
    // if($response){
    //     while($row = mysqli_fetch_array($response)){
    //         echo $row['fname'] . ' ' . $row['lname'];
    //     }
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