<?php
    $user = $_REQUEST["user"];
    $pwd = $_REQUEST["pwd"];
    $hash = hash('sha256', $pwd);

    $valid_hash = "8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92";

    //echo("$user $pwd");
   // if (hash('sha256', $pwd) == $valid_hash) {
    //    echo("<h1>Hello, $user!</h1>");
    //}
    //else {
    //    echo("<h1>Неверный вход!</h1>");
    //}

    $sql = "SELECT * FROM logins
            WHERE UserName='$user'
            and PwdHash='$hash' ";
    $conn = mysqli_connect("localhost", "root", "", "calc");
    $result = mysqli_query($conn, $sql);
    var_dump(mysqli_fetch_array($result));

    mysqli_close($conn);



