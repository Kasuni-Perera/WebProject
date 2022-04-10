<?php
    if(isset($_POST["username"]) && isset( $_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $conn = mysqli_connect("localhost","root","","project");

        // Check connection
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
          exit();
        }
        else{
            $sql = "SELECT `password` FROM `users` where username = '{$username}'";
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                echo "id: " . $row["password"]. " " .$username ;
                if($password == $row["password"]){
                  header("Location: shoppage.html");
                  exit();
                }
              } else {
                echo "0 results";
              }
        }
    }
    ?>