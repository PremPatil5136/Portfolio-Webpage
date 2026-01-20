<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Prem Patil</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
    main, #projects, .content-area {
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
    <header class="header">
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
                <li><a href="#Project.php">services</a></li>
                <li><a href="port5.php">contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="projects" id="projects">
        <h1 class="heading"> my <span>projects</span> </h1><br><br>
        
        <div class="filter-btns">
            <!-- <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="web">Web Apps</button>
            <button class="filter-btn" data-filter="mobile">IOT Apps</button>
            <button class="filter-btn" data-filter="game">Excel Dashboard</button> -->

            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="web">Web Apps</button>
            <button class="filter-btn" data-filter="xxxxx">IOT Apps</button>
            <button class="filter-btn" data-filter="xxxxxx">Excel Dashboard</button>
        </div>
        
        <div class="projects-container">
            <!-- Project 1 -->
            <div class="project-card" data-category="web">
                <div class="project-image">
                    <img src="assets/img/web_proj2.png" alt="TaskBidder Platform">
                </div>
                <div class="project-content">
                    <h3 class="project-title">TaskBidder Project</h3>
                    <p class="project-description">Developed a platform connecting users and developers for secure job bidding and freelancing, integrating real-time communication and efficient project management.</p>
                    <div class="project-tech">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">HTML/CSS</span>
                        <span class="tech-tag">Bootstrap</span>
                    </div>
                    <div class="project-links">
                        <a href="https://drive.google.com/file/d/1INWGJdPwCtIxGLRUPXny3tonxCAL9BWk/view?usp=sharing" class="project-link link-live">
                            <i class='bx bx-globe'></i> Live Demo
                        </a>
                        <a href="#" class="project-link link-code">
                            <i class='bx bxl-github'></i> Code
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="project-card" data-category="IOT">
                <div class="project-image">
                    <img src="assets/img/Iot_proj1.png" alt="Weather App">
                </div>
                <div class="project-content">
                    <h3 class="project-title">OBSTACLE DETECTION REMOTE CAR</h3>
                    <p class="project-description">Designed an IoT-based obstacle detection system for a remote car, using sensors to detect obstacles, send alerts, and take preventive actions in real time, ensuring safer navigation.</p>
                    <div class="project-tech">
                        <span class="tech-tag">IOT</span>
                        <span class="tech-tag">Bootstrap</span>
                        <span class="tech-tag">HTML/CSS</span>
                    </div>
                    <div class="project-links">
                        <a href="assets/img/Remote Car.jpg" class="project-link link-live">
                            <i class='bx bx-mobile-alt'></i> Demo
                        </a>
                        <a href="#" class="project-link link-code">
                            <i class='bx bxl-github'></i> Code
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
             <!-- <div class="project-card" data-category="game"> -->
            <div class="project-card" data-category="xxxxxx">
                <div class="project-image">
                    <img src="assets/img/comming_soon.png" alt="Space Adventure">
                </div>
                <div class="project-content">
                    <h3 class="project-title">XXX XXXXXXX XXXX XXXXXXXXX</h3>
                    <p class="project-description">xx xxxxxxx xxxx xxxxxxxx xxxx xxxxx xxxxxxx xxxx xx xxxx xxx xxxxxxxx xxxxxx xxxxxxxx xxx x xxxxxxx xxxxxxx xxxxxxxxxx.</p>
                    <div class="project-tech">
                        <span class="tech-tag">xxx xxxxxxx</span>
                        <span class="tech-tag">xxx xx xxxxxx</span>
                        <span class="tech-tag">xxxxx xxxx xx</span>
                    </div>
                    <div class="project-links">
                        <a href="assets/img/comming_soon.png" class="project-link link-live">
                            <i class='bx bx-game'></i> Play Now
                        </a>
                        <a href="#" class="project-link link-code">
                            <i class='bx bxl-github'></i> Code
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="project-card" data-category="web">
                <div class="project-image">
                    <img src="assets/img/web_proj1.png" alt="E-Commerce Store">
                </div>
                <div class="project-content">
                    <h3 class="project-title">Capstone Project</h3>
                    <p class="project-description">A freelance marketplace connecting businesses with developers for project collaboration.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Visual Studio</span>
                        <span class="tech-tag">SQL Server</span>
                        <span class="tech-tag">HTML/CSS</span>
                        <span class="tech-tag">JavaScript</span>
                    </div>
                    <div class="project-links">
                        <a href="https://drive.google.com/file/d/11KncOsPOp_pPcqh3GWzXLBsGM55RPF2m/view?usp=sharing" class="project-link link-live">
                            <i class='bx bx-globe'></i> Live Demo
                        </a>
                        <a href="#" class="project-link link-code">
                            <i class='bx bxl-github'></i> Code
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 5 -->
            <!-- <div class="project-card" data-category="mobile"> -->
            <div class="project-card" data-category="xxxxx">
                <div class="project-image">
                    <img src="assets/img/comming_soon.png" alt="UI/UX Designs">
                </div>
                <div class="project-content">
                    <h3 class="project-title">XXXX XXXXXXXX XXX XXXXX</h3>
                    <p class="project-description">xx xxxxxxx xxxx xxxxxxxx xxxx xxxxx xxxxxxx xxxx xx xxxx xxx xxxxxxxx xxxxxx xxxxxxxx xxx x xxxxxxx xxxxxxx xxxxxxxxxx.</p>
                    <div class="project-tech">
                        <span class="tech-tag">xxx xxxxxxx</span>
                        <span class="tech-tag">xxx xx xxxxxx</span>
                        <span class="tech-tag">xxxxx xxxx xx</span>
                    </div>
                    <div class="project-links">
                        <a href="assets/img/comming_soon.png" class="project-link link-live">
                            <i class='bx bx-globe'></i> Live Demo
                        </a>
                        <a href="#" class="project-link link-code">
                            <i class='bx bxl-github'></i> Code
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 6 -->
            <div class="project-card" data-category="web">
                <div class="project-image">
                    <img src="assets/img/comming_soon.png" alt="Blog Platform">
                </div>
                <div class="project-content">
                    <h3 class="project-title">XXXX XXX XXXX</h3>
                    <p class="project-description">xx xxxxxxx xxxx xxxxxxxx xxxx xxxxx xxxxxxx xxxx xx xxxx xxx xxxxxxxx xxxxxx xxxxxxxx xxx x xxxxxxx xxxxxxx xxxxxxxxxx.</p>
                    <div class="project-tech">
                        <span class="tech-tag">xxx xxxxxxx</span>
                        <span class="tech-tag">xxx xx xxxxxx</span>
                        <span class="tech-tag">xxxxx xxxx xx</span>
                    </div>
                    <div class="project-links">
                        <a href="assets/img/comming_soon.png" class="project-link link-live">
                            <i class='bx bx-globe'></i> Live Demo
                        </a>
                        <a href="#" class="project-link link-code">
                            <i class='bx bxl-github'></i> Code
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Modal -->
    <div class="project-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-image">
                <img src="" alt="Project Image">
            </div>
            <h2 class="modal-title">Project Title</h2>
            <h3 class="modal-subtitle">Project Category</h3>
            <p class="modal-description">
                Project description will appear here.
            </p>
            <div class="modal-features">
                <h4>Key Features</h4>
                <ul>
                    <!-- Features will be added dynamically -->
                </ul>
            </div>
            <div class="modal-tech">
                <!-- Tech tags will be added dynamically -->
            </div>
            <div class="modal-links">
                <!-- Links will be added dynamically -->
            </div>
        </div>
    </div>

    <!-- <script src="main.js"></script> -->
     <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Project Filter Functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    if (filterBtns.length && projectCards.length) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');
                
                const filterValue = btn.getAttribute('data-filter');
                
                projectCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }

    // Project Modal Functionality
    const projectModal = document.querySelector('.project-modal');
    const modalClose = document.querySelector('.close-modal');
    
    // Define features for each project
    const projectFeatures = {
        "TaskBidder Project": [
            "Freelance marketplace platform",
            "Business-developer collaboration",
            "Bidding system for projects",
            "User rating and review system"
        ],
        "OBSTACLE DETECTION REMOTE CAR": [
            "Real-time Obstacle Detection System",
            "AI-Powered Collision Avoidance",
            "Multi-Sensor Fusion Technology",
            "Obstacle Mapping & Logging"
        ],
        "XXX XXXXXXX XXXX XXXXXXXXX": [
            "xx xxxxxxxx xxxxxxxxxx",
            "xxxxxxx xxxxxx",
            "xxxxxxxxx xxxxxxxxxxx",
            "xxxxxx xxx xxxxxxxxx xxx xxxx"
        ],
        "Capstone Project": [
            "Freelance marketplace platform",
            "Business-developer collaboration",
            "Bidding system for projects",
            "User rating and review system"
        ],
        "XXXX XXXXXXXX XXX XXXXX": [
            "xx xxxxxxxx xxxxxxxxxx",
            "xxxxxxx xxxxxx",
            "xxxxxxxxx xxxxxxxxxxx",
            "xxxxxx xxx xxxxxxxxx xxx xxxx"
        ],
        "XXXX XXX XXXX": [
            "xx xxxxxxxx xxxxxxxxxx",
            "xxxxxxx xxxxxx",
            "xxxxxxxxx xxxxxxxxxxx",
            "xxxxxx xxx xxxxxxxxx xxx xxxx"
        ]
    };

    // Add click event to each project card
    projectCards.forEach(card => {
        card.addEventListener('click', function(e) {
            // Don't open modal if clicking on a link
            if (e.target.tagName === 'A' || e.target.parentElement.tagName === 'A') {
                return;
            }
            
            // Get project data
            const projectImg = this.querySelector('.project-image img').src;
            const projectTitle = this.querySelector('.project-title').textContent;
            const projectCategory = this.getAttribute('data-category');
            const projectDesc = this.querySelector('.project-description').textContent;
            const projectTech = this.querySelector('.project-tech').innerHTML;
            const projectLinks = this.querySelector('.project-links').innerHTML;
            
            // Update modal content
            const modalImage = document.querySelector('.modal-image img');
            const modalTitle = document.querySelector('.modal-title');
            const modalSubtitle = document.querySelector('.modal-subtitle');
            const modalDescription = document.querySelector('.modal-description');
            const modalFeaturesList = document.querySelector('.modal-features ul');
            const modalTech = document.querySelector('.modal-tech');
            const modalLinks = document.querySelector('.modal-links');
            
            modalImage.src = projectImg;
            modalImage.alt = projectTitle;
            modalTitle.textContent = projectTitle;
            modalSubtitle.textContent = `${projectCategory.charAt(0).toUpperCase() + projectCategory.slice(1)} Application`;
            modalDescription.textContent = projectDesc;
            
            // Update features
            modalFeaturesList.innerHTML = '';
            if (projectFeatures[projectTitle]) {
                projectFeatures[projectTitle].forEach(feature => {
                    const li = document.createElement('li');
                    li.textContent = feature;
                    modalFeaturesList.appendChild(li);
                });
            }
            
            // Update tech tags
            modalTech.innerHTML = projectTech;
            
            // Update links
            modalLinks.innerHTML = projectLinks;
            
            // Show modal
            projectModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close modal when X is clicked
    if (modalClose) {
        modalClose.addEventListener('click', () => {
            projectModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    }
    
    // Close modal when clicking outside content
    if (projectModal) {
        projectModal.addEventListener('click', (e) => {
            if (e.target === projectModal) {
                projectModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    }
});
     </script>
</body>
</html>