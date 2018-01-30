<?php

error_reporting(1);

function email_exists($email) {
    global $conn;
    $query = $conn->query("SELECT user_id FROM users WHERE email= '$email' ");
    $check = $query->num_rows;
    return ($check == 1) ? true : false;
}

function user_exists($username) {
    global $conn;
    $query = $conn->query("SELECT username FROM users WHERE username= '$username' ");
    $check = $query->num_rows;
    return ($check == 1) ? true : false;
}

function get_id_of_user($username) {
    global $conn;
    $query = $conn->query("SELECT user_id FROM users WHERE username= '$username' ");
    $row = mysqli_fetch_assoc($query);
    $check = $query->num_rows;
    return ($check >= 1) ? $row['user_id'] : 0;
}

function get_user_details($userId) {
    global $conn;
    $query = $conn->query("SELECT * FROM users WHERE user_id= '$userId' ");
    $row = mysqli_fetch_assoc($query);
    $check = $query->num_rows;
    return ($check >= 1) ? $row : 0;
}

function get_sponser_name($sponserId) {
    global $conn;
    $query = $conn->query("SELECT username FROM users WHERE user_id= '$sponserId' ");
    $row = mysqli_fetch_assoc($query);
    $check = $query->num_rows;
    return ($check >= 1) ? $row['username'] : 0;
}

function checkPassword($userId, $user_pass) {
    global $conn;
    $query = $conn->query("SELECT user_id FROM users WHERE user_id= '$userId' AND password= '" . md5($user_pass) . "'");
    $row = mysqli_fetch_assoc($query);
    $check = $query->num_rows;
    return ($check > 0) ? (int) $row['user_id'] : 0;
}

function updatePassword($userId, $user_pass) {
    global $conn;
    $sql = "UPDATE users SET password='" . md5($user_pass) . "' WHERE user_id='" . $userId . "'";
    if ($conn->query($sql) === TRUE) {
        return 1;
    } else {
        return 0;
    }
}


function mobile_exists($mobile){
    global $conn;
    $query = $conn->query("SELECT mobile_no FROM users WHERE mobile_no= '$mobile' ");
    $check = $query->num_rows;
    return ($check == 1) ? true : false;
}


function get_user_cscity($userId) {
    global $conn;
    $query = $conn->query("SELECT * FROM  users JOIN countries on users.country_id =countries.country_id 
                        JOIN states on users.state_id =states.state_id
                        JOIN cities on users.city_id = cities.city_id
                        WHERE users.user_id='$userId' ");
    $row = mysqli_fetch_assoc($query);
    $check = $query->num_rows;
    return ($check >= 1) ? $row : 0;
}


