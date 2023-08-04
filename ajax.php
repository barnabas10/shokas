<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shokas</title>
  <link rel="stylesheet" href="music11.css">
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




    <?php

// Check if the search form has been submitted
if (isset($_GET['q'])) {
  // Get the search query
  $search_query = $_GET['q'];

  // Set the target directory
  $target_dir = "songs/";

  // Get the list of audio files in the target directory
  $audio_files = array_filter(scandir($target_dir), function ($file) {
    return in_array(pathinfo($file, PATHINFO_EXTENSION), array("mp3", "wav", "m4a"));
  });

  // Remove . and .. from the list
  $audio_files = array_diff($audio_files, array(".", ".."));

  // Search the list of audio files for matching results
  $results = array_filter($audio_files, function ($file) use ($search_query) {
    return strpos($file, $search_query) !== false;
  });

  // Check if there are any matching results
  if (count($results) > 0) {
    // Matching results found
    foreach ($results as $result) {
      // Display the audio player, caption, and download button for each audio file
      echo'<div class="cover">';
      echo'<div class="bob">';
      echo '<img class="tag" src="./music tag.png" download>';

      echo'<div class="bob1">';
      echo '<audio controls>';
      echo '<source src="'.$target_dir.$result.'" type="audio/mpeg">';
      echo 'Your browser does not support the audio element.';
      echo '</audio>';
      echo '<div class="cap"> '.$result.'</div>';
      echo'</div>';

      echo'<div class="bob2">';
      echo '<a class="load" href="'.$target_dir.$result.'" download>Download</a><br>';
      echo'</div>';
      echo'</div>';
      echo'</div>';
    }
  } else {
    // No matching results found
    echo "No results found.";
  }
}

?>





  </center>











  <footer class="footer">
 <div class="inside">



  <div class="log1">
    <img class="img1" src="./headphones.png" alt="">

  </div>

      <center>
        <form action="" method="post" id="loginForm" enctype="multipart/form-data">

          <h1 style="color: rgb(251, 237, 159)" class="tag2">Message Us Manually</h1>
          <!-- <label> Full Name :</label> -->
          <input type="text" name="fname" required placeholder="Enter firstname" /><br><br>
          <!-- <label> Email:</label> -->
          <input type="text" name="lname" required placeholder="Enter lastname" /><br><br>
          <!-- <label>Phone:</label> -->
          <input type="text" name="number" required placeholder="type mobile number" /><br><br>
          <!-- <label>Country :</label> -->
          <select name="country" class="country" required>
            <option value=""> Select country </option>
            <option value="Nigeria"> Nigeria</option>
            <option value="USA"> USA</option>
            <option value="Other"> Other</option>
          </select>
          <br><br>
          <!-- <label style="color:rgb(5, 5, 5);"  > Message :</label> -->
          <input type="text" name="message" required placeholder="type message..." /><br><br>
          <button name="submit" id="btn" type="submit" onclick="newDoc()" class="btn">SUBMIT</button>
          <br />
          <br>
        </form>
      </center>

    </div>

<center>
    <?php
    if(isset($_POST["submit"])){



    include 'dbconn.php';
    
    $sql = "INSERT INTO message (fname,lname,number,country,message)
    VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["number"]."','".$_POST["country"]."','".$_POST["message"]."')";
    
    if ($conn->query($sql) === TRUE) {
    
    
    echo "
        <script type= 'text/javascript'>
            alert('Message sent successfully');
        </script>";
       
    } 
    else 
    {
        echo 
        "<script type= 'text/javascript'>
            alert('Error: " . $sql . "<br>" . $conn->error."');
        </script>";
    }
    
    
    
    
    
    
    
    
    $conn->close();
    
 
    
    }
    
    if (empty($_POST["input"])) {  
      echo "<msg2>";
      $errMsg = " ";  
               echo $errMsg; 
      echo "</msg2>"; 
    } else {  
      $data = $_POST["input"];  
    
    
    
    
      if (preg_match ("/^[a-zA-z]*$/", $data) ){
          echo "<msg1>";
        $Msg = "Message sent";
        echo $Msg;
        echo "</msg1>";
       
         
      }
          
      
      
      if (!preg_match ("/^[a-zA-z]*$/", $data) ){
          
      
      
         
          $ErrMsg = "Text is not valid.Text should contain alphabets only.";  
          echo "<msg>";
           echo $ErrMsg;  
           echo "</msg>";
                      
      } 
    } 
    ?>

</center>
</div>
  </footer>


</body>

</html>