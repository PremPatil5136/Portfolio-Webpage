<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Certificates</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Certificate Section */
        .certificates {
            margin-left: 0;
            padding: 10rem 5%;
            background: #111;
            min-height: 100vh;
        }
        
        .certificates .heading {
            text-align: center;
            font-size: 4.5rem;
            color: var(--primary);
            margin-bottom: 5rem;
        }
        
        .certificates .heading span {
            color: white;
        }
        
        /* Category Tabs */
        .category-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 4rem;
            flex-wrap: wrap;
        }
        
        .category-tab {
            padding: 1rem 2.5rem;
            background: rgba(255,255,255,0.05);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.4rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .category-tab.active {
            background: var(--primary);
            color: #f9ca24;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(255,215,0,0.3);
        }
        
        /* Certificate Horizontal Scroll */
        .certificate-scroll-wrapper {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .certificate-scroll-container {
            overflow-x: auto;
            padding-bottom: 2rem;
            scroll-behavior: smooth;
            scrollbar-width: none; /* Firefox */
        }
        
        .certificate-scroll-container::-webkit-scrollbar {
            display: none; /* Chrome/Safari */
        }
        
        .certificate-scroll {
            display: flex;
            gap: 3rem;
            padding: 1rem;
            width: max-content;
        }
        
        /* Navigation buttons */
        .scroll-nav {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .scroll-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            border: 2px solid var(--primary);
            color: var(--primary);
            font-size: 1.8rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .scroll-btn:hover {
            background: var(--primary);
            color: #111;
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(249, 202, 36, 0.4);
        }
        
        .scroll-btn.disabled {
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none;
        }
        
        /* Certificate Card */
        .certificate-card {
            background: rgba(0,0,0,0.7);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: all 0.4s ease;
            border: 1px solid rgba(255,215,0,0.1);
            position: relative;
            width: 350px;
            flex-shrink: 0;
        }
        
        .certificate-card.light {
            background: rgba(30,30,30,0.9);
        }
        
        .certificate-card.dark {
            background: rgba(0,0,0,0.7);
        }
        
        .certificate-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(255,215,0,0.2);
            border-color: var(--primary);
        }
        
        .certificate-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--primary);
            color: black;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 700;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        
        .certificate-image-container {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .certificate-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .certificate-card:hover .certificate-image {
            transform: scale(1.05);
        }
        
        .certificate-content {
            padding: 2rem;
        }
        
        .certificate-name {
            font-size: 2rem;
            color: white;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .certificate-meta {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .issuer-logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1.5rem;
            border: 2px solid var(--primary);
        }
        
        .issuer-info h4 {
            font-size: 1.6rem;
            color: white;
            margin-bottom: 0.3rem;
        }
        
        .issue-date {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.7);
        }
        
        .certificate-actions {
            display: flex;
            gap: 1.5rem;
        }
        
        .action-btn {
            flex: 1;
            padding: 1rem;
            border-radius: 5px;
            font-size: 1.4rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .view-btn {
            background: #f9ca24;
            color: white;
        }
        
        .view-btn:hover {
            background: #f9ca24;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(76,175,80,0.4);
        }
        
        .verify-btn {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .verify-btn:hover {
            background: rgba(255,215,0,0.1);
            transform: translateY(-3px);
        }
        
        /* Certificate Modal */
        .certificate-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 2000;
        }
        
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            backdrop-filter: blur(10px);
        }
        
        .modal-container {
            position: relative;
            background: #111;
            width: 90%;
            max-width: 1000px;
            max-height: 90vh;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
            border: 2px solid var(--primary);
            animation: fadeIn 0.4s ease-out;
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem;
            background: rgba(0,0,0,0.5);
            border-bottom: 1px solid rgba(255,215,0,0.2);
        }
        
        .modal-issuer {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }
        
        .modal-logo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
        }
        
        .modal-issuer-info h3 {
            font-size: 2rem;
            color: white;
            margin-bottom: 0.5rem;
        }
        
        .modal-issue-date {
            font-size: 1.4rem;
            color: rgba(255,255,255,0.7);
        }
        
        .modal-credential {
            text-align: right;
        }
        
        .modal-credential-id {
            font-size: 1.4rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-family: 'Courier New', monospace;
        }
        
        .modal-verification {
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.8rem 1.5rem;
            background: rgba(76, 175, 80, 0.2);
            color: #f9ca24;
            border-radius: 50px;
            font-size: 1.4rem;
            font-weight: 600;
            border: 1px solid rgba(76, 175, 80, 0.3);
        }
        
        .modal-image-container {
            position: relative;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: black;
            overflow: auto;
        }
        
        .modal-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        
        .zoom-controls {
            position: absolute;
            bottom: 2rem;
            right: 2rem;
            display: flex;
            gap: 1rem;
            background: rgba(0,0,0,0.7);
            padding: 0.8rem;
            border-radius: 50px;
        }
        
        .zoom-btn {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.1);
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 1.6rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .zoom-btn:hover {
            background: var(--primary);
            color: black;
        }
        
        .modal-actions {
            display: flex;
            padding: 2rem;
            background: rgba(0,0,0,0.5);
            border-top: 1px solid rgba(255,215,0,0.2);
            gap: 1.5rem;
        }
        
        .modal-btn {
            flex: 1;
            padding: 1.5rem;
            border-radius: 5px;
            font-size: 1.6rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            text-decoration: none;
        }
        
        .modal-view-btn {
            background: #f9ca24;
            color: white;
        }
        
        .modal-view-btn:hover {
            background: #f9ca24;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(76,175,80,0.4);
        }
        
        .modal-verify-btn {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .modal-verify-btn:hover {
            background: rgba(255,215,0,0.1);
            transform: translateY(-3px);
        }
        
        .close-modal {
            position: absolute;
            top: 2rem;
            right: 2rem;
            width: 45px;
            height: 45px;
            background: rgba(0,0,0,0.7);
            color: white;
            border: 1px solid var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
            font-size: 2rem;
        }
        
        .close-modal:hover {
            background: var(--primary);
            color: black;
            transform: rotate(90deg);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
    main, #certificates, .content-area {
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
                <li><a href="#certificates" class="active">certificates</a></li>
                <li><a href="port4.php">services</a></li>
                <li><a href="port5.php">contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Certificates Section -->
    <section class="certificates" id="certificates">
        <h1 class="heading" style="justify-content: center">My <span style="color:#f9ca24">Certifications</span></h1>
        
        <!-- Category Tabs -->
        <div class="category-tabs">
            <button class="category-tab active" data-category="all">All Certificates</button>
            <button class="category-tab" data-category="Activites">Activites</button>
            <button class="category-tab" data-category="Appreciation">Honors</button>
            <button class="category-tab" data-category="Designing">Designing</button>
            <button class="category-tab" data-category="Events">Events</button>
            <button class="category-tab" data-category="Languages">Languages</button>
            <!-- <button class="category-tab" data-category="Publication">Publication</button> -->
        </div>
        
        <!-- Certificate Horizontal Scroll -->
        <div class="certificate-scroll-wrapper">
            <div class="certificate-scroll-container">
                <div class="certificate-scroll">
                    <!-- Certificate 1 -->
                    <div class="certificate-card light" data-category="Appreciation">
                        <div class="certificate-badge">Featured</div>
                        <div class="certificate-image-container">
                            <img src="assets/img/Avinya Team Certificates_page-0001.jpg" alt="jspm Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">National level 24-Hour Hackathon - AVINYA 3.0</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/jspm 1.jpg" alt="jspm Institute" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>JSPM RSCOE Institute</h4>
                                    <p class="issue-date">Issued: Feb 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 2 -->
                    <div class="certificate-card dark" data-category="Publication">
                        <div class="certificate-image-container">
                            <img src="assets/img/Copyright.jpg" alt="Hackathon Winner" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">IOT Based Smart School Bus Monitoring & Security System</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/copyright.jpg" alt="HackTech" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Goverment Copyright</h4>
                                    <p class="issue-date">Issued: Mar 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 3 -->
                    <div class="certificate-card dark" data-category="Designing">
                        <div class="certificate-image-container">
                            <img src="assets/img/canva AI classroom deign_page-0001.jpg" alt="Canva Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Canva AI Classroom Certification</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/canva.jpg" alt="Canva" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Canva</h4>
                                    <p class="issue-date">Issued: Jan 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 4 -->
                    <div class="certificate-card dark" data-category="Appreciation">
                        <div class="certificate-image-container">
                            <img src="assets/img/IEEE Winner Certificate from Jspm.jpg" alt="Canva Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">IEEE Softgyan Technical Paper Presentation Winner</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/jspm 2.jpg" alt="Canva" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>JSPM RSCOE, Polythenic</h4>
                                    <p class="issue-date">Issued: Mar 2023</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 5 -->
                    <div class="certificate-card dark" data-category="Appreciation">
                        <div class="certificate-image-container">
                            <img src="assets/img/Launched Trainee Certificate_page-0001.jpg" alt="Hackathon Winner" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Launched Global Pvt.ltd Trainee Certificate</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/launched.jpg" alt="HackTech" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>launched Global </h4>
                                    <p class="issue-date">Issued: Feb 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 6 -->
                    <div class="certificate-card dark" data-category="Publication">
                        <div class="certificate-image-container">
                            <img src="assets/img/IEEE Paper Publishing_page-0001.jpg" alt="Hackathon Winner" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">IEEE Paper Publishing Certificate</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/irjmet.jpg" alt="HackTech" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>IRJMET Publication</h4>
                                    <p class="issue-date">Issued: Feb 2024</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 7 -->
                    <div class="certificate-card dark" data-category="Events">
                        <div class="certificate-image-container">
                            <img src="assets/img/pccoe.jpg" alt="Canva Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">PCCOE INSPERIA-2025 National Level Tech-Tank Event</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/pccoe.jpg" alt="Canva" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Pimpri Chinchwad College of Engineering</h4>
                                    <p class="issue-date">Issued: Mar 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 8 -->
                    <div class="certificate-card dark" data-category="Languages">
                        <div class="certificate-image-container">
                            <img src="assets/img/infosys AWS cloud certificate 2022_page-0001.jpg" alt="Hackathon Winner" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Infosys AWS cloud certificate 2022</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/infosys.jpg" alt="HackTech" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Infosys Springboard</h4>
                                    <p class="issue-date">Issued: Jan 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 9 -->
                    <div class="certificate-card light" data-category="Appreciation">
                        <div class="certificate-image-container">
                            <img src="assets/img/Certificate_logica_4.0_page-0001.jpg" alt="Appreciation Certificate" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Coordinator for Logica 4.0 - Project Competition</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/jspm 1.jpg" alt="Tech Solutions" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>JSPM RSCOE Institute</h4>
                                    <p class="issue-date">Issued: Mar 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 10 -->
                    <div class="certificate-card dark" data-category="Designing">
                        <div class="certificate-image-container">
                            <img src="assets/img/canva essential_page-0001.jpg" alt="Canva Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Canva Essential Certification</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/canva.jpg" alt="Canva" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Canva</h4>
                                    <p class="issue-date">Issued: Jan 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 11 -->
                    <div class="certificate-card light" data-category="Activites">
                        <div class="certificate-image-container">
                            <img src="assets/img/HP Effective Leadership certificate_page-0001.jpg" alt="AI Internship" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">HP Effective Leadership certificate</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/hplife.png" alt="AI Labs" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>HP Life</h4>
                                    <p class="issue-date">Issued: Jun 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 12 -->
                    <div class="certificate-card dark" data-category="Languages">
                        <div class="certificate-image-container">
                            <img src="assets/img/Spoken Tutorial participant_page-0001.jpg" alt="Hackathon Winner" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Certificate for the Completion of Cpp Training</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/iit.jpg" alt="HackTech" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Spoken Tutorial Project at IIT Bombay</h4>
                                    <p class="issue-date">Issued: Mar 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 13 -->
                    <div class="certificate-card dark" data-category="Activites">
                        <div class="certificate-image-container">
                            <img src="assets/img/Wadhani Emplobility skill_page-0001.jpg" alt="Hackathon Winner" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Emplobility Skill Foundation Course </h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/wadhani.png" alt="HackTech" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Wadhani Foundation</h4>
                                    <p class="issue-date">Issued: Jan 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 14 -->
                    <div class="certificate-card dark" data-category="Events">
                        <div class="certificate-image-container">
                            <img src="assets/img/singhad.jpg" alt="Canva Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">IEEE MSBTE Technical Paper Presentation</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/msbte.jpg" alt="Canva" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Singhad Institute, Polythenic</h4>
                                    <p class="issue-date">Issued: Jan 2024</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 15 -->
                    <div class="certificate-card dark" data-category="Events">
                        <div class="certificate-image-container">
                            <img src="assets/img/tssm1.jpg" alt="Canva Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Paper Presentation in PVPIT College</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/tssm.png" alt="Canva" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>TSSM The Shetkari Shikshan Mandal Group of Institute </h4>
                                    <p class="issue-date">Issued: Feb 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 16 -->
                    <div class="certificate-card dark" data-category="Designing">
                        <div class="certificate-image-container">
                            <img src="assets/img/canva graphics deign_page-0001.jpg" alt="Canva Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Canva Graphics Design Certification</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/canva.jpg" alt="Canva" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Canva</h4>
                                    <p class="issue-date">Issued: Jan 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 17 -->
                    <div class="certificate-card light" data-category="Languages">
                        <div class="certificate-badge">Featured</div>
                        <div class="certificate-image-container">
                            <img src="assets/img/greekster sql_page-0001.jpg" alt="SQL Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">SQL Course Certification : Basic to Advance</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/greekster.png" alt="Python Institute" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Greekster</h4>
                                    <p class="issue-date">Issued: Jan 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 18 -->
                    <div class="certificate-card dark" data-category="Languages">
                        <div class="certificate-image-container">
                            <img src="assets/img/MongoDB Certificate_page-0001.jpg" alt="Hackathon Winner" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Introduction to mongoDB Course</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/mongodb.jpg" alt="HackTech" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>MongoDB</h4>
                                    <p class="issue-date">Issued: Jul 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 19 -->
                    <div class="certificate-card dark" data-category="Activites">
                        <div class="certificate-image-container">
                            <img src="assets/img/SBI College Youth Ideathon_page-0001.jpg" alt="Hackathon Winner" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">SBI College Youth Ideathon 2025</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/think-startup.png" alt="HackTech" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Think Startup</h4>
                                    <p class="issue-date">Issued: Feb 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 20 -->
                    <div class="certificate-card dark" data-category="Appreciation">
                        <div class="certificate-image-container">
                            <img src="assets/img/Smarted Certificate _page-0001.jpg" alt="Hackathon Winner" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Tech Contributors To Grow Community</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/think-startup.png" alt="HackTech" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Smarted #startupindia</h4>
                                    <p class="issue-date">Issued: Jul 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 22 -->
                    <div class="certificate-card light" data-category="Activites">
                        <div class="certificate-image-container">
                            <img src="assets/img/HP Effective Presentation certificate_page-0001.jpg" alt="AI Internship" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">HP Effective Presentation certificate</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/hplife.png" alt="AI Labs" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>HP Life</h4>
                                    <p class="issue-date">Issued: Jun 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 23 -->
                    <div class="certificate-card dark" data-category="Events">
                        <div class="certificate-image-container">
                            <img src="assets/img/pccoe1.jpg" alt="Canva Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">PCCOE INSPERIA-2025 National Level Future-Forge Event</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/pccoe.jpg" alt="Canva" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Pimpri Chinchwad College of Engineering</h4>
                                    <p class="issue-date">Issued: Mar 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 24 -->
                    <div class="certificate-card dark" data-category="Activites">
                        <div class="certificate-badge">New</div>
                        <div class="certificate-image-container">
                            <img src="assets/img/Chess Cerificates_page-0002.jpg" alt="chess Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Participation in Chess Tournament at JSPM RSCOE</h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/jspm 1.jpg" alt="Chess Certification" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>Gandharva</h4>
                                    <p class="issue-date">Issued: Feb 202</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Certificate 25 -->
                    <div class="certificate-card dark" data-category="Events">
                        <div class="certificate-image-container">
                            <img src="assets/img/sambhav.jpg" alt="Canva Certification" class="certificate-image">
                        </div>
                        <div class="certificate-content">
                            <h3 class="certificate-name">Participation in InspireX 2024 </h3>
                            <div class="certificate-meta">
                                <img src="assets/logo/jspm 2.jpg" alt="Canva" class="issuer-logo">
                                <div class="issuer-info">
                                    <h4>JSPM RSCOE, Engineering</h4>
                                    <p class="issue-date">Issued: Mar 2025</p>
                                </div>
                            </div>
                            <div class="certificate-actions">
                                <button class="action-btn view-btn">
                                    <i class="fas fa-expand"></i> View
                                </button>
                                <a href="#" class="action-btn verify-btn">
                                    <i class="fas fa-external-link-alt"></i> Verify
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation buttons -->
            <div class="scroll-nav">
                <button class="scroll-btn scroll-left" aria-label="Scroll left">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="scroll-btn scroll-right" aria-label="Scroll right">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Certificate Modal -->
    <div class="certificate-modal">
        <div class="modal-overlay"></div>
        <div class="modal-container">
            <span class="close-modal">&times;</span>
            <div class="modal-header">
                <div class="modal-issuer">
                    <img src="" alt="Issuer Logo" class="modal-logo">
                    <div class="modal-issuer-info">
                        <h3 class="modal-issuer-name"></h3>
                        <p class="modal-issue-date"></p>
                    </div>
                </div>
                <div class="modal-credential">
                    <div class="modal-verification">
                        <i class="fas fa-shield-alt"></i> Verified Certificate
                    </div>
                </div>
            </div>
            <div class="modal-image-container">
                <img src="" alt="Certificate" class="modal-image">
                <div class="zoom-controls">
                    <button class="zoom-btn zoom-in"><i class="fas fa-search-plus"></i></button>
                    <button class="zoom-btn zoom-out"><i class="fas fa-search-minus"></i></button>
                </div>
            </div>
            <div class="modal-actions">
                <button class="modal-btn modal-view-btn">
                    <i class="fas fa-expand"></i> Full View
                </button>
                <a href="#" class="modal-btn modal-verify-btn" target="_blank">
                    <i class="fas fa-external-link-alt"></i> Verify Online
                </a>
            </div>
        </div>
    </div>

    <script>
        // Certificate Filtering
        const tabs = document.querySelectorAll('.category-tab');
        const certificates = document.querySelectorAll('.certificate-card');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                
                const category = tab.dataset.category;
                
                certificates.forEach(cert => {
                    if (category === 'all' || cert.dataset.category === category) {
                        cert.style.display = 'block';
                    } else {
                        cert.style.display = 'none';
                    }
                });
            });
        });
        
        // Modal and Zoom Functionality
        const modal = document.querySelector('.certificate-modal');
        const modalImg = document.querySelector('.modal-image');
        const modalIssuerName = document.querySelector('.modal-issuer-name');
        const modalIssueDate = document.querySelector('.modal-issue-date');
        const modalLogo = document.querySelector('.modal-logo');
        const closeBtn = document.querySelector('.close-modal');
        const zoomIn = document.querySelector('.zoom-in');
        const zoomOut = document.querySelector('.zoom-out');
        
        let currentScale = 1;
        
        // Open modal when clicking view button
        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const card = btn.closest('.certificate-card');
                const imgSrc = card.querySelector('.certificate-image').src;
                const issuerName = card.querySelector('.issuer-info h4').textContent;
                const issueDate = card.querySelector('.issue-date').textContent;
                const certName = card.querySelector('.certificate-name').textContent;
                
                modalImg.src = imgSrc;
                modalIssuerName.textContent = issuerName;
                modalIssueDate.textContent = issueDate;
                modalLogo.src = card.querySelector('.issuer-logo').src;
                
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
                resetZoom();
            });
        });
        
        // Zoom controls
        zoomIn.addEventListener('click', () => {
            currentScale += 0.2;
            modalImg.style.transform = `scale(${currentScale})`;
        });
        
        zoomOut.addEventListener('click', () => {
            if(currentScale > 0.5) {
                currentScale -= 0.2;
                modalImg.style.transform = `scale(${currentScale})`;
            }
        });
        
        function resetZoom() {
            currentScale = 1;
            modalImg.style.transform = `scale(${currentScale})`;
        }
        
        // Close modal
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
        
        modal.addEventListener('click', (e) => {
            if(e.target === modal || e.target.classList.contains('modal-overlay')) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Certificate Scrolling Navigation
        const scrollContainer = document.querySelector('.certificate-scroll-container');
        const scrollContent = document.querySelector('.certificate-scroll');
        const scrollLeftBtn = document.querySelector('.scroll-left');
        const scrollRightBtn = document.querySelector('.scroll-right');
        
        // Scroll amount (adjust as needed)
        const scrollAmount = 400;
        
        scrollLeftBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });
        
        scrollRightBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
        
        // Show/hide buttons based on scroll position
        scrollContainer.addEventListener('scroll', () => {
            const maxScroll = scrollContent.scrollWidth - scrollContainer.clientWidth;
            
            if (scrollContainer.scrollLeft <= 10) {
                scrollLeftBtn.classList.add('disabled');
            } else {
                scrollLeftBtn.classList.remove('disabled');
            }
            
            if (scrollContainer.scrollLeft >= maxScroll - 10) {
                scrollRightBtn.classList.add('disabled');
            } else {
                scrollRightBtn.classList.remove('disabled');
            }
        });
        
        // Initialize button states
        scrollContainer.dispatchEvent(new Event('scroll'));
    </script>
</body>
</html>