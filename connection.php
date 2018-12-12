<?php

session_start();

// REGISTRATION VARIABLES INITIALIZED
$firstname = "";
$lastname = "";
$username = "";
$phone = "";
$email = "";
$password = "";

// DATABASE VARIABLES
$DB_HOST = '';
$DB_USER = '';
$DB_PASSWORD = '';
$DB_NAME = '';

$connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// testing connection

if ($connection === false)
{
    die("Error Connecting to Database. Error: " . $connection->connect_errno);
}

else
{
    echo "Successfully Connected to Database.";
}

if (isset($_POST['submit']))
{
    // register user
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // encrypts the password

    if (empty($firstname) or empty($lastname) or empty($username) or empty($phone) or empty($email) or empty($password))
    {
        echo "<br><br>Could not register user! Please fill all the fields.";
    }

    else
    {
        // insert values
        $query = "INSERT INTO users (firstname, lastname, username, phone, email, password)
              VALUES ('$firstname', '$lastname', '$username', '$phone', '$email', '$password')";

        $queryResult = mysqli_query($connection, $query);

        if (mysqli_affected_rows($connection) > 0)
        {
            echo "<br><br>Registration Completed!";
        }

    }
}
?>