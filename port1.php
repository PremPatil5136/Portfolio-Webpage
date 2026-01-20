<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prem Patil - Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style3.css">
    <style>
        /* Social Media Cards Container */
        .social-cards {
            display: flex;
            gap: 1rem;
            margin: 2rem 0;
            justify-content: flex-start; /* Changed to left-align */
        }

        /* Social Media Card Styles - Smaller Size */
        .social-card {
            position: relative;
            width: 60px; /* Reduced from 80px */
            height: 60px; /* Reduced from 80px */
            background: rgba(26, 26, 26, 0.8);
            border-radius: 15px; /* Slightly smaller radius */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Smaller shadow */
            border: 1px solid rgba(249, 202, 36, 0.2);
        }

        .social-card::before {
            content: "";
            position: absolute;
            width: 150%;
            height: 150%;
            background: conic-gradient(
                transparent 0deg,
                transparent 180deg,
                #f9ca24 180deg,
                #f9ca24 360deg
            );
            animation: rotate 4s linear infinite;
            z-index: 1;
        }

        .social-card::after {
            content: "";
            position: absolute;
            inset: 3px; /* Reduced from 4px */
            background: rgba(26, 26, 26, 0.9);
            border-radius: 12px; /* Reduced from 16px */
            z-index: 2;
        }

        .social-card i {
            font-size: 1.8rem; /* Reduced from 2.5rem */
            color: #f9ca24;
            z-index: 3;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .social-card:hover {
            transform: translateY(-5px) scale(1.05); /* Reduced lift */
            box-shadow: 0 8px 20px rgba(249, 202, 36, 0.3); /* Smaller shadow */
        }

        .social-card:hover i {
            color: #fff;
            transform: scale(1.1); /* Reduced scale */
        }

        /* Card Content (hidden by default) - Smaller */
        .card-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 0.5rem; /* Reduced padding */
            background: rgba(249, 202, 36, 0.9);
            border-radius: 0 0 15px 15px; /* Reduced radius */
            transform: translateY(100%);
            transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1); /* Faster transition */
            z-index: 4;
            text-align: center;
            color: #1a1a1a;
            font-weight: 600;
            font-size: 0.7rem; /* Smaller font */
            opacity: 0;
        }

        .social-card:hover .card-content {
            transform: translateY(0);
            opacity: 1;
        }

        /* Animation for border */
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* Floating animation - More subtle */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-5px); /* Reduced movement */
            }
            100% {
                transform: translateY(0px);
            }
        }

        /* Apply floating animation to cards */
        .social-card:nth-child(1) {
            animation: float 4s ease-in-out infinite;
        }
        .social-card:nth-child(2) {
            animation: float 4s ease-in-out infinite 0.5s;
        }
        .social-card:nth-child(3) {
            animation: float 4s ease-in-out infinite 1s;
        }


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
    main, #home, .content-area {
        margin-top: 530px !important;
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
                <li><a href="#home">home</a></li>
                <li><a href="port2.php">about</a></li>
                <li><a href="port3.php">certificates</a></li>
                <li><a href="port4.php">services</a></li>
                <li><a href="port5.php">contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h4>Hello, It's Me</h4>
            <h1>Prem Patil</h1>
            <h4>And I'm a <span class="multiple-text"></span></h4>
            <p>Programmers seem to be changing the world. It would be a relief, for them and for all <br> of us,
             if they knew something about it.</p>
            
            <div class="social-cards">
                <!-- WhatsApp Card -->
                <div class="social-card">
                    <i class='bx bxl-whatsapp'></i>
                    <div class="card-content">Chat</div>
                </div>
                
                <!-- GitHub Card -->
                <div class="social-card">
                    <i class='bx bxl-github'></i>
                    <div class="card-content">Projects</div>
                </div>
                
                <!-- LinkedIn Card -->
                <div class="social-card">
                    <i class='bx bxl-linkedin'></i>
                    <div class="card-content">Connect</div>
                </div>
            </div>
        </div>

        <div class="home-img">
            <img src="img/Alone Hacker.jpeg.jpg" alt="">
        </div>
    </section>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.multiple-text', {
            strings: ['Frontend Developer', 'Backend Developer', 'Data Analyst'],
            typeSpeed: 80,
            backspeed: 100,
            backdelay: 1000,
            loop: true
        });

        // Add click events to social cards
        document.querySelectorAll('.social-card').forEach((card, index) => {
            card.addEventListener('click', () => {
                // Replace with your actual links
                const links = [
                    'https://wa.me/9322841112',
                    'https://github.com/Premvpatil',
                    'https://www.linkedin.com/in/prem-patil-64b741330?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'
        ];
                window.open(links[index], '_blank');
            });
        });
    </script>
</body>
</html>