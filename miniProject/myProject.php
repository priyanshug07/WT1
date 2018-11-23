<!DOCTYPE html>
<html>
<head>
    
	<title >PES UNIVERSITY</title>
    <link rel="icon" href="logo.ico"/>            
    <link rel="stylesheet" href="slider.css">
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="animate.min.css">
    <link rel='stylesheet' href='style.css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

	<body>
        
        <div class='logo'>
            
         <img id='logo' alt="PES University-Education for real world" src="pes_logo.png">
        
        </div>
           
        <div id='mainWrap'>
            
        <div id="navbar">
  
        <ul id='menu'>
            
            <li><a href="myProject.html">Home</a></li>
            <li><a href="">About</a>
            <ul class="hidden">
                <li><a href="about1.html">About PES </a></li>
<!--                <li><a href="#">Infrastructure</a></li>-->
                <li><a href="founders.html" target="_blank">About Founder</a></li>
            </ul>
            </li>
            <li><a href="#">Campus Tour</a>
                <ul class="hidden">
                    <li><a href="videoPlayer.html" target="_blank">PES Tour</a></li>
                </ul>
            </li>
<!--
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
-->
<li>
  <?php 
  session_start();
    if($_SESSION['logged']==true){ 
        
        echo '<a><span>Hello,'.$_SESSION['username'].'</span></a></li>';
        echo '<li><a href="logout.php"><span>Logout</span></a></li>';
        }
    elseif($_SESSION['logged']==false){
        echo '<a href="login.html"><span>Login</span></a></li>';
        echo '<li><a href="signUP.html"><span>Sign-Up</span></a></li>';
    }
    ?>
<!--            <li><a href="research.html" target="_blank">Research</a></li>-->
        </ul>
        </div>
        </div>
        
<div class="sliderWrap">
    <div class="slider">
        <div id="prev" class='prev prevSection navigate'>

            <span>&#8249;</span>

        </div>
        <div id='slidesContainer' class='slidesWrap'>
            <div class="slide active">
                <img src="2.jpg" alt="First Image" title='1'>
            </div>
            <div class="slide">
                <img src="3.jpg" alt="Second Image" title='2'>
            </div>
            <div class="slide">
                <img src="4.jpeg" alt="Third Image" title='3'>
            </div>
            
            
            <div class="slide">
                <img src="7.jpg" alt="Sixth Image" title='6'>
            </div>
            <div class="slide">
                <img src="8.jpg" alt="Seventh Image" title='7'>
            </div>
            <div class="slide">
                <img src="9.jpg" alt="Eighth Image" title='8'>
            </div>
            <div class="slide">
                <img src="10.jpg" alt="Ninth Image" title='9'>
            </div>
            <div class="slide">
                <img src="11.jpg" alt="Tenth Image" title='10'>
            </div>
            
            <div class="slide">
                <img src="22.jpg" alt="Tenth Image" title='10'>
            </div>
            <div class="slide">
                <img src="23.jpg" alt="Tenth Image" title='10'>
            </div>
            <div class="slide">
                <img src="24.jpg" alt="Tenth Image" title='10'>
            </div>
            <div class="slide">
                <img src="25.jpg" alt="Tenth Image" title='10'>
            </div>
            
        </div>
        <div id="next" class='next nextSection navigate'>
            <span>&#8250;</span>
            
        </div>
    </div>
</div>
      
         <script src='helperfunctions.js'></script>
         <script src='slider.js'></script>      
	</body>

</html>
