<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TilvoroToday - Professional Interior Design Solutions</title>
    <meta name="description" content="TilvoroToday offers comprehensive interior design services for residential and commercial spaces. Transform your environment with our expert design team and innovative solutions.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .nav-container-x7k9 {
            background: #2c3e50;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-wrapper-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q8w3 {
            color: #ecf0f1;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-r5t1 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-b9n6 {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav-link-b9n6:hover {
            color: #3498db;
        }

        .hero-section-z3x7 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
        }

        .hero-content-l8k4 {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .hero-title-d2m9 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 300;
        }

        .hero-subtitle-f6j1 {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-h4v8 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-h4v8:hover {
            background: #c0392b;
        }

        .services-section-a9p5 {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .container-w2e7 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title-k3n8 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .services-grid-y7u4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card-t5r2 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .service-card-t5r2:hover {
            transform: translateY(-5px);
        }

        .service-icon-n6m1 {
            font-size: 3rem;
            color: #3498db;
            margin-bottom: 1rem;
        }

        .about-section-g8h3 {
            padding: 80px 0;
            background: white;
        }

        .about-content-i4j9 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-o1s6 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-p7q2 {
            text-align: center;
        }

        .about-img-x9c4 {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .history-section-v3b8 {
            padding: 80px 0;
            background: #34495e;
            color: white;
        }

        .timeline-container-e5f1 {
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-u2d7 {
            display: flex;
            margin-bottom: 2rem;
            align-items: center;
        }

        .timeline-year-s4g9 {
            background: #e74c3c;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            margin-right: 2rem;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
        }

        .timeline-content-l6h2 {
            flex: 1;
        }

        .portfolio-section-c8v5 {
            padding: 80px 0;
            background: #ecf0f1;
        }

        .portfolio-grid-m3k7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .portfolio-item-n9j4 {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            height: 250px;
        }

        .portfolio-img-r1t8 {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .portfolio-item-n9j4:hover .portfolio-img-r1t8 {
            transform: scale(1.1);
        }

        .reviews-section-q5w9 {
            padding: 80px 0;
            background: white;
        }

        .reviews-grid-f2x6 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .review-card-h7y3 {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            border-left: 4px solid #3498db;
        }

        .review-text-a4z1 {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .reviewer-name-d8k5 {
            font-weight: bold;
            color: #2c3e50;
        }

        .contact-section-b6n2 {
            padding: 80px 0;
            background: #2c3e50;
            color: white;
        }

        .contact-grid-j9m7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .contact-item-p3l4 {
            text-align: center;
        }

        .contact-icon-x6r8 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .phone-link-z2s9 {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .footer-section-u5i1 {
            background: #1a252f;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .modal-overlay-k8p6 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-v4q3 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            color: #333;
        }

        .modal-close-g7t2 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .expertise-section-w9e4 {
            padding: 80px 0;
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .expertise-grid-l3h6 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .expertise-item-s8d1 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .process-section-m2y7 {
            padding: 80px 0;
            background: #f1c40f;
            color: #2c3e50;
        }

        .process-steps-n5k9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .process-step-r6j3 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            position: relative;
        }

        .step-number-t4u8 {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: #e74c3c;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .nav-menu-r5t1 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-d2m9 {
                font-size: 2rem;
            }
            
            .about-content-i4j9 {
                grid-template-columns: 1fr;
            }
            
            .timeline-item-u2d7 {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-s4g9 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%33%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%37%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%30%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%30%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%30%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m4p2">
            <a href="#home" class="logo-brand-q8w3">TilvoroToday</a>
            <ul class="nav-menu-r5t1">
                <li><a href="#home" class="nav-link-b9n6">Home</a></li>
                <li><a href="#services" class="nav-link-b9n6">Services</a></li>
                <li><a href="#about" class="nav-link-b9n6">About</a></li>
                <li><a href="#history" class="nav-link-b9n6">History</a></li>
                <li><a href="#portfolio" class="nav-link-b9n6">Portfolio</a></li>
                <li><a href="#expertise" class="nav-link-b9n6">Expertise</a></li>
                <li><a href="#process" class="nav-link-b9n6">Process</a></li>
                <li><a href="#reviews" class="nav-link-b9n6">Reviews</a></li>
                <li><a href="#contact" class="nav-link-b9n6">Contact</a></li>
                <li><a href="#" class="nav-link-b9n6" onclick="openModal('privacy')">Privacy</a></li>
                <li><a href="#" class="nav-link-b9n6" onclick="openModal('terms')">Terms</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-z3x7">
        <div class="hero-content-l8k4">
            <h1 class="hero-title-d2m9">Transform Your Space with TilvoroToday</h1>
            <p class="hero-subtitle-f6j1">Creating beautiful, functional interiors that reflect your personality and enhance your lifestyle through innovative design solutions.</p>
            <a href="#contact" class="cta-button-h4v8">Start Your Project</a>
        </div>
    </section>

    <section id="services" class="services-section-a9p5">
        <div class="container-w2e7">
            <h2 class="section-title-k3n8">Our Services</h2>
            <div class="services-grid-y7u4">
                <div class="service-card-t5r2">
                    <div class="service-icon-n6m1">🏠</div>
                    <h3>Residential Design</h3>
                    <p>Complete home makeovers, room renovations, and space planning for comfortable living environments that suit your family's needs.</p>
                </div>
                <div class="service-card-t5r2">
                    <div class="service-icon-n6m1">🏢</div>
                    <h3>Commercial Spaces</h3>
                    <p>Office design, retail spaces, and hospitality interiors that create productive and welcoming environments for businesses.</p>
                </div>
                <div class="service-card-t5r2">
                    <div class="service-icon-n6m1">🎨</div>
                    <h3>Color Consultation</h3>
                    <p>Expert color schemes and palette selection to create the perfect mood and atmosphere in any space.</p>
                </div>
                <div class="service-card-t5r2">
                    <div class="service-icon-n6m1">🪑</div>
                    <h3>Furniture Selection</h3>
                    <p>Curated furniture pieces and custom solutions that maximize functionality while maintaining aesthetic appeal.</p>
                </div>
                <div class="service-card-t5r2">
                    <div class="service-icon-n6m1">💡</div>
                    <h3>Lighting Design</h3>
                    <p>Strategic lighting solutions that enhance ambiance and functionality throughout your space.</p>
                </div>
                <div class="service-card-t5r2">
                    <div class="service-icon-n6m1">📐</div>
                    <h3>Space Planning</h3>
                    <p>Optimal layout design and space utilization to make the most of your available area.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-g8h3">
        <div class="container-w2e7">
            <h2 class="section-title-k3n8">About TilvoroToday</h2>
            <div class="about-content-i4j9">
                <div class="about-text-o1s6">
                    <p>TilvoroToday has been transforming spaces and lives through thoughtful interior design for over a decade. Our team of experienced designers combines creativity with functionality to create environments that truly reflect our clients' personalities and lifestyles.</p>
                    
                    <p>We believe that great design should be accessible to everyone. Whether you're looking to refresh a single room or completely renovate your entire home, we work closely with you to understand your vision and bring it to life within your budget.</p>
                    
                    <p>Our approach focuses on sustainable design practices, quality materials, and timeless aesthetics that will serve you well for years to come. We pride ourselves on our attention to detail and commitment to exceeding client expectations.</p>
                </div>
                <div class="about-image-p7q2">
                    <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg" alt="Interior Design Team" class="about-img-x9c4">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-section-v3b8">
        <div class="container-w2e7">
            <h2 class="section-title-k3n8">Our Journey</h2>
            <div class="timeline-container-e5f1">
                <div class="timeline-item-u2d7">
                    <div class="timeline-year-s4g9">2012</div>
                    <div class="timeline-content-l6h2">
                        <h3>Company Founded</h3>
                        <p>TilvoroToday was established with a vision to make beautiful interior design accessible to homeowners and businesses alike.</p>
                    </div>
                </div>
                <div class="timeline-item-u2d7">
                    <div class="timeline-year-s4g9">2015</div>
                    <div class="timeline-content-l6h2">
                        <h3>Team Expansion</h3>
                        <p>We grew our team to include specialists in commercial design, sustainable materials, and project management.</p>
                    </div>
                </div>
                <div class="timeline-item-u2d7">
                    <div class="timeline-year-s4g9">2018</div>
                    <div class="timeline-content-l6h2">
                        <h3>Award Recognition</h3>
                        <p>Received the Regional Interior Design Excellence Award for our innovative approach to small space solutions.</p>
                    </div>
                </div>
                <div class="timeline-item-u2d7">
                    <div class="timeline-year-s4g9">2021</div>
                    <div class="timeline-content-l6h2">
                        <h3>Digital Innovation</h3>
                        <p>Launched our virtual design consultation service, making our expertise available to clients nationwide.</p>
                    </div>
                </div>
                <div class="timeline-item-u2d7">
                    <div class="timeline-year-s4g9">2024</div>
                    <div class="timeline-content-l6h2">
                        <h3>Sustainable Focus</h3>
                        <p>Committed to eco-friendly design practices and partnerships with sustainable furniture manufacturers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio-section-c8v5">
        <div class="container-w2e7">
            <h2 class="section-title-k3n8">Our Work</h2>
            <div class="portfolio-grid-m3k7">
                <div class="portfolio-item-n9j4">
                    <img src="https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg" alt="Modern Living Room" class="portfolio-img-r1t8">
                </div>
                <div class="portfolio-item-n9j4">
                    <img src="https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg" alt="Contemporary Kitchen" class="portfolio-img-r1t8">
                </div>
                <div class="portfolio-item-n9j4">
                    <img src="https://images.pexels.com/photos/1571467/pexels-photo-1571467.jpeg" alt="Elegant Bedroom" class="portfolio-img-r1t8">
                </div>
                <div class="portfolio-item-n9j4">
                    <img src="https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg" alt="Office Space" class="portfolio-img-r1t8">
                </div>
                <div class="portfolio-item-n9j4">
                    <img src="https://images.pexels.com/photos/1571458/pexels-photo-1571458.jpeg" alt="Dining Area" class="portfolio-img-r1t8">
                </div>
                <div class="portfolio-item-n9j4">
                    <img src="https://images.pexels.com/photos/1571471/pexels-photo-1571471.jpeg" alt="Bathroom Design" class="portfolio-img-r1t8">
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="expertise-section-w9e4">
        <div class="container-w2e7">
            <h2 class="section-title-k3n8">Areas of Expertise</h2>
            <div class="expertise-grid-l3h6">
                <div class="expertise-item-s8d1">
                    <h3>Small Space Solutions</h3>
                    <p>Maximizing functionality in compact living areas through clever storage and multi-purpose furniture.</p>
                </div>
                <div class="expertise-item-s8d1">
                    <h3>Open Floor Plans</h3>
                    <p>Creating defined spaces within open layouts while maintaining flow and natural light.</p>
                </div>
                <div class="expertise-item-s8d1">
                    <h3>Sustainable Design</h3>
                    <p>Incorporating eco-friendly materials and energy-efficient solutions into beautiful designs.</p>
                </div>
                <div class="expertise-item-s8d1">
                    <h3>Universal Design</h3>
                    <p>Creating accessible spaces that work for people of all ages and abilities.</p>
                </div>
                <div class="expertise-item-s8d1">
                    <h3>Smart Home Integration</h3>
                    <p>Seamlessly incorporating technology into design for enhanced comfort and convenience.</p>
                </div>
                <div class="expertise-item-s8d1">
                    <h3>Biophilic Design</h3>
                    <p>Bringing nature indoors through plants, natural materials, and organic forms.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-m2y7">
        <div class="container-w2e7">
            <h2 class="section-title-k3n8">Our Design Process</h2>
            <div class="process-steps-n5k9">
                <div class="process-step-r6j3">
                    <div class="step-number-t4u8">1</div>
                    <h3>Initial Consultation</h3>
                    <p>We meet with you to understand your vision, needs, budget, and timeline for the project.</p>
                </div>
                <div class="process-step-r6j3">
                    <div class="step-number-t4u8">2</div>
                    <h3>Space Assessment</h3>
                    <p>Our team conducts a thorough evaluation of your space, taking measurements and noting architectural features.</p>
                </div>
                <div class="process-step-r6j3">
                    <div class="step-number-t4u8">3</div>
                    <h3>Design Development</h3>
                    <p>We create detailed design concepts, mood boards, and 3D renderings to visualize your new space.</p>
                </div>
                <div class="process-step-r6j3">
                    <div class="step-number-t4u8">4</div>
                    <h3>Material Selection</h3>
                    <p>Together, we choose colors, materials, furniture, and accessories that bring your vision to life.</p>
                </div>
                <div class="process-step-r6j3">
                    <div class="step-number-t4u8">5</div>
                    <h3>Project Management</h3>
                    <p>We coordinate with contractors and vendors to ensure smooth execution of your design plan.</p>
                </div>
                <div class="process-step-r6j3">
                    <div class="step-number-t4u8">6</div>
                    <h3>Final Styling</h3>
                    <p>We add the finishing touches and style your space to perfection, ready for you to enjoy.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-q5w9">
        <div class="container-w2e7">
            <h2 class="section-title-k3n8">Client Reviews</h2>
            <div class="reviews-grid-f2x6">
                <div class="review-card-h7y3">
                    <p class="review-text-a4z1">"TilvoroToday completely transformed our living room. The team listened to our needs and created a space that's both beautiful and functional for our family. We couldn't be happier with the results!"</p>
                    <p class="reviewer-name-d8k5">- Sarah Mitchell</p>
                </div>
                <div class="review-card-h7y3">
                    <p class="review-text-a4z1">"Working with TilvoroToday was a fantastic experience. They helped us redesign our office space, and productivity has increased significantly. The design is modern, comfortable, and inspiring."</p>
                    <p class="reviewer-name-d8k5">- David Chen</p>
                </div>
                <div class="review-card-h7y3">
                    <p class="review-text-a4z1">"I was amazed at how they maximized our small apartment. Every inch is now functional, and it feels so much larger. The storage solutions are brilliant!"</p>
                    <p class="reviewer-name-d8k5">- Emily Rodriguez</p>
                </div>
                <div class="review-card-h7y3">
                    <p class="review-text-a4z1">"The attention to detail is incredible. From the initial consultation to the final reveal, everything was professional and exceeded our expectations. Highly recommend!"</p>
                    <p class="reviewer-name-d8k5">- Michael Thompson</p>
                </div>
                <div class="review-card-h7y3">
                    <p class="review-text-a4z1">"TilvoroToday helped us create our dream kitchen. The layout is perfect for cooking and entertaining, and the design is timeless. Worth every penny!"</p>
                    <p class="reviewer-name-d8k5">- Lisa Johnson</p>
                </div>
                <div class="review-card-h7y3">
                    <p class="review-text-a4z1">"They managed to incorporate all our requirements while staying within budget. The project was completed on time, and the quality of work is outstanding."</p>
                    <p class="reviewer-name-d8k5">- Robert Williams</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section-b6n2">
        <div class="container-w2e7">
            <h2 class="section-title-k3n8">Get In Touch</h2>
            <div class="contact-grid-j9m7">
                <div class="contact-item-p3l4">
                    <div class="contact-icon-x6r8">📞</div>
                    <h3>Phone</h3>
                    <p><a href="tel:+15551234567" class="phone-link-z2s9">+1 (555) 123-4567</a></p>
                </div>
                <div class="contact-item-p3l4">
                    <div class="contact-icon-x6r8">✉️</div>
                    <h3>Email</h3>
                    <p>info@tilvorotoday.com</p>
                </div>
                <div class="contact-item-p3l4">
                    <div class="contact-icon-x6r8">📍</div>
                    <h3>Address</h3>
                    <p>456 Design Avenue<br>Creative District, CD 12345</p>
                </div>
                <div class="contact-item-p3l4">
                    <div class="contact-icon-x6r8">🕒</div>
                    <h3>Hours</h3>
                    <p>Mon-Fri: 9AM-6PM<br>Sat: 10AM-4PM<br>Sun: By Appointment</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section-u5i1">
        <div class="container-w2e7">
            <p>© 2024 TilvoroToday. All rights reserved. | Professional Interior Design Services</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-k8p6">
        <div class="modal-content-v4q3">
            <span class="modal-close-g7t2" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you contact us for design services, request consultations, or communicate with our team.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our interior design services, communicate with you about projects, and respond to your inquiries.</p>
            
                        <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy or as required by law.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Cookies and Tracking</h3>
            <p>Our website may use cookies to enhance your browsing experience. You can choose to disable cookies through your browser settings.</p>
            
            <h3>Third-Party Services</h3>
            <p>We may use third-party services for analytics, advertising, and other business purposes. These services may collect information about your use of our website.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. Contact us at info@tilvorotoday.com to exercise these rights.</p>
            
            <h3>Changes to This Policy</h3>
            <p>We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on this page.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this privacy policy, please contact us at info@tilvorotoday.com or call +1 (555) 123-4567.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-k8p6">
        <div class="modal-content-v4q3">
            <span class="modal-close-g7t2" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using TilvoroToday's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Services Description</h3>
            <p>TilvoroToday provides interior design services including but not limited to space planning, color consultation, furniture selection, and design project management.</p>
            
            <h3>Client Responsibilities</h3>
            <p>Clients are responsible for providing accurate information about their space, budget, and requirements. Clients must also ensure access to the property for consultations and installations.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment terms will be specified in individual project contracts. Generally, a deposit is required to begin work, with remaining payments due according to project milestones.</p>
            
            <h3>Project Timeline</h3>
            <p>Project timelines are estimates and may be subject to change due to factors beyond our control, including but not limited to material availability and contractor schedules.</p>
            
            <h3>Intellectual Property</h3>
            <p>All design concepts, plans, and materials created by TilvoroToday remain our intellectual property until full payment is received.</p>
            
            <h3>Limitation of Liability</h3>
            <p>TilvoroToday's liability is limited to the amount paid for our services. We are not responsible for damages caused by third-party contractors or suppliers.</p>
            
            <h3>Cancellation Policy</h3>
            <p>Clients may cancel projects with written notice. Cancellation fees may apply based on work completed and materials ordered.</p>
            
            <h3>Dispute Resolution</h3>
            <p>Any disputes arising from our services will be resolved through mediation or arbitration in accordance with local laws.</p>
            
            <h3>Modifications</h3>
            <p>These terms may be modified at any time. Continued use of our services constitutes acceptance of modified terms.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@tilvorotoday.com or +1 (555) 123-4567.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Modal functions
        function openModal(type) {
            const modal = document.getElementById(type + '-modal');
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(type) {
            const modal = document.getElementById(type + '-modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        window.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal-overlay-k8p6')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-x7k9');
            if (window.scrollY > 100) {
                nav.style.background = 'rgba(44, 62, 80, 0.95)';
                nav.style.backdropFilter = 'blur(10px)';
            } else {
                nav.style.background = '#2c3e50';
                nav.style.backdropFilter = 'none';
            }
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe service cards and other elements
        document.querySelectorAll('.service-card-t5r2, .review-card-h7y3, .expertise-item-s8d1, .process-step-r6j3').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Mobile menu toggle (if needed)
        function toggleMobileMenu() {
            const menu = document.querySelector('.nav-menu-r5t1');
            menu.classList.toggle('mobile-active');
        }

        // Add some interactive hover effects
        document.querySelectorAll('.service-card-t5r2').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Portfolio image lazy loading
        const portfolioImages = document.querySelectorAll('.portfolio-img-r1t8');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.style.opacity = '1';
                    observer.unobserve(img);
                }
            });
        });

        portfolioImages.forEach(img => {
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.5s ease';
            imageObserver.observe(img);
        });

        // Add dynamic year to footer
        document.addEventListener('DOMContentLoaded', function() {
            const currentYear = new Date().getFullYear();
            const footerText = document.querySelector('.footer-section-u5i1 p');
            if (footerText) {
                footerText.innerHTML = footerText.innerHTML.replace('2024', currentYear);
            }
        });

        // Form validation and interaction (if forms are added later)
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add some dynamic content loading
        function loadDynamicContent() {
            // This could be used for loading additional portfolio items or testimonials
            console.log('Dynamic content loading functionality ready');
        }

        // Initialize all interactive features
        document.addEventListener('DOMContentLoaded', function() {
            loadDynamicContent();
            
            // Add click tracking for analytics (placeholder)
            document.querySelectorAll('.cta-button-h4v8, .phone-link-z2s9').forEach(element => {
                element.addEventListener('click', function() {
                    // Analytics tracking code would go here
                    console.log('CTA clicked:', this.textContent || this.href);
                });
            });
        });

        // Performance optimization
        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        // Debounced scroll handler
        const debouncedScrollHandler = debounce(function() {
            // Additional scroll-based functionality can be added here
        }, 100);

        window.addEventListener('scroll', debouncedScrollHandler);
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>




