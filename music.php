<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shokas</title>
  <link rel="stylesheet" href="music.css">
  <link rel="icon" type="image/x-icon" href="./new.png">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4597855026562899"
    crossorigin="anonymous"></script>

</head>

<body>




  <?php include("auth_session.php");?>
  <div
    style="background-color: white;max-width: 100%;height: 60px; box-shadow: 0px 8px 16px 0px rgba(10, 10, 10, 0.2);display: flex;justify-content:space-between;">
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
    <div
      style="color: green;margin-top: 15px;padding-right: 15px;font-family: sans-serif;font-size: 20px;font-weight: bolder;">
      <a href="profile.php" style="text-decoration: none;color: rgb(81, 19, 19);">
        <?php echo $_SESSION['username']; ?>
      </a></div>
  </div>


  <header>

    <li class="one">
      <a href="./home.php">Logout</a>
    </li>
    <li>
      <a href="./music.php" style="color:white;text-decoration:underline;">Music</a>
    </li>
    <li>
      <a href="./videos.php">Videos</a>
    </li>
    <li>
      <a href="./artist.php">Artist</a>
    </li>


  </header>


  <center>
    <form action="ajax.php" name="search" class="search" id="search" method="get">
      <div class="bar" style="margin:20px;">
        <input style="padding: 10px;border-radius: 7px;outline: none;background:white;" id="search" class="search"
          placeholder="search songs..." name="q" required>
        <input
          style="background: white;color: rgb(81, 19, 19);font-weight:bolder;font-size:20px;font-family: sans-serif;outline: none;padding: 5px;border-radius: 7px;"
          type="submit" value="Go">
      </div>
    </form>

    <div style="  background-color: white;max-width: 100%;height: 70px;margin-bottom: 20px;">
      <marquee direction="right">
        <h1>
          <span class="lob1">S</span>
          <span class="lob2">h</span>
          <span class="lob3">o</span>
          <span class="lob4">k</span>
          <span class="lob5">a</span>
          <span class="lob6">s</span>
        </h1>
      </marquee>
    </div>


    <?php

// Check if the search form has been submitted
if (isset($_GET['q'])) {
  // Get the search query
  $search_query = $_GET['q'];

  // Set the target directory
  $target_dir = "songs/";

  // Get the list of files in the target directory
  $files = scandir($target_dir);

  // Remove . and .. from the list
  $files = array_diff($files, array(".", ".."));

  // Search the list of files for matching results
  $results = array_filter($files, function ($file) use ($search_query) {
    return strpos($file, $search_query) !== false;
  });

  // Check if there are any matching results
  if (count($results) > 0) {
    // Matching results found
    foreach ($results as $result) {
      // Display the matching results
      echo $result . "<br>";
    }
  } else {
    // No matching results found
    echo "No results found.";
  }
}

?>


  </center>


  <h1 style="color: orange; padding: 10px;">Trending</h1>


  <?php

// Set the target directory
$target_dir = "audio/";

// Get the list of audio files in the target directory
$audio_files = array_filter(scandir($target_dir), function ($file) {
  return in_array(pathinfo($file, PATHINFO_EXTENSION), array("mp3", "wav", "m4a"));
});

// Remove . and .. from the list
$audio_files = array_diff($audio_files, array(".", ".."));

// Check if there are any audio files
if (count($audio_files) > 0) {
  // Audio files found
  foreach ($audio_files as $audio_file) {
    // Get the caption and tags for the audio file
    $caption = " ".$audio_file;
 

    // Display the audio player, caption, and tags for each audio file


    echo'<div class="cover">';
    echo'<div class="bob">';
    echo '<img class="tag" src="./music tag.png" download>';
    echo'<div class="bob1">';

    echo '<audio controls>';
    echo '<source src="'.$target_dir.$audio_file.'" type="audio/mpeg">';
    echo 'Your browser does not support the audio element.';
    echo '</audio>';
    echo '<div class="cap"> '.$caption.'</div>';
    echo'</div>';

    echo'<div class="bob2">';
    echo '<a class="load" href="'.$target_dir.$audio_file.'" download>Download</a><br>';
    echo'</div>';
    echo'</div>';
    echo'</div>';

  }
} else {
  // No audio files found
  echo "No audio files found.";
}

?>





























































  <div style="display: flex; flex-direction: column;">
    <h1 style="color: orange; padding: 10px;">(Follow up)</h1>
    <div class="gallery-scroll">

      <figure class="gallery-item">
        <img class="gallery-img" src="./images5 1.png" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>
      <!-- ... 20 Images at all ... -->
      <figure class="gallery-item">
        <img class="gallery-img" src="./images4 1.png" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./images3 1.png" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./images2 1.png" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./images1 1.png" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./images4 1.png" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./images4 1.png" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>
    </div><!-- end gallery-scroll -->














    <h1 style="color: orange; padding: 10px;">Recommended</h1>



    <?php

// Set the target directory
$target_dir = "audio2/";

// Get the list of audio files in the target directory
$audio_files = array_filter(scandir($target_dir), function ($file) {
  return in_array(pathinfo($file, PATHINFO_EXTENSION), array("mp3", "wav", "m4a"));
});

// Remove . and .. from the list
$audio_files = array_diff($audio_files, array(".", ".."));

// Check if there are any audio files
if (count($audio_files) > 0) {
  // Audio files found
  foreach ($audio_files as $audio_file) {
    // Get the caption and tags for the audio file
    $caption = " ".$audio_file;
 

    // Display the audio player, caption, and tags for each audio file


    echo'<div class="cover">';
    echo'<div class="bob">';
    echo '<img class="tag" src="./music tag.png" download>';
    echo'<div class="bob1">';

    echo '<audio controls>';
    echo '<source src="'.$target_dir.$audio_file.'" type="audio/mpeg">';
    echo 'Your browser does not support the audio element.';
    echo '</audio>';
    echo '<div class="cap"> '.$caption.'</div>';
    echo'</div>';

    echo'<div class="bob2">';
    echo '<a class="load" href="'.$target_dir.$audio_file.'" download>Download</a><br>';
    echo'</div>';
    echo'</div>';
    echo'</div>';

  }
} else {
  // No audio files found
  echo "No audio files found.";
}

?>











    <h1 style="color: orange; padding: 10px;">(Follow up)</h1>
    <div class="gallery-scroll">
      <figure class="gallery-item">
        <img class="gallery-img" src="./songs1.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>
      <!-- ... 20 Images at all ... -->
      <figure class="gallery-item">
        <img class="gallery-img" src="./songs2.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./songs3.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./songs4.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./songs5.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>


      <figure class="gallery-item">
        <img class="gallery-img" src="./songs5.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>


      <figure class="gallery-item">
        <img class="gallery-img" src="./songs5.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>
    </div><!-- end gallery-scroll -->
















    <h1 style="color: orange; padding: 10px;">Recommended...</h1>






    <?php

// Set the target directory
$target_dir = "audio3/";

// Get the list of audio files in the target directory
$audio_files = array_filter(scandir($target_dir), function ($file) {
  return in_array(pathinfo($file, PATHINFO_EXTENSION), array("mp3", "wav", "m4a"));
});

// Remove . and .. from the list
$audio_files = array_diff($audio_files, array(".", ".."));

// Check if there are any audio files
if (count($audio_files) > 0) {
  // Audio files found
  foreach ($audio_files as $audio_file) {
    // Get the caption and tags for the audio file
    $caption = " ".$audio_file;
 

    // Display the audio player, caption, and tags for each audio file


    echo'<div class="cover">';
    echo'<div class="bob">';
    echo '<img class="tag" src="./music tag.png" download>';
    echo'<div class="bob1">';

    echo '<audio controls>';
    echo '<source src="'.$target_dir.$audio_file.'" type="audio/mpeg">';
    echo 'Your browser does not support the audio element.';
    echo '</audio>';
    echo '<div class="cap"> '.$caption.'</div>';
    echo'</div>';

    echo'<div class="bob2">';
    echo '<a class="load" href="'.$target_dir.$audio_file.'" download>Download</a><br>';
    echo'</div>';
    echo'</div>';
    echo'</div>';

  }
} else {
  // No audio files found
  echo "No audio files found.";
}

?>






    <h1 style="color: orange; padding: 10px;">(Follow up)</h1>
    <div class="gallery-scroll">
      <figure class="gallery-item">
        <img class="gallery-img" src="./download1.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>
      <!-- ... 20 Images at all ... -->
      <figure class="gallery-item">
        <img class="gallery-img" src="./download2.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./download3.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./download4.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./download5.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./download3.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>


      <figure class="gallery-item">
        <img class="gallery-img" src="./download3.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>
    </div><!-- end gallery-scroll -->







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
     ?>







    <h1 style="color: orange; padding: 10px;">Recommended...</h1>






    <?php

// Set the target directory
$target_dir = "audio4/";

// Get the list of audio files in the target directory
$audio_files = array_filter(scandir($target_dir), function ($file) {
  return in_array(pathinfo($file, PATHINFO_EXTENSION), array("mp3", "wav", "m4a"));
});

// Remove . and .. from the list
$audio_files = array_diff($audio_files, array(".", ".."));

// Check if there are any audio files
if (count($audio_files) > 0) {
  // Audio files found
  foreach ($audio_files as $audio_file) {
    // Get the caption and tags for the audio file
    $caption = " ".$audio_file;
 

    // Display the audio player, caption, and tags for each audio file


    echo'<div class="cover">';
    echo'<div class="bob">';
    echo '<img class="tag" src="./music tag.png" download>';
    echo'<div class="bob1">';

    echo '<audio controls>';
    echo '<source src="'.$target_dir.$audio_file.'" type="audio/mpeg">';
    echo 'Your browser does not support the audio element.';
    echo '</audio>';
    echo '<div class="cap"> '.$caption.'</div>';
    echo'</div>';

    echo'<div class="bob2">';
    echo '<a class="load" href="'.$target_dir.$audio_file.'" download>Download</a><br>';
    echo'</div>';
    echo'</div>';
    echo'</div>';

  }
} else {
  // No audio files found
  echo "No audio files found.";
}

?>





    <h1 style="color: orange; padding: 10px;">(Follow up)</h1>
    <div class="gallery-scroll">
      <figure class="gallery-item">
        <img class="gallery-img" src="./download1.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>
      <!-- ... 20 Images at all ... -->
      <figure class="gallery-item">
        <img class="gallery-img" src="./download2.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./download3.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./download4.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./download5.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./download3.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>


      <figure class="gallery-item">
        <img class="gallery-img" src="./download3.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>
    </div><!-- end gallery-scroll -->











    <h1 style="color: orange; padding: 10px;">Recommended...</h1>








    <?php

// Set the target directory
$target_dir = "audio5/";

// Get the list of audio files in the target directory
$audio_files = array_filter(scandir($target_dir), function ($file) {
  return in_array(pathinfo($file, PATHINFO_EXTENSION), array("mp3", "wav", "m4a"));
});

// Remove . and .. from the list
$audio_files = array_diff($audio_files, array(".", ".."));

// Check if there are any audio files
if (count($audio_files) > 0) {
  // Audio files found
  foreach ($audio_files as $audio_file) {
    // Get the caption and tags for the audio file
    $caption = " ".$audio_file;
 

    // Display the audio player, caption, and tags for each audio file


    echo'<div class="cover">';
    echo'<div class="bob">';
    echo '<img class="tag" src="./music tag.png" download>';
    echo'<div class="bob1">';

    echo '<audio controls>';
    echo '<source src="'.$target_dir.$audio_file.'" type="audio/mpeg">';
    echo 'Your browser does not support the audio element.';
    echo '</audio>';
    echo '<div class="cap"> '.$caption.'</div>';
    echo'</div>';

    echo'<div class="bob2">';
    echo '<a class="load" href="'.$target_dir.$audio_file.'" download>Download</a><br>';
    echo'</div>';
    echo'</div>';
    echo'</div>';

  }
} else {
  // No audio files found
  echo "No audio files found.";
}

?>








    <h1 style="color: orange; padding: 10px;">(Follow up)</h1>
    <div class="gallery-scroll">
      <figure class="gallery-item">
        <img class="gallery-img" src="./songs1.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>
      <!-- ... 20 Images at all ... -->
      <figure class="gallery-item">
        <img class="gallery-img" src="./songs2.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./songs3.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./songs4.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>

      <figure class="gallery-item">
        <img class="gallery-img" src="./songs5.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>


      <figure class="gallery-item">
        <img class="gallery-img" src="./songs5.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>


      <figure class="gallery-item">
        <img class="gallery-img" src="./songs5.jpg" alt="symbol image" title="symbol image">
        <figcaption>Image Title</figcaption>
        <a href="#" class="btn">download</a>
      </figure>


    </div><!-- end gallery-scroll -->
  </div>






  <h1 style="color: orange; padding: 10px;">Explore...</h1>


  <?php

// Set the target directory
$target_dir = "audio6/";

// Get the list of audio files in the target directory
$audio_files = array_filter(scandir($target_dir), function ($file) {
  return in_array(pathinfo($file, PATHINFO_EXTENSION), array("mp3", "wav", "m4a"));
});

// Remove . and .. from the list
$audio_files = array_diff($audio_files, array(".", ".."));

// Check if there are any audio files
if (count($audio_files) > 0) {
  // Audio files found
  foreach ($audio_files as $audio_file) {
    // Get the caption and tags for the audio file
    $caption = " ".$audio_file;
 

    // Display the audio player, caption, and tags for each audio file


    echo'<div class="cover">';
    echo'<div class="bob">';
    echo '<img class="tag" src="./music tag.png" download>';
    echo'<div class="bob1">';

    echo '<audio controls>';
    echo '<source src="'.$target_dir.$audio_file.'" type="audio/mpeg">';
    echo 'Your browser does not support the audio element.';
    echo '</audio>';
    echo '<div class="cap"> '.$caption.'</div>';
    echo'</div>';

    echo'<div class="bob2">';
    echo '<a class="load" href="'.$target_dir.$audio_file.'" download>Download</a><br>';
    echo'</div>';
    echo'</div>';
    echo'</div>';

  }
} else {
  // No audio files found
  echo "No audio files found.";
}

?>





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
        <li class="text">
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
        <li class="text">
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