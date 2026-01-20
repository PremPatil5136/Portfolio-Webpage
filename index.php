<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Prem Patil - Portfolio</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style3.css">

  <style>
    /* Overlay background during loading */
    #overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100vw; height: 100vh;
      background: rgba(0, 0, 0, 0.85);
      z-index: 9998;
      display: none;
    }

    /* Skeleton Loader Styles */
    .skeleton-loader {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 90%;
      max-width: 1200px;
      display: flex;
      justify-content: space-between;
      padding: 2rem;
      border-radius: 10px;
      background-color: #000;
      z-index: 9999;
    }

    .skeleton-content {
      width: 60%;
    }

    .skeleton-line {
      height: 20px;
      background: linear-gradient(90deg, #1a1a1a 25%, #2a2a2a 50%, #1a1a1a 75%);
      background-size: 200% 100%;
      border-radius: 4px;
      margin-bottom: 15px;
      animation: shimmer 1.5s infinite linear;
    }

    .skeleton-line.short { width: 30%; }
    .skeleton-line.medium { width: 50%; }
    .skeleton-line.long { width: 80%; }

    .skeleton-card {
      width: 60px;
      height: 60px;
      background: linear-gradient(90deg, #1a1a1a 25%, #2a2a2a 50%, #1a1a1a 75%);
      background-size: 200% 100%;
      border-radius: 15px;
      margin-right: 1rem;
      animation: shimmer 1.5s infinite linear;
    }

    .skeleton-img {
      width: 35%;
      height: 300px;
      background: linear-gradient(90deg, #1a1a1a 25%, #2a2a2a 50%, #1a1a1a 75%);
      background-size: 200% 100%;
      border-radius: 10px;
      animation: shimmer 1.5s infinite linear;
    }

    @keyframes shimmer {
      0% { background-position: 200% 0; }
      100% { background-position: -200% 0; }
    }

    .home {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 5%;
    }

    .home-content { width: 60%; }
    .home-img { width: 30%; }
    .home-img img {
      width: 100%;
      border-radius: 10px;
       margin-left: -10%;
    }

    .social-cards {
      display: flex;
      gap: 1rem;
      margin: 2rem 0;
      justify-content: flex-start;
    }

    .social-card {
      position: relative;
      width: 60px;
      height: 60px;
      background: rgba(26, 26, 26, 0.8);
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      cursor: pointer;
      transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(249, 202, 36, 0.2);
    }

    .social-card::before {
      content: "";
      position: absolute;
      width: 150%;
      height: 150%;
      background: conic-gradient(transparent 0deg, transparent 180deg, #f9ca24 180deg, #f9ca24 360deg);
      animation: rotate 4s linear infinite;
      z-index: 1;
    }

    .social-card::after {
      content: "";
      position: absolute;
      inset: 3px;
      background: rgba(26, 26, 26, 0.9);
      border-radius: 12px;
      z-index: 2;
    }

    .social-card i {
      font-size: 1.8rem;
      color: #f9ca24;
      z-index: 3;
      transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .social-card:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 8px 20px rgba(249, 202, 36, 0.3);
    }

    .social-card:hover i {
      color: #fff;
      transform: scale(1.1);
    }

    .card-content {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 0.5rem;
      background: rgba(249, 202, 36, 0.9);
      border-radius: 0 0 15px 15px;
      transform: translateY(100%);
      transition: all 0.3s ease;
      z-index: 4;
      text-align: center;
      color: #1a1a1a;
      font-weight: 600;
      font-size: 0.7rem;
      opacity: 0;
    }

    .social-card:hover .card-content {
      transform: translateY(0);
      opacity: 1;
    }

    @keyframes rotate {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-5px); }
      100% { transform: translateY(0px); }
    }

    .social-card:nth-child(1) { animation: float 4s ease-in-out infinite; }
    .social-card:nth-child(2) { animation: float 4s ease-in-out infinite 0.5s; }
    .social-card:nth-child(3) { animation: float 4s ease-in-out infinite 1s; }

    .view-message {
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    padding: 10px 25px;
    border-radius: 30px;
    font-family: 'Arial', sans-serif;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.5px;
    color: rgba(255,255,255,0.95);
    z-index: 100;
    text-align: center;
    background: rgba(26, 26, 26, 0.7);
    border: 1.5px solid transparent;
    background-clip: padding-box;
    animation: 
      fadePulse 4s infinite ease-in-out,
      borderGlow 3s infinite alternate;
  }

  .view-message::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 30px;
    padding: 1.5px;
    background: linear-gradient(45deg, 
      rgba(249,202,36,0.7), 
      rgba(255,255,255,0.4), 
      rgba(249,202,36,0.7));
    -webkit-mask: 
      linear-gradient(#fff 0 0) content-box, 
      linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
  }

  @keyframes fadePulse {
    0%, 100% { opacity: 0; transform: translate(-50%, 10px); }
    30%, 80% { opacity: 1; transform: translate(-50%, 0); }
  }

  @keyframes borderGlow {
    from { border-color: rgba(249,202,36,0.3); }
    to { border-color: rgba(249,202,36,0.7); }
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

  <!-- Overlay -->
  <div id="overlay"></div>

  <!-- Skeleton Loader -->
  <div class="skeleton-loader" id="skeletonLoader">
    <div class="skeleton-content">
      <div class="skeleton-line short"></div>
      <div class="skeleton-line medium" style="height: 40px;"></div>
      <div class="skeleton-line short" style="width: 40%;"></div>
      <div class="skeleton-line long" style="height: 80px;"></div>
      <div style="display: flex;">
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
      </div>
    </div>
    <div class="skeleton-img"></div>
  </div>

  <!-- Actual Content -->
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

  <section id="home" class="home" style="display: none;">
    <div class="home-content">
      <h4>Hello, It's Me</h4>
      <h1>Prem Patil</h1>
      <h4>And I'm a <span class="multiple-text"></span></h4>
      <p>Programmers seem to be changing the world. It would be a relief, for them and for all of us, if they knew something about it.</p>

      <div class="social-cards">
        <div class="social-card">
          <i class='bx bxl-whatsapp'></i>
          <div class="card-content">Chat</div>
        </div>
        <div class="social-card">
          <i class='bx bxl-github'></i>
          <div class="card-content">Projects</div>
        </div>
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
    // Show loader
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('skeletonLoader').style.display = 'flex';

    setTimeout(function () {
      // Hide loader
      document.getElementById('skeletonLoader').style.display = 'none';
      document.getElementById('overlay').style.display = 'none';

      // Show main content
      document.querySelector('.home').style.display = 'flex';

      // Initialize Typed.js
      new Typed('.multiple-text', {
        strings: ['Frontend Developer', 'Backend Developer', 'Data Analyst'],
        typeSpeed: 80,
        backSpeed: 100,
        backDelay: 1000,
        loop: true
      });

      // Add click events to social cards
      document.querySelectorAll('.social-card').forEach((card, index) => {
        const links = [
          'https://wa.me/9322841112',
          'https://github.com/Premvpatil',
          'https://www.linkedin.com/in/prem-patil-64b741330?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'
        ];
        card.addEventListener('click', () => {
          window.open(links[index], '_blank');
        });
      });

    }, 2000);
  </script>
  

<div class="view-message">
  <p>For best experience, please view on desktop/laptop Mode :)</p>
</div>

</body>
</html>
