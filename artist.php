<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shokas</title>
    <link rel="stylesheet" href="artist.css">
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
                <a href="./videos.php" >Videos</a>
            </li>
            <li>
                <a href="./artist.php" style="color:white;text-decoration:underline;">Artist</a>
            </li>


    </header>


<center>
<form action="ajax.php" name="search" class="search" id="search"  method="get">
        <div class="bar" style="margin:20px;">
          <input style="padding: 10px;border-radius: 7px;outline: none;background:white;" id="search"  class="search" placeholder="search artist..." name="q"required >
          <input style="background: white;color: rgb(81, 19, 19);font-weight:bolder;font-size:20px;font-family: sans-serif;outline: none;padding: 5px;border-radius: 7px;" type="submit" value="Go" >
           </div>
       </form>
    </center> 





<div style="display: flex; flex-direction: column;">
    
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



<footer class="footer"> 
         <h2 class="foot2">
            <img  class="img" src="./headphones.png" alt="">
            <span class="black">S</span>
            <span class="orange">h</span>
            <span class="black">o</span>
            <span class="orange">k</span> 
            <span class="black">a</span> 
            <span class="orange">s</span> 
        </h2>
       
        <div style="border-bottom: solid black;border-width: 1px;border-top: solid black;border-width: 1px;">
        <h6>About</h6>
        <ul >
            <li>Contact</li>
            <li>Services</li>
            <li>Mobile app</li>
            <li>Site</li>
        </ul>
       </div>

        <div style="border-bottom: solid black;border-width: 1px;">
                <h6>Browse</h6>
                <ul class="b">
                    <li>Home</li>
                    <li>Music</li>
                    <li>Videos</li>
                    <li>Artist</li>
                 </ul>   
        </div> 
        
</footer>
<div class="icon">
    <a href="../My website/inatagram icon.jpg"></a>
</div>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4597855026562899"
     crossorigin="anonymous"></script>
    
</body>
</html>
