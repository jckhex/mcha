<?php session_start();
include('../conn.php');
include('../function.php');
$userId =$_SESSION['user_id'];
$userDetails=get_user_details($userId);
$stateDbId=$userDetails['state_id'];
$cityDbId =$userDetails['city_id'];
global $conn;
if(!empty($_POST["country_id"])){
    $query = $conn->query("SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC");
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
             $state_id =$row['state_id'];
             $value=$row['state_name'];
           // echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
            
            echo "<option value=\"$state_id\"", ($state_id == $stateDbId) ? ' selected' : '';
            echo ">$value</option>";
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}elseif(!empty($_POST["state_id"])){
    $query = $conn->query("SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC");
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
             $city_id =$row['city_id'];
             $valuecity=$row['city_name'];
            //echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
            echo "<option value=\"$city_id\"", ($city_id == $cityDbId) ? ' selected' : '';
            echo ">$valuecity</option>";
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>
