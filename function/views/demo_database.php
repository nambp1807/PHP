<?php
 //sever info
        $severName = "localhost";
        $severUser = "root";
        $severPassword = "";
        $database = "php_sever";
// connect databasse
        $conn = new mysqli($severName,$severUser,$severPassword,$database);
// check connection
    if ($conn->connect_error){
        die("Connection fail");
    }

//demo with prepare statement
//$sql_insert = "INSERT INTO users (username,email,password,age,address,telephone) VALUES(?,?,?,?,?,?); ";
//    $stmt = $conn ->prepare($sql_insert);
//    $stmt ->bind_param("ssssisss",$u,$e,$p,$a,$ad,$t);

    //
//
//
//



//    echo "Connect successfully";
// Query sql
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
  //  var_dump($result);
    $users = [];
    if ($result->num_rows >0){
        while ($row = $result->fetch_assoc()){
          //  echo $row["id"].$row["username"].$row["email"].$row["telephone"];
            $users [] = $row;
        }
    }else {
        echo "No result found";
    }
    ?>

    <?php foreach ($users as $u) : ?>
    <p><?php echo $u["id"]."-".$u["username"]."-".$u["email"]; ?></p>
    <?php endforeach;?>


