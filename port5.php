<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style3.css">
    <style>
        /* Responsive design */
    @media (max-width: 1200px) {
            .profile-details {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }
            
            .skills-grid {
                grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            }
            
            .timeline-header {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 768px) {
            body {
                padding-left: 0;
            }
            
            header {
                width: 100%;
                height: auto;
                position: relative;
                padding: 2rem;
            }
            
            .split-layout {
                flex-direction: column;
            }
            
            .education-item {
                flex-direction: column;
            }
            
            .education-logo {
                align-self: center;
            }
        }

/* Enhanced mobile styles with fixes */
@media (max-width: 768px) {
    /* 1. Fixed Header */
    header {
         position: flex;
        top: 100% !important;
        left: 0;
        width: 100%;
        height: 60px;
        padding: 0 20px !important;
        background: rgba(21, 20, 20, 1) !important;
        position: relative;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
        box-shadow: 0 2px 20px rgba(52, 51, 51, 0.9);
        border-bottom: 1px solid rgba(247, 197, 16, 0.3);
    }
      /* 2. Content Spacing Fix (MOST IMPORTANT) */
    body {
        padding-top: 3px !important; /* Pushes content below header */
        padding-left: 0;
    }

    /* 3. Main Content Container */
    main, #contact, .content-area {
        margin-top: 550px !important;
        padding: 25px 15px !important;
        animation: fadeIn 0.6s ease-out;
    }

    /* 4. Section Styling */
    section {
        margin-bottom: 30px;
        padding: 20px;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 12px;
        backdrop-filter: blur(5px);
    }

        /* 5. Navigation Menu */
    nav {
        position: flex;
        top: 70px !important;
        left: -100%;
        /* width: 100%; */
        backdrop-filter: blur(15px);
        transition: all 0.4s ease;
        z-index: 999;
        /* max-height: calc(100vh - 70px); */
    }    
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
    </style>
</head>
<body>
    
    <header>

        <div class="user">
            <img src="img/profile.jpeg.jpg" alt="">
            <h3 class="name">--- Portfolio ---</h3>
            <p class="post"><span>PREM VISHWANATH PATIL</span></p>
        </div>
        
        <nav class="navbar">
            <ul>
                <li><a href="port1.php">home</a></li>
                <li><a href="port2.php">about</a></li>
                <li><a href="port3.php">certificates</a></li>
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
                <h3 class="title" style="color: yellow; margin-left: -2%;">contact info</h3><br>

                
                <div class="info">
                    <h3 style="margin: 1rem; display: flex;"><i class='bx bx-envelope' style="color: yellow; margin-left: -3%;"></i>Mylappy5136@gmail.com</h3>
                    <h3 style="margin: 1rem; display: flex;"><i class='bx bxs-phone' style="color: yellow; margin-left: -3%;"></i>+91 9322-8411-12</h3>
                    <h3 style="margin: 1rem; display: flex;"><i class='bx bxs-phone' style="color: yellow; margin-left: -3%;"></i>+91 9130-9125-91</h3>
                    <h3 style="margin: 1rem; display: flex;"><i class='bx bxs-map' style="color: yellow; margin-left: -3%;"></i>Pune, india - 400157</h3>
                </div>


            </div>
            <form action="portfolio_conect.php" method="post">
                <input type="text" placeholder="Username" class="box" name="username"
                style="padding: 1.5rem;
                margin: 1rem;
                margin-left: -6%;
                background: #333;
                color: #fff;
                text-transform: none;
                font-size: 1.7rem;
                width: 100%;
                border-radius: 13% 0 25% 0;">
                <input type="email" placeholder="Email" class="box" name="email"
                style="padding: 1.5rem;
                margin: 1rem;
                margin-left: -6%;
                background: #333;
                color: #fff;
                text-transform: none;
                font-size: 1.7rem;
                width: 100%;
                border-radius: 13% 0 25% 0;">
                <input type="text" placeholder="Project" class="box" name="project"
                style="padding: 1.5rem;
                margin: 1rem;
                margin-left: -6%;
                background: #333;
                color: #fff;
                text-transform: none;
                font-size: 1.7rem;
                width: 100%;
                border-radius: 13% 0 25% 0;">
                <textarea id="" cols="30" rows="5" class="box message" placeholder="Message" name="message"
                style="padding: 1.5rem;
                margin: 1rem;
                margin-left: -6%;
                background: #333;
                color: #fff;
                text-transform: none;
                font-size: 1.7rem;
                width: 100%;
                border-radius: 13% 0 25% 0;"></textarea>
                <button type="submit" name="submit"
                style="padding: 1.5rem;
                margin: 1rem;
                margin-left: -6%;
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