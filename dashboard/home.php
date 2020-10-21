    <!DOCTYPE HTML>
    <html>
    <head>
    <style>
    * {box-sizing:border-box}
    body {font-family: Verdana,sans-serif;}
    .mySlides {display:none}
    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }
    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    /* The dots/bullets/indicators */
    .dot {
      height: 13px;
      width: 13px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    .active {
      background-color: #717171;
    }
    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }
    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    </style>
    <meta charset="UTF-8">
      <title>Home </title>
    </head>
    <body>
    <table border="0" align="center" width="100%" cellspacing="0" cellpadding="10">
    <tr height="120px" background="image/1.jpg">
    <td colspan="3" align="center"> <h1>Welcome To RRF</h1></td>
    </tr>
    <tr height="50px" bgcolor="yellow">
    <td colspan="3"> 
    <a href="index.html">Home</a>    |
    <a href="Gallery.html">Gallery</a>   |
    <a href="contactus.html">Contract us</a>   |
    <a href="aboutus.html">About US</a>   
    </tr>
    <tr height="400px">
    <td bgcolor="green" width="20%" valign="top"  align="center"> 
    <h3 align="center"><font color="#fff">Loging Hear</font> </h3>
    <p>ID             :<input type="text"/></p>
    <p>
    Password :<input type="password"/></p>
    <img src="image/PFU-B3-013.jpg" width="200px" height="250" align="center"/>
    </td>
    <td width="60%" valign="top">
    <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="image/img_nature_wide.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="image/img_fjords_wide.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="image/img_mountains_wide.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    <script>
    var slideIndex = 0;
    showSlides();
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
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
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
     
    <p align="justify">
    I can take your creative web design and convert it into a HTML website.
    Full HTML5 & CSS3
    Cross-Browser Compatible! (Firefox,IE9+, Chrome, Safari, Opera)
    Optimized Code
    Responsive Design (optional via Bootstrap)
    Check out front end develop work links below 
    i will create fully professional website
    Responsive Design
    10 Pages
    Include Source Code
    Design Customization
    Content Upload
    BASIC Package
    Here i am offering a Unit, feel free to connect me, for more details.. thanks
    Responsive Design
    1 Page
    Include Source Code
    Design Customization
    Content Upload
    I Will Fix Your Html, Css, WordPress, Asp, Php Bugs
    Facing difficulty in programming? Unable to catch the bugs? Leave it to me! I will fix your html, css, wordpress, asp, php bugs and show you what the problem was.
    P.S. The delivery time depends on how complicated the problem is, does not necessary a few days. If it's just a minor change, it might be completed within an hour or a few hours when I am online. The time is negotiable too. So, always remember to message me first before placing the order ya. Thank you :)
    </p>
    </td>
    <td bgcolor="blue"  align="center"> 
    <h3 align="center"><font color="#fff">Loging Hear</font> </h3>
    <p>ID             :<input type="text"/></p>
    <p>
    Password :<input type="password"/></p>
    <img src="image/PFU-B3-013.jpg" width="200px" height="250" align="center"/>
    </td>
    </tr>
    <tr height="80px">
    <td colspan="3" bgcolor="gray" align="center"> 
    All Right Reserved &copy; RRF
    </td>
    </tr>
    </table>
      
    </body>
    </html>