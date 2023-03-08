<?php
// Connecting to the database
$dsn = "mysql:host=localhost;dbname=awc";
$username = "root";
$password = "";

// Try to connect to the databasae
try {
    $db = new PDO($dsn, $username, $password);
} 
// If it fails, direct to the error page

// TO FIX, ADD ERROR PAGE
catch (PDOException $e){
    die();  
}



function createSection($sectionTitle, $sectionBody, $type) {
    echo("
            <h3 class='secHead'> $sectionTitle </h3>
            <hr class='secHeadBreak'>
            <p class='$type'> $sectionBody </p>
        ");
}

function attemptLogIn($username, $password) {

    $status = 'Failed';

    $users = getUsers();

    foreach($users as $user) {
        if ($username == $user[4]) {
            if ($password == $user[5]) {
                $status = $user;
            }
        }
    }

    return $status;
}

function getProducts() {
    $myQuery = "Select * from products ORDER BY product_Type DESC";
    global $db;
    $qry = $db->query($myQuery);       
    $products = $qry->fetchAll();
    return $products;
}

function getProductsById($id) {
    $myQuery = "Select * from products ORDER BY product_Type DESC";
    global $db;
    $qry = $db->query($myQuery);       
    $products = $qry->fetchAll();

    foreach ($products as $product) {
        if ($product[0] == $id) {
            return $product;
        }
    }
}

function getWeeklySpotlight() {
    $myQuery = "Select * from products ORDER BY product_Type DESC";
    global $db;
    $qry = $db->query($myQuery);       
    $products = $qry->fetchAll();

    foreach ($products as $product) {
        if ($product[7] == 1){
            return $product;
        }
    }

    return $products;
}


function getUsers() {
    $myQuery = "Select * from users";
    global $db;
    $qry = $db->query($myQuery);       
    $users = $qry->fetchAll();
    return $users;
}

function getUsersName($userID) {
    $users = getUsers();

    foreach($users as $user) {
        if ($userID == $user[0]) {
            return $user;
        }
    }
}

function getUsersID($username) {
    $users = getUsers();

    foreach($users as $user) {
        if ($username == $user[4]) {
            return $user;
        }
    }
}

function getContacts() {
    $myQuery = "Select * from contact";
    global $db;
    $qry = $db->query($myQuery);       
    $contacts = $qry->fetchAll();
    return $contacts;
}

function checkValidUsername($username) {
    $users = getUsers();

    foreach($users as $user) {
        if ($username == $user[4]) {
            return 'Failed-U';
        }
        else {
            return 'Passed';
        }
    }
}

function checkValidEmail($email) {
    $users = getUsers();

    foreach($users as $user) {
        if ($email == $user[2]) {
            return 'Failed-E';
        }
        else {
            return 'Passed';
        }
    }
}


function attemptSignUp($username, $password, $email) {
    $step2 = checkValidUsername($username);
    $step3 = checkValidEmail($password);

   
        if ($step2 == 'Passed') {
            if ($step3 == 'Passed') {
                return 'Passed';
            }
            else {
                return 'Failed-E';
            }
        }
        else {
            return 'Failed-U';
        }
}

function createUser($name, $username, $password, $email) {
    $username = filter_var(str_replace("'", "\'", $username));
    $password = filter_var(str_replace("'", "\'", $password));
    $email = filter_var(str_replace("'", "\'", $email));

    $sql = "INSERT INTO `users` (`user_ID`, `user_Name`, `user_Email`, `user_EmailAllowed`, `user_Username`, `user_Password`) VALUES (NULL, '$name', '$email', '0', '$username', '$password');";
    global $db;
    $qry = $db-> query($sql);

    return getUsersID($username);
}