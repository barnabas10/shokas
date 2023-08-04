<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shokas</title>
    <link rel="stylesheet" href="video1.css">
    <link rel="icon" type="image/x-icon" href="./new.png">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4597855026562899"
     crossorigin="anonymous"></script>
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
                <a href="./videos.php" style="color:white;text-decoration:underline;">Videos</a>
            </li>
            <li>
                <a href="./artist.php">Artist</a>
            </li>


    </header>


<center>
<form action="ajax.php" name="search" class="search" id="search"  method="get">
        <div class="bar" style="margin:20px;">
          <input style="padding: 10px;border-radius: 7px;outline: none;background:white;" id="search"  class="search" placeholder="search videos..." name="q"required >
          <input style="background: white;color: rgb(81, 19, 19);font-weight:bolder;font-size:20px;font-family: sans-serif;outline: none;padding: 5px;border-radius: 7px;" type="submit" value="Go" >
           </div>
       </form>
    </center> 

   <!-- <center>
    <div class="dasboard"> <p><img class="img2" src="./Untitled.png" alt=""></p></div>
   </center> -->



   <center>
    <div style=" max-width: 100%;margin-top: 50px;" >
              
 
        
        <div class="slideshow-container">
        
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="./Untitled.png" style="width:100%;height: 200px;">
          <!-- <div class="text">Caption Text</div> -->
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="./tags/music tag.png" style="width:100%;height: 200px;">
          <!-- <div class="text">Caption Two</div> -->
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="./logobold.png" style="width:100%;height: 200px;">
          <!-- <div class="text">Caption Three</div> -->
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
        // if(document.getElementById("search").value.leangth == 0){
        //   alert("empty")
        // }

        </script>
            </div>
    </div>
</center>





































<div style="display: flex; flex-direction: column;">
    


<!-- display1 -->

<h1 style="color: orange; padding: 10px;">Top videos</h1>

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


<h1 style="color: orange; padding: 10px;">Trending Videos</h1>
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

<h1 style="color: orange; padding: 10px;">Explore Videos</h1>

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



<footer class="footer">




<h2 class="foot2">
<marquee behavior="" direction="right">
<img class="img" src="./headphones.png" alt="">
<span class="black">S</span>
<span class="orange">h</span>
<span class="black">o</span>
<span class="orange">k</span>
<span class="black">a</span>
<span class="orange">s</span>

</marquee>
</h2>

<div
  style="border-bottom: solid rgb(255, 255, 255);border-width: 1px;border-top: solid rgb(255, 255, 255);border-width: 1px;">


  <div class="icons">
    <a class="ic" href="http://"><img style="width: 50px;" src="./tags/icons8-facebook-96.png" alt=""></a>
    <a class="ic" href="http://"><img src="./tags/inatagram icon.jpg" alt="" style="border-radius:100px ;"></a>
    <a class="ic" href="http://"><img src="./tags/whats 2.png" alt=""></a>


  </div>

  <h6 style="margin-left: 50px;color: white;">Why Us?</h6>
  <ul>
    <li class="text1">
      Wide selection of music: Shokas offers a wide selection of music, including popular hits and lesser-known
      tracks, to cater to different tastes and preferences.
      High-quality audio: Shokas ensures that all audio tracks are of high quality, so users can enjoy a clear and
      immersive listening experience.
      User-friendly interface: Shokas has a user-friendly interface that allows users to easily browse, search, and
      play music without any hassle.
      Personalized recommendations: Shokas uses advanced algorithms to recommend music to users based on their
      listening history and preferences, helping users discover new music that they may enjoy.

    </li>

  </ul>
</div>

<div style="border-bottom: solid rgb(255, 255, 255);border-width: 1px;">
  <h6 style="margin-left: 50px;color: white; ">Mobile App...</h6>
  <ul>
    <li class="text1">
      Developing a mobile app for the Shokas website can be a valuable opportunity to expand the reach and
      capabilities of the website. A well-designed mobile app can offer a more seamless and intuitive user
      experience, as well as additional functionality such as offline access and push notifications. It can also
      provide new opportunities for revenue generation, such as through in-app purchases or subscriptions.

      However, developing a mobile app also requires significant time and resources, including design, development,
      testing, and maintenance. It is important to carefully evaluate the potential benefits and costs of a mobile
      app and ensure that it aligns with the overall goals and strategy of the Shokas website.

      The development process for a mobile app typically involves several steps, such as defining the goals and
      target audience, designing the user interface, integrating music streaming capabilities, adding additional
      features, and testing and debugging the app. Once the mobile app is ready, it can be launched on app stores
      and promoted to attract users. Ongoing updates and maintenance will be necessary to ensure that the app
      continues to function well and meet the needs of the users.
    </li>

  </ul>
</div>



</footer>


</body>
</html>
