<?php include("connection.php") ?>

<!DOCTYPE html>
<html style="overflow: hidden;">

<head>
    <title>Registration Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="icon" href="img/88450.png" type="image/x-icon" />
</head>

<body>
<div class="header">
    <b>Registration Form</b>
</div>
</body>

<form method="post" action="register.php">
<div class="container">
    <div class="row">
        <div class="input-container">
            <input type="text" name="firstname" placeholder="First Name" value="<?php echo $firstname;?>"/>
            <i class="fa fa-user"> </i>
        </div>
        <div class="input-container">
            <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>"/>
            <i class="fa fa-user"> </i>
        </div>
    </div>
    <div class="row">
        <div class="input-container">
            <input type="text" name="username" placeholder="User Name" value="<?php echo $username;?>"/>
            <i class="fa fa-user"> </i>
        </div>
        <div class="input-container">
            <input type="text" name="phone" placeholder="Phone Number" value="<?php echo $phone;?>"/>
            <i class="fa fa-phone"> </i>
        </div>
    </div>
    <div class="row">
        <div class="input-container">
            <input type="text" name="email" placeholder="E-mail Address" value="<?php echo $email;?>"/>
            <i class="fa fa-envelope"> </i>
        </div>
    </div>
    <div class="row">
        <div class="input-container">
            <input type="password" name="password" placeholder="Password" value="<?php echo $password;?>"/>
            <i class="fa fa-expeditedssl" aria-hidden="true"></i>
        </div>
    </div>
    <div class="row">
        <div class="input-button">
            <button type="submit" name="submit"> Register Here! </button>
            <i class="fa fa-expeditedssl" aria-hidden="true"></i>
        </div>
    </div>
</div>
</form>
</html>