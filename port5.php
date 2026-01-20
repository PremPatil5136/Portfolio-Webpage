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
                <li><a href="port1.php">home</a></li>
                <li><a href="port2.php">about</a></li>
                <li><a href="port3.php">education</a></li>
                <li><a href="port4.php">services</a></li>
                    <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>

   <!-- contact -->
       <!---------------------------------- contact section start ----------------------------------------->
     
       <section class="contact" id="contact">
        <h1 class="heading"> <span>contact</span>me</h1>
        <div class="row">
            <div class="content">
                <h3 class="title" style="color: yellow;">contact info</h3><br>

                
                <div class="info">
                    <h3 style="margin: 1rem; display: flex;"><i class='bx bx-envelope' style="color: yellow;"></i>Mylappy5136@gmail.com</h3>
                    <h3 style="margin: 1rem; display: flex;"><i class='bx bxs-phone' style="color: yellow;"></i>+91 9322-8411-12</h3>
                    <h3 style="margin: 1rem; display: flex;"><i class='bx bxs-phone' style="color: yellow;"></i>+91 9130-9125-91</h3>
                    <h3 style="margin: 1rem; display: flex;"><i class='bx bxs-map' style="color: yellow;"></i>Pune, india - 400157</h3>
                </div>


            </div>
            <form action="portfolio_conect.php" method="post">
                <input type="text" placeholder="Username" class="box" name="username"
                style="padding: 1.5rem;
                margin: 1rem;
                background: #333;
                color: #fff;
                text-transform: none;
                font-size: 1.7rem;
                width: 100%;
                border-radius: 13% 0 25% 0;">
                <input type="email" placeholder="Email" class="box" name="email"
                style="padding: 1.5rem;
                margin: 1rem;
                background: #333;
                color: #fff;
                text-transform: none;
                font-size: 1.7rem;
                width: 100%;
                border-radius: 13% 0 25% 0;">
                <input type="text" placeholder="Project" class="box" name="project"
                style="padding: 1.5rem;
                margin: 1rem;
                background: #333;
                color: #fff;
                text-transform: none;
                font-size: 1.7rem;
                width: 100%;
                border-radius: 13% 0 25% 0;">
                <textarea id="" cols="30" rows="5" class="box message" placeholder="Message" name="message"
                style="padding: 1.5rem;
                margin: 1rem;
                background: #333;
                color: #fff;
                text-transform: none;
                font-size: 1.7rem;
                width: 100%;
                border-radius: 13% 0 25% 0;"></textarea>
                <button type="submit" name="submit"
                style="padding: 1.5rem;
                margin: 1rem;
                background: #333;
                color: yellow;
                text-transform: none;
                font-size: 1.7rem;
                border-radius: 35% 0%;">Send <i class='bx bxs-send'></i></button>
            </form>
        </div>
    </section>
        <!---------------------------------- contact section end ----------------------------------------->
</body>
</html>