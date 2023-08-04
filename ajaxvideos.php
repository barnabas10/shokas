

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shokas</title>
    <link rel="stylesheet" href="video.css">
    <link rel="icon" type="image/x-icon" href="./new.png">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4597855026562899"
     crossorigin="anonymous"></script>

     <style>
table{
    border: 5px  solid;
      border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 13px; /* Increase font-size */
    margin-top: 50px;
    background-color: black;
    color: orange;
}
td{
    text-align: left; /* Left-align text */
    padding: 20px; /* Add padding */
    border-left: solid 2px white;
    padding-top:30px
}
tr{
   
    border-bottom: 1px solid #ddd;
    height: 70px;
}
 Table tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: rgb(254, 243, 229);
  }
</style>

</head>
<body>

    <!-- <div style="  background-color: rgb(254, 243, 229);max-width: 100%;height: 50px;margin-bottom: 20px;box-shadow: 0px 8px 16px 0px rgba(10, 10, 10, 0.2)">
   
    </div> -->
  
    <?php include("auth_session.php");?>
  <div style="background-color: white;max-width: 100%;height: 60px; box-shadow: 0px 8px 16px 0px rgba(10, 10, 10, 0.2);display: flex;justify-content:space-between;">
   <div>
   
   </div>
   
    <div class="log1">
      <img class="img1" src="./headphones.png" alt="">
      <h3>
       <span class="lob1">S</span>
       <span class="lob2">h</span>
       <span class="lob3">o</span>
       <span class="lob4">k</span> 
       <span class="lob5">a</span> 
       <span class="lob6">s</span> 
      </h3>
   </div>
   <div style="color: green;margin-top: 15px;padding-right: 15px;font-family: sans-serif;font-size: 20px;font-weight: bolder;"><a href="profilesaved.php" style="text-decoration: none;color: rgb(81, 19, 19);" ><?php echo $_SESSION['username']; ?></a></div>
  </div>


    <header>

            <li class="one">
                <a href="./home.php">Logout</a>
            </li>
            <li>
                <a href="./music.php">Music</a>
            </li>
            <li>
                <a href="./videos.php">Videos</a>
            </li>
            <li>
                <a href="./artist.php">Artist</a>
            </li>


    </header>


<center>
<form action="ajax.php" name="search" class="search" id="search"  method="get">
        <div class="bar" style="margin:20px;">
          <input style="padding: 10px;border-radius: 7px;outline: none;background:white;" id="search"  class="search" placeholder="search songs..." name="q"required >
          <input style="background: white;color: rgb(81, 19, 19);font-weight:bolder;font-size:20px;font-family: sans-serif;outline: none;padding: 5px;border-radius: 7px;" type="submit" value="Go" >
           </div>
       </form>
             
    </center> 







    
<div style="display: flex; flex-direction: column;">
    
    <div class="gallery-scroll">
    
    
    <!-- section1 -->
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    
    <!-- section2 -->
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video2 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video2 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    <!-- section3 -->
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video3 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video3 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    
    
    <!-- section4 -->
    
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video3 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video3 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    
    
    
    
    
    <!-- section5 -->
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video3 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video3 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    </div><!-- end gallery-scroll -->
    
    
    
    
    
    
    <!-- display2 -->
    
    
    
    <div class="gallery-scroll">
    
    
    <!-- section1 -->
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    
    <!-- section2 -->
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video2 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video2 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    <!-- section3 -->
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video3 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video3 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    
    
    <!-- section4 -->
    
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video3 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video3 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    
    
    
    
    
    <!-- section5 -->
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video3 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video3 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    </div><!-- end gallery-scroll -->
    
    
    
    
    
    
    
    <!-- display3 -->
    
    
    
    <div class="gallery-scroll">
    
    
    <!-- section1 -->
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    
    <!-- section2 -->
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video2 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video2 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    <!-- section3 -->
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video3 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video3 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    
    
    <!-- section4 -->
    
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video3 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video3 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    
    
    
    
    
    
    
    
    <!-- section5 -->
    
    
    
    <div style="margin-right:50px ;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shokas";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
    <?php
    
    $query = " select * from video3 ";
    $result = mysqli_query($conn, $query);
    
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    
        <!-- <button class="buy">download</button></a> -->
    
    
    
    
    
    <figure class="gallery-item">
    <a href="" class="bt">
        <video class="video" controls >
          <source src="./index/<?php echo $data['filename']; ?>" type="video">
      </video>
    </a>
    
    
    
      <?php
    $sql = "SELECT id, filename, textname,textprice FROM video3 ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // <!-- echo "<table><tr><th>Product Name</th><th>Product Price</th></tr>"; -->
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            ?>
            <figcaption><?php  echo "<tr><td> " . $row["textname"]. "</td></tr>";?></figcaption>
            <a href="#" class="btn" download="./index/<?php echo $data['filename']; ?>" >download</a>
          </figure>
          <?php
        }
    
        echo "</table>";                                           
    } else {
        echo "0 results";
    }
    
    
        
    }
    
    
    
    $conn->close();
    ?>
    </div>
    
    
    </div><!-- end gallery-scroll -->
        
        
          
    </div>
  
</body>
</html>