<?php

    $link = mysqli_connect("shareddb1e.hosting.stackcp.net", "tastyusers-363764d9", "cwzfci6hir", "tastyusers-363764d9");

    if (mysqli_connect_error()){
        die ("Connection to database unsuccessful.");
    }

    //$query = "INSERT INTO `users` (`email`, `password`) VALUES ('bug@gmail.com', '1111')";
    

    //$query = "UPDATE `users` SET email = 'bugbug@gmail.com' WHERE id = 3 LIMIT 1";

    $query = "UPDATE `users` SET password = 'betterpass1234W' WHERE email = 'deni.azap11@gmail.com' LIMIT 1";
    mysqli_query($link, $query);

    $query = "SELECT * FROM users";

    if ($result = mysqli_query($link, $query)){
        $row = mysqli_fetch_array($result);
        echo "Your email is ".$row['email']." and your password is ".$row['password'];
    }

?>