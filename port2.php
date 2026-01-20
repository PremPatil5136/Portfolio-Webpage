<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prem Vishwanath Patil - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* portfolio */
        @import url('https://fonts.googleapis.com/css?family=Nunito:wght@200;300;400;600&display-swap');

        /* home page left side part start */
        :root{
        --yellow: #f9ca24;
        }

        *{
        font-family: 'Nunito', sans-serif;
        margin:0; 
        padding:0;
        box-sizing: border-box;
        text-decoration: none;
        outline: none; 
        border:none;
        text-transform: capitalize;
        transition: all .2s linear;
        }

        *::selection{
        background: var(--yellow);
        color:#333;
        }

        html{
        font-size: 62.5%;
        overflow-x: hidden;
        }

        html::-webkit-scrollbar{
        width:1.4rem;
        } 

        html::-webkit-scrollbar-track{
        background:#222;
        } 

        html::-webkit-scrollbar-thumb {
        background:var(--yellow);
        }

        body{
        background:#111;
        overflow-x: hidden;
        padding-left: 35rem;
        }

        header{
        position: fixed;
        top:0; left:0;
        z-index: 1000;
        height:100%;
        width:35rem;
        background:#1a1a1a;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column;
        text-align: center;
        }

        header .user img{
        height:18rem;
        width:16rem;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 1rem;
        border:.5rem solid var(--yellow);
        }

        header .user.name{
        font-size: 3.5rem;
        color:#fff;
        }

        header .user .post{
        font-size: 2rem;
        color:#eee;
        }

        header .user .name{
        margin-bottom: 1%;
        /* font-size: 2rem; */
        font-size:medium;
        color:#eee;
        }

        header .navbar{
        width:100%;
        }

        header .navbar ul{
        list-style: none;
        padding:1rem 3rem;

        }

        header .navbar ul li a{
        display: block;
        padding:1rem;
        margin:1.5rem 0;
        background:#333;
        color:#fff;
        font-size: 2rem;
        border-radius: 5rem;

        }

        header .navbar ul li a:hover{
        background: var(--yellow);
        }


        /* home page right side part start */

        .heading{
        text-align: center;
        margin: 0 6rem;
        font-size: 4rem;
        padding: .3rem;
        /* padding: 1rem; */
        border-bottom: .1rem solid #fff4;
        color: #fff;
        /* margin-top: 0rem */
        }

        .heading span{
        color: var(--yellow);
        }

        /* About Section Styles */
        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .about-text {
            font-size: 1.6rem;
            line-height: 1.8;
            margin-bottom: 3rem;
            background: #1a1a1a;
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid #424242;
            color: #eee;
            position: relative;
            overflow: hidden;
        }

        .about-text::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(249, 202, 36, 0.1), transparent);
            transition: 0.5s;
        }

        .about-text:hover::before {
            left: 100%;
        }

        /* Split Layout */
        .split-layout {
            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .left-panel {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .right-panel {
            flex: 2;
            min-width: 300px;
        }

        /* Profile Card */
        .profile-card {
            background: #1a1a1a;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border: 1px solid #424242;
            transition: all 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(255,215,0,0.2);
            border-color: var(--yellow);
        }

        .profile-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,215,0,0.03) 0%, rgba(0,0,0,0) 100%);
            z-index: 0;
        }

        .profile-content {
            position: relative;
            z-index: 1;
        }

        .profile-title {
            font-size: 2.5rem;
            color: var(--yellow);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .profile-title i {
            font-size: 2rem;
        }

        .profile-details {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .detail-label {
            font-size: 1.4rem;
            color: var(--yellow);
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .detail-value {
            font-size: 1.5rem;
            color: #eee;
        }

        /* Resume Preview */
        .resume-container {
            position: relative;
            width: 100%;
            height: 300px;
            background: #2D2D2D;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #424242;
            transition: all 0.5s ease;
            cursor: pointer;
        }

        .resume-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
            opacity: 0.85;
        }

        .resume-container:hover img {
            transform: scale(1.02);
        }

        .resume-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            transition: all 0.3s ease;
        }

        .view-resume-btn {
            background: var(--yellow);
            color: #121212;
            padding: 1rem 2rem;
            border-radius: 5px;
            font-size: 1.6rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            transition: all 0.3s ease;
            z-index: 2;
            opacity: 0.8;
        }

        .view-resume-btn:hover {
            background: #FFFFFF;
            transform: scale(1.05);
            opacity: 1;
        }

        /* Skills Section */
        .skills-section {
            background: #1a1a1a;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border: 1px solid #424242;
            transition: all 0.5s ease;
        }

        .skills-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(255,215,0,0.2);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .skill-item {
            background: #2D2D2D;
            padding: 1.2rem;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .skill-item:hover {
            background: #121212;
            border-color: var(--yellow);
            transform: translateY(-5px);
        }

        .skill-icon {
            font-size: 2.5rem;
            color: var(--yellow);
            margin-bottom: 0.8rem;
        }

        .skill-name {
            font-size: 1.4rem;
            color: #eee;
        }

        /* Experience Section */
        .experience-section {
            background: #1a1a1a;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border: 1px solid #424242;
            transition: all 0.5s ease;
        }

        .experience-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(255,215,0,0.2);
        }

        .experience-timeline {
            position: relative;
            padding-left: 3rem;
            margin-top: 2rem;
        }

        .experience-timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 1.5rem;
            height: 100%;
            width: 2px;
            background: var(--yellow);
        }

        .timeline-item {
            position: relative;
            padding-bottom: 2.5rem;
        }

        .timeline-item:last-child {
            padding-bottom: 0;
        }

        .timeline-dot {
            position: absolute;
            left: -3rem;
            top: 0;
            width: 3rem;
            height: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .timeline-dot::before {
            content: '';
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: var(--yellow);
            border: 3px solid #1a1a1a;
            box-shadow: 0 0 0 2px var(--yellow);
        }

        .timeline-content {
            background: #2D2D2D;
            padding: 1.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .timeline-content:hover {
            border-color: var(--yellow);
            transform: translateX(5px);
        }

        .timeline-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .company-logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--yellow);
        }

        .timeline-title {
            font-size: 1.8rem;
            color: var(--yellow);
            margin-bottom: 0.5rem;
        }

        .timeline-company {
            font-size: 1.5rem;
            color: #eee;
            margin-bottom: 0.5rem;
        }

        .timeline-period {
            font-size: 1.3rem;
            color: var(--yellow);
            opacity: 0.8;
            margin-bottom: 0.8rem;
        }

        .timeline-description {
            font-size: 1.4rem;
            color: #eee;
            opacity: 0.9;
            line-height: 1.6;
        }

        .collapsible-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .collapsible-content.expanded {
            max-height: 500px;
        }

        .see-more-btn {
            background: transparent;
            color: var(--yellow);
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }

        .see-more-btn:hover {
            color: #FFFFFF;
        }

        .see-more-btn i {
            transition: transform 0.3s ease;
        }

        .see-more-btn.expanded i {
            transform: rotate(180deg);
        }

        .document-preview {
            margin-top: 1rem;
            position: relative;
            cursor: pointer;
        }

        .document-preview img {
            width: 100%;
            border-radius: 5px;
            border: 1px solid #424242;
            transition: transform 0.3s ease;
            opacity: 0.85;
        }

        .document-preview:hover img {
            transform: scale(1.02);
        }

        .view-document-btn {
            background: var(--yellow);
            color: #121212;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-size: 1.3rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 0.5rem;
            transition: all 0.3s ease;
        }

        .view-document-btn:hover {
            background: #FFFFFF;
        }

        /* Education Section */
        .education-section {
            background: #1a1a1a;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border: 1px solid #424242;
            transition: all 0.5s ease;
        }

        .education-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(255,215,0,0.2);
        }

        .education-item {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #424242;
        }

        .education-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .education-logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--yellow);
        }

        .education-details {
            flex: 1;
        }

        .education-title {
            font-size: 1.8rem;
            color: var(--yellow);
            margin-bottom: 0.5rem;
        }

        .education-institution {
            font-size: 1.5rem;
            color: #eee;
            margin-bottom: 0.5rem;
        }

        .education-period {
            font-size: 1.3rem;
            color: var(--yellow);
            opacity: 0.8;
            margin-bottom: 0.8rem;
        }

        .education-grade {
            font-size: 1.4rem;
            color: #eee;
            margin-bottom: 0.8rem;
        }

        .education-activities {
            font-size: 1.3rem;
            color: #eee;
            opacity: 0.8;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .education-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .skill-tag {
            background: #2D2D2D;
            color: var(--yellow);
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 1.2rem;
        }

        /* Publications Section */
        .publications-section {
            background: #1a1a1a;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border: 1px solid #424242;
            transition: all 0.5s ease;
        }

        .publications-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(255,215,0,0.2);
        }

        .publication-item {
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #424242;
        }

        .publication-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .publication-title {
            font-size: 1.8rem;
            color: var(--yellow);
            margin-bottom: 0.5rem;
        }

        .publication-journal {
            font-size: 1.5rem;
            color: #eee;
            margin-bottom: 0.5rem;
        }

        .publication-date {
            font-size: 1.3rem;
            color: var(--yellow);
            opacity: 0.8;
            margin-bottom: 0.8rem;
        }

        .publication-abstract {
            font-size: 1.4rem;
            color: #eee;
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        /* Modal Styles */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .modal-content {
            width: 90%;
            max-width: 900px;
            height: 90vh;
            background: #1a1a1a;
            border-radius: 10px;
            border: 1px solid var(--yellow);
            overflow: hidden;
            position: relative;
        }

        .modal-iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .close-modal {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 40px;
            height: 40px;
            background: var(--yellow);
            color: #121212;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.5rem;
            z-index: 10;
            transition: all 0.3s ease;
        }

        .close-modal:hover {
            transform: rotate(90deg);
            background: #FFFFFF;
        }

        /* Enhanced Zoom Modal */
        .zoom-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1001;
        }

        .zoom-modal-content {
            max-width: 90%;
            max-height: 90vh;
            position: relative;
            background: #1a1a1a;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid var(--yellow);
        }

        .zoom-controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .zoom-btn {
            background: var(--yellow);
            color: #121212;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: none;
            font-size: 1.6rem;
            transition: all 0.3s ease;
        }

        .zoom-btn:hover {
            background: #FFFFFF;
            transform: scale(1.1);
        }

        #zoomedImage {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
            transition: transform 0.3s ease;
            transform-origin: center center;
            border: 2px solid var(--yellow);
            border-radius: 5px;
        }

        .close-zoom {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #FFFFFF;
            font-size: 2rem;
            cursor: pointer;
            background: var(--yellow);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 11;
        }

        /* Responsive Design */
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

        /* Animation Section */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }
         
        :root {
            --bg-color: #1f242d;
            --second-bg-color:#323946;
            --text-color:#fff;
            --main-color: yellow;
        }
         
        html {
            font-size: 62.5%;
            overflow-x: hidden;
        }
         
        body {
            background-color: #000000;
            color: var(--text-color);
        }
        section{
            min-height: 100vh;
            padding: 10rem 9% 2rem;
        }
        .home{
            position: relative;
            width: 100%;
            height: 100vh;
            display:flex;
            justify-content: center;
            align-items: center;
            padding: 70px 40px 0px;
        }
        .home-img img{
            width: 26vw;
            height: 40vw;
            opacity: 0;
            animation: zoomIn 1s ease forwards, floatImage 4s ease-in-out infinite;
            animation-delay: 2s 3s;
        }
        .home-content h4{
            font-size: 3.2rem;
            font-weight: 700;
            opacity: 0;
            animation: slideBottom 1s ease forwards;
            animation-delay: .7s;
        }
        .home-content h4:nth-of-type(2){
            margin-bottom: 2rem;
            animation: slideTop 1s ease forwards;
            animation-delay: .7s;
        }
        span{
            color: var(--main-color);
        }
        .home-content h1{
            font-family: 'Nunito', sans-serif;
            font-size: 5.6rem;
            font-weight: 700;
            margin: -3px 0;
            opacity: 0;
            animation: slideRight 1s ease forwards;
            animation-delay: 1;
        }
           
        .home-content p {
            font-size: 1.6rem;
            opacity: 0;
            animation: slideleft 1s ease forwards;
            animation-delay: 1s;
        }
        
        .social-media a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 4rem;
            height: 4rem;
            background: transparent;
            border: .2rem solid var(--main-color);
            border-radius: 50%;
            font-size: 2rem;
            color: var(--main-color);
            margin: 3rem 1.5rem 3rem 0;
            transition: .5s ease;
            opacity: 0;
            animation: slideleft 1s ease forwards;
            animation-delay: calc(.2s * var(--i));
        }
           
        .social-media a:hover {
            background: var(--main-color);
            color: var(--second-bg-color);
            box-shadow: 0 0 1rem var(--main-color);
        }
           
        .btn {
            display: inline-block;
            padding: 1rem 2.8rem;
            border-radius: 4rem;
            box-shadow: 0 0 1rem var(--main-color);
            font-size: 1.6rem;
            color: whitesmoke;
            letter-spacing: .1rem;
            font-weight: 600;
            transition: .5s ease;
            opacity: 0;
            animation: slideTop 1s ease forwards;
            animation-delay: 2s;
        }

        /* Project Section */
        .portfolio{
            background: var(--second-bg-color);
        }
        .services .heading{
            margin-bottom: 5%;
        }
        .portfolio h2{
            margin-bottom: 4rem;
        }
        .portfolio-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            align-items: center;
            gap: 2.5rem;
        }
        .portfolio-container .portfolio-box{
            position: relative;
            border-radius: 2rem;
            box-shadow: 0 1rem var(--bg-color);
            overflow: hidden; 
            display: flex;
        }
        .portfolio-box img{    
            width: 130%;
            height: 100%;
            transition: .5s ease;
        }
        .portfolio-box:hover img{
            transform: scale(1.1);
        }
        .portfolio-box .portfolio-layer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, .1), #ffff00);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 0 4rem;
            transform: translateY(100%);
            transition: .5s ease;
        }
        .portfolio-box:hover .portfolio-layer{
            transform: translateY(0);
        }

        .portfolio-layer h4 {
            font-size: 2.5rem;
        }
        .portfolio-layer p {
            font-size: 1.2rem;
            margin: .3rem 0 1rem;
        }
            
        .portfolio-layer a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 5rem;
            height: 5rem;
            background: var(--text-color);
            border-radius: 50%;
        }
        .portfolio-layer a i{
            font-size: 2rem;
            color: var(--second-bg-color);
        }

        /* KEYFRAMES ANIMATION */
        @keyframes slideRight{
            0%{
                transform: translateX(-100px);
                opacity: 0;
            }
            100%{
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes slideleft{
            0%{
                transform: translateX(100px);
                opacity: 0;
            }
            100%{
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes slideTop{
            0%{
                transform: translateY(100px);
                opacity: 0;
            }
            100%{
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes slideBottom{
            0%{
                transform: translateY(-100px);
                opacity: 0;
            }
            100%{
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes floatImage{
            0%{
                transform: translateY(0);
                opacity: 1;
            }
            50%{
                transform: translateY(-24px);
                opacity: 0;
            }
            100%{
                transform: translateY(0);
                opacity: 1;
            }
        }





        /* Responsive Design */
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
    main, #about, .content-area {
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
        backdrop-filter: blur(15px);
        transition: all 0.4s ease;
        z-index: 999;
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
                <li><a href="#about">about</a></li>
                <li><a href="#education">education</a></li>
                <li><a href="port3.php">certificates</a></li>
                <li><a href="port4.php">services</a></li>
                <li><a href="port5.php">contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- About Section -->
    <section class="about" id="about">
        <h1 class="heading"> <span>about</span> me </h1><hr><br><br>
        
        <div class="about-content">
            <div class="about-text">
                <p>Currently navigating the exciting world of Artificial Intelligence and Machine Learning as a 5th-semester student. I'm passionate about learning and eager to explore the diverse applications of AI. Open to connecting with professionals and fellow students to expand my knowledge and network.</p>
            </div>
            
            <div class="split-layout">
                <!-- Left Panel -->
                <div class="left-panel">
                    <!-- Profile Card -->
                    <div class="profile-card">
                        <div class="profile-content">
                            <h2 class="profile-title"><i class="fas fa-user"></i> Profile</h2>
                            <div class="profile-details">
                                <span class="detail-label">Name</span>
                                <span class="detail-value">Prem Vishwanath Patil</span>
                                
                                <span class="detail-label">Age</span>
                                <span class="detail-value">20</span>
                                
                                <span class="detail-label">Qualification</span>
                                <span class="detail-value">Computer Engineering</span>
                                
                                <span class="detail-label">Role</span>
                                <span class="detail-value">Software Developer</span>
                                
                                <span class="detail-label">Languages</span>
                                <span class="detail-value">English, Hindi, Marathi</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Resume Preview Section with Zoom Feature -->
                    <div class="profile-card">
                        <h2 class="profile-title"><i class="fas fa-file-alt"></i> Resume</h2>
                        <div class="resume-container" onclick="openZoomModal('#')">
                            <img src="img/122f20558c4426d7aa712d5e88261d86.jpg" alt="Resume Preview" style="width:100%;height:100%;object-fit:cover;">
                            <div class="resume-overlay">
                                <button class="view-resume-btn" onclick="event.stopPropagation(); openZoomModal('assets/img/Resume.jpg')">
                                    <i class="fas fa-eye"></i> View Resume
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Skills Section -->
                    <div class="skills-section">
                        <h2 class="profile-title"><i class="fas fa-code"></i> Skills</h2>
                        <div class="skills-grid">
                            <div class="skill-item">
                                <div class="skill-icon"><i class="fab fa-python"></i></div>
                                <div class="skill-name">Python</div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-icon"><i class="fas fa-code"></i></div>
                                <div class="skill-name">Swift</div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-icon"><i class="fas fa-database"></i></div>
                                <div class="skill-name">MongoDB</div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-icon"><i class="fas fa-file-excel"></i></div>
                                <div class="skill-name">Excel</div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-icon"><i class="fab fa-aws"></i></div>
                                <div class="skill-name">AWS</div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-icon"><i class="fas fa-cloud"></i></div>
                                <div class="skill-name">Cloud</div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-icon"><i class="fab fa-html5"></i></div>
                                <div class="skill-name">HTML/CSS</div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-icon"><i class="fab fa-js"></i></div>
                                <div class="skill-name">JavaScript</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Panel - Experience -->
                <div class="right-panel">
                    <div class="experience-section" id="experience">
                        <h2 class="profile-title"><i class="fas fa-briefcase"></i> Experience</h2>
                        
                        <div class="experience-timeline">
                            <!-- Experience Item 1 - Expanded by default -->
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-header">
                                        <img src="assets/logo/latino.png" alt="ULSA Logo" class="company-logo">
                                        <div>
                                            <h3 class="timeline-title">Cloud Mastery Training</h3>
                                            <p class="timeline-company">United Latino Students Association · Training</p>
                                            <p class="timeline-period">Jun 2025 - Jul 2025 · 2 mos · Remote</p>
                                        </div>
                                    </div>
                                    <div class="collapsible-content expanded" id="exp1-content">
                                        <p class="timeline-description">
                                            Completed intensive cloud computing training covering AWS services including EC2, S3, Lambda, RDS, etc. Gained hands-on experience with cloud infrastructure deployment and management.
                                        </p>
                                        <div class="document-preview" onclick="openZoomModal('assets/img/Cloud Computing Internship_page-0001.jpg')">
                                            <img src="assets/img/Cloud Computing Internship_page-0001.jpg" alt="Certificate Preview">
                                        </div>
                                        <button class="view-document-btn" onclick="openModal('assets/doc/Cloud Computing Internship.pdf')">
                                            <i class="fas fa-file-pdf"></i> View Certificate
                                        </button>
                                    </div>
                                    <button class="see-more-btn expanded" onclick="toggleCollapse('exp1-content')">
                                        <i class="fas fa-chevron-up"></i> See less
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Experience Item 2 -->
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-header">
                                        <img src="assets/logo/lets upgrade.png" alt="LetsUpgrade Logo" class="company-logo">
                                        <div>
                                            <h3 class="timeline-title">Student Ambassador</h3>
                                            <p class="timeline-company">LetsUpgrade · Ambassador</p>
                                            <p class="timeline-period">Jun 2025 · 1 mos · Remote</p>
                                        </div>
                                    </div>
                                    <div class="collapsible-content collapsed" id="exp2-content">
                                        <p class="timeline-description">
                                            Represented the organization's mission to make quality tech education accessible. Engaged with tech community and promoted learning initiatives.
                                        </p>
                                        <div class="document-preview" onclick="openZoomModal('assets/img/Lets Upgrade Certificate_page-0001.jpg')">
                                            <img src="assets/img/Lets Upgrade Certificate_page-0001.jpg" alt="Offer Letter Preview">
                                        </div>
                                        <button class="view-document-btn" onclick="openModal('assets/doc/Appointment Letter - Lets Upgrade.pdf')">
                                            <i class="fas fa-file-pdf"></i> View Offer Letter
                                        </button>
                                    </div>
                                    <button class="see-more-btn" onclick="toggleCollapse('exp2-content')">
                                        <i class="fas fa-chevron-down"></i> See more
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Experience Item 3 -->
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-header">
                                        <img src="assets/logo/pregerd.png" alt="LaunchED Global Logo" class="company-logo">
                                        <div>
                                            <h3 class="timeline-title">Brand Executive</h3>
                                            <p class="timeline-company">Pregrad · Part-time</p>
                                            <p class="timeline-period">Jan 2025 - Feb 2025 · 2 mos · Remote</p>
                                        </div>
                                    </div>
                                    <div class="collapsible-content collapsed" id="exp3-content">
                                        <p class="timeline-description">
                                            Represented the brand at college, contributed to digital marketing, and expanded awareness of internship programs. Gained experience in brand management and marketing.
                                        </p>
                                        <div class="document-preview" onclick="openZoomModal('assets/img/Pregerd.jpg')">
                                            <img src="assets/img/Pregerd.jpg" alt="Certificate Preview">
                                        </div>
                                        <button class="view-document-btn" onclick="openModal('assets/doc/Offer Letter -  Prem Vishwanath Patil Pregerd.pdf')">
                                            <i class="fas fa-file-pdf"></i> View Offer Letter
                                        </button>
                                    </div>
                                    <button class="see-more-btn" onclick="toggleCollapse('exp3-content')">
                                        <i class="fas fa-chevron-down"></i> See more
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Experience Item 4 -->
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-header">
                                        <img src="assets/logo/dolphin labs.png" alt="Dolphins Labs Logo" class="company-logo">
                                        <div>
                                            <h3 class="timeline-title">Project Intern</h3>
                                            <p class="timeline-company">Dolphins Labs · Internship</p>
                                            <p class="timeline-period">Jun 2023 - Jul 2023 · 2 mos · On-site</p>
                                        </div>
                                    </div>
                                    <div class="collapsible-content collapsed" id="exp4-content">
                                        <p class="timeline-description">
                                            Developed IoT projects including a smoke and obstacle detection system with Arduino and responsive web interface for real-time data monitoring.
                                        </p>
                                        <div class="document-preview" onclick="openZoomModal('assets/img/dolphin labs certificate.jpg')">
                                            <img src="assets/img/dolphin labs certificate.jpg" alt="Certificate Preview">
                                        </div>
                                        <button class="view-document-btn" onclick="openModal('assets/doc/dolphin labs certificate.pdf')">
                                            <i class="fas fa-file-pdf"></i> View Certificate
                                        </button>
                                    </div>
                                    <button class="see-more-btn" onclick="toggleCollapse('exp4-content')">
                                        <i class="fas fa-chevron-down"></i> See more
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="education" id="education">
        <h1 class="heading">my <span>education</span></h1>
        
        <div class="education-section">
            <!-- Education Item 1 -->
            <div class="education-item">
                <img src="assets/logo/jspm 1.jpg" alt="JSPM RSCOE Logo" class="education-logo">
                <div class="education-details">
                    <h3 class="education-title">Bachelor of Technology (BTech), Computer Engineering</h3>
                    <p class="education-institution">JSPM's Rajarshi Shahu College of Engineering</p>
                    <p class="education-period">Aug 2024 - Jul 2027</p>
                    <p class="education-grade">Grade: Persuing</p>
                    <p class="education-activities">
                        <strong>Activities and societies:</strong> Part of two official communities:<br>
                        1️⃣ JSPM RSCOE Magazine chapter Editing team<br>
                        2️⃣ ACM Chapter Designing team
                    </p>
                    <div class="education-skills">
                        <span class="skill-tag">Problem Solving</span>
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">Team Leadership</span>
                        <span class="skill-tag">Data Structures</span>
                        <span class="skill-tag">Full-Stack Development</span>
                    </div>
                    <div class="document-preview" onclick="openZoomModal('#')">
                        <img src="assets/img/certificate.jpg" width="16" height="350" alt="Degree Preview">
                    </div>
                    <button class="view-document-btn" onclick="openModal('degree.pdf')">
                        <i class="fas fa-file-pdf"></i> View Degree
                    </button>
                </div>
            </div>
            
            <!-- Education Item 2 -->
            <div class="education-item">
                <img src="assets/logo/jspm 2.jpg" alt="JSPM RSCOE Logo" class="education-logo">
                <div class="education-details">
                    <h3 class="education-title">Diploma of Education, Computer Engineering</h3>
                    <p class="education-institution">JSPM's Rajarshi Shahu College of Engineering</p>
                    <p class="education-period">Mar 2021 - May 2024</p>
                    <p class="education-grade">Grade: 87%</p>
                    <p class="education-activities">
                        <strong>Activities and societies:</strong> Computer Engineering Students Association group Technical member
                    </p>
                    <div class="education-skills">
                        <span class="skill-tag">Problem Solving</span>
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">Team Leadership</span>
                        <span class="skill-tag">Data Structures</span>
                        <span class="skill-tag">Full-Stack Development</span>
                    </div>
                    <div class="document-preview" onclick="openZoomModal('assets/img/msbte diploma passout.jpg')">
                        <img src="assets/img/certificate.jpg" width="16" height="350" alt="Diploma Preview">
                    </div>
                    <button class="view-document-btn" onclick="openModal('assets/doc/diploma passout.pdf')">
                        <i class="fas fa-file-pdf"></i> View Diploma
                    </button>
                </div>
            </div>
            
            <!-- Education Item 3 -->
            <div class="education-item">
                <img src="assets/logo/babys-school.jpg" alt="Baby's English School Logo" class="education-logo">
                <div class="education-details">
                    <h3 class="education-title">10th SSC</h3>
                    <p class="education-institution">Baby's English High School</p>
                    <p class="education-period">Jul 2011 - Aug 2021</p>
                    <p class="education-grade">Grade: 86.60%</p>
                    <p class="education-activities">
                        <strong>Skills:</strong> Stock Management
                    </p>
                    <div class="document-preview" onclick="openZoomModal('assets/img/10th.jpg')">
                        <img src="assets/img/certificate.jpg" width="16" height="350" alt="SSC Certificate Preview">
                    </div>
                    <button class="view-document-btn" onclick="openModal('assets/doc/10th.pdf')">
                        <i class="fas fa-file-pdf"></i> View Certificate
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Publications Section -->
    <section class="publications" id="publications">
        <h1 class="heading">my <span>publications</span></h1>
        
        <div class="publications-section">
            <!-- Publication Item 1 -->
            <div class="publication-item">
                <h3 class="publication-title">TASK BIDDER</h3>
                <p class="publication-journal">International Research Journal of Modernization in Engineering Technology & Science</p>
                <p class="publication-date">Jan 1, 2024</p>
                <div class="collapsible-content collapsed" id="pub1-content">
                    <p class="publication-abstract">
                        <strong>ABSTRACT:</strong><br>
                        This freelance marketplace project offers a user-friendly web platform where freelancers create profiles, post jobs, and receive bids. Integration of HTML, CSS, JavaScript, PHP, and SQL Server ensures a seamless experience. The system emphasizes direct communication through an integrated chat section. With a focus on simplicity, it streamlines task allocation and enhances collaboration. Overall, it provides an efficient space for connecting freelancers with job opportunities.
                    </p>
                    <div class="document-preview" onclick="openZoomModal('assets/img/IEEE Paper Publishing_page-0001.jpg')">
                        <img src="assets/img/certificate.jpg" width="16" height="130" alt="Publication Preview">
                    </div>
                    <button class="view-document-btn" onclick="openModal('assets/doc/TaskBidder_IRJMETS.pdf')">
                        <i class="fas fa-file-pdf"></i> View Publication
                    </button>
                </div>
                <button class="see-more-btn" onclick="toggleCollapse('pub1-content')">
                    <i class="fas fa-chevron-down"></i> Show Abstract
                </button>
            </div>
            
            <!-- Publication Item 2 -->
            <div class="publication-item">
                <h3 class="publication-title">Autonomous Vehicles</h3>
                <p class="publication-journal">Technical Research Paper</p>
                <p class="publication-date">2023</p>
                <div class="collapsible-content collapsed" id="pub2-content">
                    <p class="publication-abstract">
                        <strong>ABSTRACT:</strong><br>
                        Autonomous vehicles are a promising technology that could revolutionize the transportation industry. These vehicles, also known as self-driving cars, are equipped with sensors, cameras, and artificial intelligence algorithms that allow them to operate without human intervention. Autonomous vehicles have the potential to reduce accidents caused by human mistake, increase mobility for disabled and elderly people, and reduce traffic congestion. However, there are still significant challenges that must be addressed before autonomous vehicles can become widely adopted. These challenges include technical limitations, regulatory issues, and ethical considerations. This paper will analyze the latest developments and challenges of autonomous vehicles, including safety, regulations, and ethical considerations. It will also discuss the potential benefits and risks of this technology and its impact on the transportation industry and society.
                    </p>
                    <div class="document-preview" onclick="openZoomModal('#')">
                        <img src="assets/img/certificate.jpg" width="16" height="130" alt="Publication Preview">
                    </div>
                    <button class="view-document-btn" onclick="openModal('assets/doc/Autonomous Vehicle.pdf')">
                        <i class="fas fa-file-pdf"></i> View Paper
                    </button>
                </div>
                <button class="see-more-btn" onclick="toggleCollapse('pub2-content')">
                    <i class="fas fa-chevron-down"></i> Show Abstract
                </button>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal" id="resumeModal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <iframe class="modal-iframe" id="pdfViewer" src=""></iframe>
        </div>
    </div>

    <!-- Enhanced Zoom Modal -->
    <div class="zoom-modal" id="zoomModal">
        <div class="zoom-modal-content">
            <span class="close-zoom" onclick="closeZoomModal()">&times;</span>
            <div class="zoom-controls">
                <button class="zoom-btn" onclick="zoomIn()"><i class="fas fa-search-plus"></i></button>
                <button class="zoom-btn" onclick="zoomOut()"><i class="fas fa-search-minus"></i></button>
                <button class="zoom-btn" onclick="resetZoom()"><i class="fas fa-expand"></i></button>
            </div>
            <img id="zoomedImage" src="" alt="Zoomed Document">
        </div>
    </div>

    <script>
        // Modal functionality
        function openModal(pdfUrl) {
            const modal = document.getElementById('resumeModal');
            const pdfViewer = document.getElementById('pdfViewer');
            
            pdfViewer.src = pdfUrl + '#view=fitH';
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
        
        function closeModal() {
            const modal = document.getElementById('resumeModal');
            const pdfViewer = document.getElementById('pdfViewer');
            
            pdfViewer.src = '';
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        
        // Enhanced Zoom modal functionality
        let currentScale = 1;
        const minScale = 0.5;
        const maxScale = 3;
        const scaleStep = 0.25;
        
        function openZoomModal(imageUrl) {
            const zoomModal = document.getElementById('zoomModal');
            const zoomedImage = document.getElementById('zoomedImage');
            
            // Create a new image to check if it loads successfully
            const testImage = new Image();
            testImage.onload = function() {
                zoomedImage.src = imageUrl;
                currentScale = 1; // Reset zoom level
                zoomedImage.style.transform = `scale(${currentScale})`;
                zoomModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            };
            testImage.onerror = function() {
                alert('Error loading image. Please check the file path.');
            };
            testImage.src = imageUrl;
        }
        
        function closeZoomModal() {
            const zoomModal = document.getElementById('zoomModal');
            zoomModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        
        function zoomIn() {
            if (currentScale < maxScale) {
                currentScale += scaleStep;
                document.getElementById('zoomedImage').style.transform = `scale(${currentScale})`;
            }
        }
        
        function zoomOut() {
            if (currentScale > minScale) {
                currentScale -= scaleStep;
                document.getElementById('zoomedImage').style.transform = `scale(${currentScale})`;
            }
        }
        
        function resetZoom() {
            currentScale = 1;
            document.getElementById('zoomedImage').style.transform = `scale(${currentScale})`;
        }
        
        // See more functionality
        function toggleCollapse(contentId) {
            const content = document.getElementById(contentId);
            const button = content.parentElement.querySelector('.see-more-btn');
            
            content.classList.toggle('collapsed');
            content.classList.toggle('expanded');
            button.classList.toggle('expanded');
            
            // Update icon based on state
            const icon = button.querySelector('i');
            if (content.classList.contains('expanded')) {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
                content.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            } else {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            }
        }
        
        // Close modal when clicking outside content
        window.onclick = function(event) {
            const modal = document.getElementById('resumeModal');
            if (event.target == modal) {
                closeModal();
            }
            
            const zoomModal = document.getElementById('zoomModal');
            if (event.target == zoomModal) {
                closeZoomModal();
            }
        }
        
        // Highlight active nav link
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.navbar ul li a');
            const sections = document.querySelectorAll('section');
            
            window.addEventListener('scroll', function() {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (pageYOffset >= (sectionTop - 300)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });
            
            // Animation on scroll
            const timelineItems = document.querySelectorAll('.timeline-content');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateX(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            timelineItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                item.style.transition = 'all 0.5s ease';
                observer.observe(item);
            });
        });
    </script>
</body>
</html>