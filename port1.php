<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style3.css">

</head>
<body>
    
    <header>

        <div class="user">
            <img src="img/4864914.webp" alt="">
            <h3 class="name">--- Portfolio ---</h3>
            <p class="post"><span>PREM VISHWANATH PATIL</span></p>
        </div>
        
        <nav class="navbar">
            <ul>
                    <li><a href="#home">home</a></li>
                <li><a href="port2.php">about</a></li>
                <li><a href="port3.php">education</a></li>
                <li><a href="port4.php">services</a></li>
                <li><a href="port5.php">contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- /* home page right side part start */ -->

    
        <!---------------------------------- host section start ----------------------------------------->

        <section class="home" id="home">

            <div class="home-content">
            
            <h4>Hello, It's Me</h4>
            <h1>Prem Patil</h1>
            <h4>And I'm a <span class="multiple-text"></span></h4>
            <p>Programmers seem to be changing the world. It would be a relief, for them and for all of us,
             if they knew something about it .</p>
            
             <div class="social-media">
                <a href="#" style="--i:7;"><i class='bx bxl-whatsapp'></i></a> 
                <a href="#" style="--i:8;"><i class="bx bxl-telegram"></i></a> 
                <a href="#" style="--i:9;"><i class="bx bxl-instagram"></i></a> 
                <a href="#" style="--i:10;"><i class="bx bxl-facebook"></i></a>  
            </div>
                <a href="#" class="btn">download</a>
            </div>
    
            <div class="home-img">
                <img src="img/4864914.webp" alt="" >
            </div>
    
        </section>

        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
          var typed = new Typed('.multiple-text', {
      strings: ['Frontend Developer', 'Backend Developer'],
      typeSpeed: 80,
      backspeed: 100,
      backdelay: 1000,
      loop: true
    });
    </script>

</body>
</html>