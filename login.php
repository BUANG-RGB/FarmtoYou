<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
<title>BeeSafe</title>
</head>
<body>
<form>
    <h1>Login</h1>
    <div class="textBox">
        <input type="text" placeholder="username" name="username">
    </div>
    <div class="textBox2">
        <input type="text" placeholder="password" name="password">
    </div class="textbox3">
    <input type="submit" value=" Login" class="loginbutton" name="login_button">
    <div class="Sign-up">
       <p> IF you dont have an account yet<br>
        please Sign-up to ensure your safety</p>
        <a href="farmExpress.html">Sign-uP</a>
    </div>
</form>

</body>

</html>
<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login_button'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM `details` WHERE username = \'$username\';";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if ($password == $resultPassword)
        header('location:index.html');
    } else{
        echo "<script>
        alert('login unsuccessful');
        <script>";
    }

    }

?>