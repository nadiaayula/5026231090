<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Linktree</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <script
            src="https://kit.fontawesome.com/f85ac480d1.js"
            crossorigin="anonymous"></script>
        <style>
    body {
        background-color: #fff;
        color: #333;
        text-align: center;
        font-family: 'Inter', sans-serif;
        padding-top: 50px;
    }

    header {
        max-width: 584px;
        height: 64px;
        margin: 0 auto;
        padding: 12px 16px;
        display: flex;
        justify-content: flex-end;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1000;
        background: transparent;
    }

    .share-button {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(26, 26, 26, 0.35); 
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.1s cubic-bezier(0.25, 1.8, 0.5, 0.9), opacity 0.3s ease;
        padding: 0;
        margin-top: 4px;
        opacity: 1;
    }

    .share-button:hover {
        transform: scale(1.1);
    }

    .share-button:active {
        transform: scale(0.95);
    }

    .topbar {
        width: 75%;
        height: 65px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 0 20px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
    }

    .profile-img {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 16px; 
        margin-top: 3px; 
    }

    .main-title {
        font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        font-size: 21px;
        font-weight: 700;
        color: #000000;
        margin-bottom: 2px; 
        line-height: 1.5;
    }

    .subtitle {
        font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        font-size: 17px;
        font-weight: 400;
        color: #7b7777;
        margin-bottom: 12px;  
        line-height: 1.5;
    }

    .social-icons i {
        font-size: 2rem;
        color: #333;
        margin: 0 15px;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .toggle-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px; 
    }

    .toggle-checkbox {
        display: none;
    }

    .links {
        font-weight: bold;
        font-size: 14px; 
        transition: opacity 0.3s ease;
        position: relative;
        z-index: 1;
        font-family: 'DM Sans', sans-serif;
        margin-right: 35px;
        opacity: 1;
        color: black;
        letter-spacing: 0.32px;
        line-height: 1.5;
        align-self: center; 
    }

    .shop {
        font-weight: bold;
        font-size: 14px; 
        transition: opacity 0.3s ease;
        position: relative;
        z-index: 1;
        font-family: 'DM Sans', sans-serif;
        margin-left: 20px;
        opacity: 1;
        color: white;
        letter-spacing: 0.32px;
        line-height: 1.5;
        align-self: center; 
    }

    .toggle-label {
        display: flex;
        align-items: center; 
        justify-content: space-around; 
        cursor: pointer;
        background-color: #959390;
        border-radius: 50px;
        padding: 10px 30px;
        position: relative;
        width: 191px;
        height: 51px;
        user-select: none;      
    }

    .links,
    .shop {
        pointer-events: none;
    }

    .toggle-slider {
        position: absolute;
        top: 50%;
        left: 2px;
        right: 2px;
        width: 94px;
        height: 48px;
        background-color: white;
        border-radius: 50px;
        transition: transform 0.3s ease;
        transform: translateY(-50%);
        object-fit: cover;              
    }

    .toggle-checkbox:checked+.toggle-label .toggle-slider {
        transform: translate(93px, -50%);
    }

    .toggle-checkbox:checked+.toggle-label .links {
        opacity: 1;
        color: rgb(244, 243, 243);
    }

    .toggle-checkbox:checked+.toggle-label .shop {
        opacity: 1;
        color: black;
    }

    .content {
        display: none;
    }

    .content.active {
        display: block;
    }

    .custom-button {
        background-color: rgba(235, 238, 241, 255); 
        border-radius: 12px;
        padding: 12px 16px;
        margin: 14px auto; 
        display: flex;
        align-items: center;
        position: relative;
        transition: all 0.15s cubic-bezier(0.34, 1.56, 0.64, 1);
        width: calc(100% - 16px); 
        max-width: 580px; 
        height: 64px; 
        text-decoration: none !important;
        border: none; 
    }

    .custom-button a {
        color: inherit;   
        text-decoration: none; 
    }
    
    .custom-button:hover a {
        color: inherit;
        text-decoration: none; 
    }

    .icon-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 20px; 
        margin-left: 4px; 
        width: 48px;
        height: 48px;
        min-width: 48px; 
    }

    .icon-img {
        width: 48px;
        height: 48px;
        object-fit: cover;
        border-radius: 10px;
        aspect-ratio: 1/1; 
    }

    .text-wrapper {
        font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #000000;
        line-height: 1.5;
        flex-grow: 1;
        margin-left: 4px; 
        max-width: calc(100% - 20px); 
        padding-right: 20px; 
    }

    .custom-button:hover {
        background-color: #ebebeb;
        transform: scale(1.03);
        text-decoration: none !important;
        color: #333 !important;
    }

    .custom-button:active {
        transform: scale(0.98);
        transition-duration: 0.1s;
    }

    .custom-button a, 
    .custom-button a:hover,
    .custom-button a:active,
    .custom-button a:visited {
        color: #333 !important;
        text-decoration: none !important;
    }

    .fa-ellipsis-v {
        position: absolute;
        right: 20px;
        color: #666;
        opacity: 0.7;
        cursor: pointer;
    }

    .rounded-4 {
        border-radius: 1rem !important;
    }

    .shadow-sm {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05) !important;
    }

    .img-fluid {
        max-height: 100px;
        object-fit: cover;
    }

    .container {
        max-width: 660px; 
        width: 100%;
        padding: 12px 10px;
        margin: 0 auto;
    }

    .content {
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        padding: 20px 0;
    }

    .content.active {
        display: block;
    }

    #content1 {
        margin-top: 0; 
        padding-top: 0; 
    }

    @media screen and (max-width: 768px) {
        .container {
            max-width: 640px;
            padding: 10px 8px; 
        }
        
        .custom-button {
            width: calc(100% - 12px); 
            margin: 14px auto; 
            max-width: 540px;
        }
    }

    @media screen and (max-width: 480px) {
        .container {
            padding: 10px;
        }
        
        .icon-img {
            width: 30px;
            height: 30px;
        }
        
        .text-wrapper {
            font-size: 14px;
        }
    }

    .d-flex.justify-content-center.gap-3.my-3 {
        margin-top: 0 !important;
        margin-bottom: 16px !important;  
    }

    .social-link {
        padding: 8px;
        transition: transform 0.2s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .social-link:hover {
        transform: scale(1.15);
    }

    .social-link:active {
        transform: scale(0.95);
    }

    .social-link img {
        width: 32px;
        height: 32px;
    }

    .shop-button {
        background-color: rgba(235, 238, 241, 255); 
        border-radius: 14px;
        padding: 15px; 
        margin: 14px auto;
        display: flex;
        flex-direction: column;
        position: relative;
        transition: all 0.1s cubic-bezier(0.25, 1.8, 0.5, 0.9);
        width: calc(100% - 16px);
        max-width: 580px;
        text-decoration: none !important;
        border: none;
    }

    .shop-button:hover {
        background-color: #ebebeb;
        transform: scale(1.03);
        text-decoration: none !important;
    }

    .shop-button:active {
        transform: scale(0.98);
        transition-duration: 0.05s;
    }

    .shop-images {
        display: flex;
        justify-content: space-between;
        gap: 15px;  
        margin-bottom: 15px;  
    }

    .shop-image {
        width: 170px;
        height: 170px;
        object-fit: cover;
        border-radius: 12px;
    }

    .shop-content {
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center; 
        text-align: center; 
        padding: 0 16px;
        position: relative;
        gap: 4px; 
    }

    .shop-title {
        font-family: Inter, sans-serif;
        font-size: 16px;
        font-weight: 600; 
        color: #000000;
        margin: 0;
        width: 292.65px; 
        height: 21px; 
        overflow: hidden;
        text-overflow: ellipsis; 
        display: -webkit-box; 
        -webkit-line-clamp: 2; 
        -webkit-box-orient: vertical; 
        white-space: normal; 
    }

    .shop-subtitle {
        font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        font-size: 14px;
        font-weight: 400; 
        color: rgba(0, 0, 0, 0.5);
        margin: 0;
    }

    .shop-content i.fa-ellipsis-v {
        position: absolute;
        right: 16px; 
        bottom: 16px; 
        color: #666;
        opacity: 0.7;
        cursor: pointer;
        font-size: 16px;
    }

    .shop-row {
        display: flex;
        flex-wrap: wrap; 
        justify-content: space-between;
        gap: 12px; 
        margin: 14px auto;
        width: 100%; 
        max-width: 580px; 
    }

    .half-width {
        width: calc(50% - 7.5px) !important;
        margin: 0 !important;
        height: auto;
        transition: all 0.1s cubic-bezier(0.25, 1.8, 0.5, 0.9);
    }

    .half-width:hover {
        background-color: #ebebeb;
        transform: scale(1.03);
    }

    .half-width:active {
        transform: scale(0.98);
        transition-duration: 0.05s;
    }

    .single-image {
        justify-content: center;
    }

    .single-image .shop-image {
        width: 240px;
        height: 240px;
    }

    @media screen and (max-width: 768px) {
        .shop-row {
            gap: 8px; 
        }
        
        .half-width {
            width: calc(50% - 6px) !important; 
        }
        
        .single-image .shop-image {
            width: 180px; 
            height: 180px;
        }
    }

    @media screen and (max-width: 480px) {
        .shop-row {
            flex-direction: column; 
            gap: 12px;
        }
        
        .single-image .shop-image {
            width: 140px; 
            height: 140px;
        }
    }

    .footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 16px 0;
        background-color: #fff;
    }

    .footer-content {
        margin-bottom: 16px;
    }

    .footer-button {
        width: 224.3px;
        height: 48px;
        margin: 0 auto;
        padding: 12px 16px;
        background-color: rgba(255, 255, 255, 0.75);
        border: 1px solid #E5E5E5;
        border-radius: 24px; 
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .footer-button span {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Inter, sans-serif;
        font-size: 16px; 
        font-weight: 600;
        color: #000000;
        white-space: nowrap;
    }

    .footer-button svg {
        height: 14px; 
        width: auto;
        margin-right: 6px;
        display: block;
    }

    .footer {
        margin-top: 8px;
        padding: 16px 16px 4px; 
        margin-bottom: -20px;
    }

    .footer-button {
        margin-top: 0; 
    }

    .bottombar {
        width: 100%;
        height: 50px; 
        max-height: 100px; 
        background-color: transparent;
        margin-top: 16px; 
    }

    .footer-container {
        display: flex;
        flex-direction: column; 
        align-items: center;
        justify-content: flex-start;
        width: 100%;
        background-color: #fff; 
    }

    .footer-content {
        padding: 16px 0;
        text-align: center;
        z-index: 1; 
    }

    .footer-button {
        width: 224.3px;
        height: 48px;
        margin: 0 auto;
        padding: 12px 16px;
        background-color: rgba(255, 255, 255, 0.75);
        border: 1px solid #E5E5E5;
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .bottombar {
        width: 100%;
        height: 1556px; 
        background-color: transparent; 
    }

    .shop-button.half-width {
        position: relative; 
        padding: 8px; 
    }

    .shop-button.half-width i.fa-ellipsis-v {
        position: absolute;
        bottom: 10px; 
        right: 25px; 
        font-size: 16px;
        color: #666;
        opacity: 0.7;
        cursor: pointer;
    }

    .shop-title-2 {
        font-family: Inter, sans-serif;
        font-size: 14px;
        font-weight: 525;
        color: #000000;
        margin: 0;
        width: 234.5px; 
        height: 48px; 
        overflow: hidden;
        text-overflow: ellipsis;
        display: flex; 
        align-items: center; 
        justify-content: center; 
        text-align: center; 
        -webkit-line-clamp: 2; 
        -webkit-box-orient: vertical;
        white-space: normal;
    }

    .shop-subtitle-2 {
        font-family: Inter, sans-serif;
        font-size: 12px;
        font-weight: 400; 
        color: rgba(0, 0, 0, 0.6);
        margin: 0;
        width: 234.5px;
        height: auto;
        display: flex; 
        align-items: center; 
        justify-content: center; 
        text-align: center; 
    }

    .shop-images.single-image {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-right: 8px; 
        padding-left: 8px;
    }

    .shop-images.single-image .shop-image {
        width: 265px; 
        height: 265px; 
        object-fit: cover; 
        border-radius: 12px; 
    }
    </style>
    </head>
    <body>
        <header>
            <div class="mt-3">
                <button class="share-button">
                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path fill="white" stroke="white"
                            d="M12.6661 7.33348C12.2979 7.33348 11.9994 7.63195 11.9994 8.00014C11.9994 8.36833 12.2979 8.66681 12.6661 8.66681C13.0343 8.66681 13.3328 8.36833 13.3328 8.00014C13.3328 7.63195 13.0343 7.33348 12.6661 7.33348Z" />
                        <path fill="white" stroke="white"
                            d="M8.00057 7.33348C7.63238 7.33348 7.3339 7.63195 7.3339 8.00014C7.3339 8.36833 7.63238 8.66681 8.00057 8.66681C8.36876 8.66681 8.66724 8.36833 8.66724 8.00014C8.66724 7.63195 8.36876 7.33348 8.00057 7.33348Z" />
                        <path fill="white" stroke="white"
                            d="M3.33333 7.33348C2.96514 7.33348 2.66667 7.63195 2.66667 8.00014C2.66667 8.36833 2.96514 8.66681 3.33333 8.66681C3.70152 8.66681 4 8.36833 4 8.00014C4 7.63195 3.70152 7.33348 3.33333 7.33348Z" />
                    </svg>
                </button>
            </div>
        </header>
        <div class="container">
            <!-- Profile section -->
            <div class="profile-section">
                <img src="https://ugc.production.linktr.ee/28f6834b-44da-4ca3-8b43-ac7a25c3a312_20163068a8b0486152f15347dcac67a2-c5-1080x1080.jpeg?io=true&size=avatar-v3_0" alt="Profile" class="profile-img" />
                <div class="main-title">Dean Banowetz</div>
                <div class="subtitle">Hollywood Hair Guy ® | Celebrity<br>Hairstylist | 🎬 TV/Film Hair Education</div>
                <!-- Social icons -->
                <div class="d-flex justify-content-center flex-wrap gap-3 my-3">
                    <a href="https://instagram.com/dbano" target="_blank" class="social-link">
                        <img src="{{ asset('img/instagram.png') }}" alt="Instagram">
                    </a>
                    <a href="https://www.linkedin.com/in/dean-banowetz-729a9967" target="_blank" class="social-link">
                        <img src="{{ asset('img/linkedin.png') }}" alt="LinkedIn">
                    </a>
                    <a href="https://www.youtube.com/@deanbanowetz" target="_blank" class="social-link">
                        <img src="{{ asset('img/youtube.png') }}" alt="YouTube">
                    </a>
                    <a href="https://tiktok.com/@dbano" target="_blank" class="social-link">
                        <img src="{{ asset('img/tiktok.png') }}" alt="TikTok">
                    </a>
                    <a href="https://www.facebook.com/deanbanowetzfan/" target="_blank" class="social-link">
                        <img src="{{ asset('img/facebook.png') }}" alt="Facebook">
                    </a>
                    <a href="https://www.amazon.com/shop/dbano" target="_blank" class="social-link">
                        <img src="{{ asset('img/amazon.png') }}" alt="Amazon">
                    </a>
                </div>
            </div>

            <!-- Toggle section -->
            <div class="toggle-container">
                <input type="checkbox" id="toggle" class="toggle-checkbox">
                <label for="toggle" class="toggle-label">
                    <div class="links" id="links">Links</div>
                    <div class="shop" id="shop">Shop</div>
                    <span class="toggle-slider"></span>
                </label>
            </div>

            <!-- Content sections -->
            <div id="content1" class="content active">
                <div class="container">
                    <a
                        href="https://www.hollywoodhairguycourses.com/offers/k8T7eiGr/checkout"
                        class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/academy-logo.jpg') }}" class="icon-img"
                                alt="Link 1" />
                        </div>
                        <div class="text-wrapper">
                            NEXT WORKSHOP: Drag Wig Styling 5/31 & 6/1
                        </div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a
                        href="https://ktla.com/video/hollywood-hair-dare-dayna-takes-on-drag-wigs/10581428/"
                        class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/ktla-logo.jpg') }}" class="icon-img"
                                alt="Link 2" />
                        </div>
                        <div class="text-wrapper">
                            KTLA: Hollywood Hair Guy® Academy Hair Dare: Dayna Takes on
                            Drag Wigs
                        </div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a href="https://hollywoodhairguy.com/about" class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/basic-logo.jpg') }}" class="icon-img"
                                alt="Link 3" />
                        </div>
                        <div class="text-wrapper">
                            About Dean Banowetz | Hollywood Hair Guy®
                        </div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a
                        href="https://www.hollywoodhairguycourses.com/courses"
                        class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/basic-logo.jpg') }}" class="icon-img"
                                alt="Link 4" />
                        </div>
                        <div class="text-wrapper">
                            Hollywood Hair Guy® Academy In-Person & Virtual Courses
                        </div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a
                        href="https://www.hollywoodhairguycourses.com/roadmap"
                        class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/basic-logo.jpg') }}" class="icon-img"
                                alt="Link 5" />
                        </div>
                        <div class="text-wrapper">
                            FREE Master Class: Your Hollywood Career Roadmap
                        </div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a
                        href="https://www.hollywoodhairguycourses.com/offers/CfWnXrUs/checkout"
                        class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/basic-logo.jpg') }}" class="icon-img"
                                alt="Link 6" />
                        </div>
                        <div class="text-wrapper">Career Coaching</div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a href="https://www.imdb.com/name/nm1837530/"
                        class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/imdb-logo.jpg') }}" class="icon-img"
                                alt="Link 7" />
                        </div>
                        <div class="text-wrapper">IMDb</div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a href="https://hollywoodhairguy.com/press" class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/basic-logo.jpg') }}" class="icon-img"
                                alt="Link 8" />
                        </div>
                        <div class="text-wrapper">Press</div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a
                        href="https://hollywood-hair-guy-merch.printify.me/"
                        class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/text-logo.jpg') }}" class="icon-img"
                                alt="Link 9" />
                        </div>
                        <div class="text-wrapper">Merch Shop</div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a
                        href="https://www.hollywoodhairguycourses.com/hollywood-hair-guy-academy-private-events-and-parties"
                        class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/academy-logo.jpg') }}" class="icon-img"
                                alt="Link 10" />
                        </div>
                        <div class="text-wrapper">
                            Hollywood Hair Guy® Academy Private Events
                        </div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
        
                    <a href="https://example.com" class="custom-button">
                        <div class="icon-wrapper">
                            <img src="{{ asset('img/ddos-logo.jpg') }}" class="icon-img"
                                alt="Link 11" />
                        </div>
                        <div class="text-wrapper">The Dean's List of Daddy Do's</div>
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                </div>
            </div>
            
            <div id="content2" class="content">
                <a href="https://linktr.ee/dbano/shop#collection-0b2fa683-ebab-4d15-bd1b-20274ee0ea99" class="shop-button">
                    <div class="shop-images">
                        <img src="{{ asset('img/hhg-shop.jpg') }}" alt="Shop item 1" class="shop-image">
                        <img src="{{ asset('img/blue-vneck.jpg') }}" alt="Shop item 2" class="shop-image">
                        <img src="{{ asset('img/black-boxytee.jpg') }}" alt="Shop item 3" class="shop-image">
                    </div>
                    <div class="shop-content">
                        <div class="shop-title">Hollywood Hair Guy® Merch</div>
                        <div class="shop-subtitle">17 Products</div>
                        <i class="fa fa-ellipsis-v"></i>
                    </div>
                </a>

                <a href="https://linktr.ee/dbano/shop#collection-dc3e5a37-a5dc-479e-89d6-5aa4281396e7" class="shop-button">
                    <div class="shop-images">
                        <img src="{{ asset('img/blue-vneck.jpg') }}" alt="Shop item 1" class="shop-image">
                        <img src="{{ asset('img/grey-sleevetee.jpg') }}" alt="Shop item 2" class="shop-image">
                        <img src="{{ asset('img/blue-shorttee.jpg') }}" alt="Shop item 3" class="shop-image">
                    </div>
                    <div class="shop-content">
                        <div class="shop-title">Hollywood Hair Guy® Academy Merch</div>
                        <div class="shop-subtitle">19 Products</div>
                        <i class="fa fa-ellipsis-v"></i>
                    </div>
                </a>

                <div class="shop-row">
                    <a href="https://r.amzlink.to/?btn_url=https%3A%2F%2Fwww.amazon.com%2FDeans-List-Daddy-Dos%2Fdp%2F1508426139&btn_ref=org-433bb393e1b8b503" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-1.jpg') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">The Dean's List of Daddy Do's (Book)</div>
                            <div class="shop-subtitle-2">$14.95</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                
                    <a href="https://www.hollywoodhairguycourses.com/offers/CfWnXrUs/checkout" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-2.jpg') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">One Hour Career Coaching Session with Celebrity Stylist Dean Banowetz</div>
                            <div class="shop-subtitle-2">$349.99</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                </div>

                <div class="shop-row">
                    <a href="https://www.hollywoodhairguycourses.com/offers/LAqsonCF/checkout" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-3.jpg') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">Hollywood Hair Guy®<br>Academy Gift Cards</div>
                            <div class="shop-subtitle-2">$100</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                
                    <a href="https://www.hollywoodhairguycourses.com/offers/k8T7eiGr/checkout" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-468.jpg') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">Drag Wig Styling Workshop<br>- May 31st & June 1st, 2025</div>
                            <div class="shop-subtitle-2">$749.99</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                </div>

                <div class="shop-row">
                    <a href="https://www.hollywoodhairguycourses.com/offers/vMT2vgru/checkout" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-57.png') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">Set Hair 101 Boot Camp -<br>July 12th, 13th, & 14th, 2025</div>
                            <div class="shop-subtitle-2">$1,999.99</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                
                    <a href="https://www.hollywoodhairguycourses.com/offers/H2ZZ6uxo/checkout" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-468.jpg') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">Drag Wig Styling Workshop<br>- August 9th & 10th, 2025</div>
                            <div class="shop-subtitle-2">$749.99</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                </div>

                <div class="shop-row">
                    <a href="https://www.hollywoodhairguycourses.com/offers/AdQCL5oG/checkout" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-57.png') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">Set Hair 101 Boot Camp -<br>September 13th, 14th, 2025</div>
                            <div class="shop-subtitle-2">5 Products</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                
                    <a href="https://www.hollywoodhairguycourses.com/offers/uRh2znQn/checkout" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-468.jpg') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">Drag Wig Styling Workshop<br>- October 18th & 19th, 2025</div>
                            <div class="shop-subtitle-2">$749.99</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                </div>

                <div class="shop-row">
                    <a href="https://www.hollywoodhairguycourses.com/Breakingintothehollywoodhairbiz" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-9.jpg') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">The Dean's List: Breaking into the<br>Hollywood Beauty Biz Virtual Course</div>
                            <div class="shop-subtitle-2">$299.99</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                
                    <a href="https://www.hollywoodhairguycourses.com/nextlevelhairsheets" class="shop-button half-width">
                        <div class="shop-images single-image">
                            <img src="{{ asset('img/photo-10.jpg') }}" alt="Shop item 1" class="shop-image">
                        </div>
                        <div class="shop-content">
                            <div class="shop-title-2">Next Level Hair Sheet Virtual Course</div>
                            <div class="shop-subtitle-2">$399.99</div>
                        </div>
                        <div class="shop-icon">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-container">
            <div class="footer-content">
                <a class="footer-button">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" height="16px">
                            <title>Linktree Logo</title>
                            <desc>Linktree Logo Symbol</desc>
                            <path d="M13.5108 5.85343L17.5158 1.73642L19.8404 4.11701L15.6393 8.12199H21.5488V11.4268H15.6113L19.8404 15.5345L17.5158 17.8684L11.7744 12.099L6.03299 17.8684L3.70842 15.5438L7.93745 11.4361H2V8.12199H7.90944L3.70842 4.11701L6.03299 1.73642L10.038 5.85343V0H13.5108V5.85343ZM10.038 16.16H13.5108V24.0019H10.038V16.16Z" fill="#000000"></path>
                        </svg>
                        <span>Join dbano on Linktree</span>
                    </span>
                </a>
            </div>
            <div class="bottombar"></div>
        </div>

        <script>
            const toggleCheckbox = document.getElementById('toggle');
            const content1 = document.getElementById('content1');
            const content2 = document.getElementById('content2');
            const toggleLabel = document.querySelector('.toggle-label');
    
            function handleClick(e) {
                const rect = toggleLabel.getBoundingClientRect();
                const clickX = e.clientX - rect.left;
    
                if (clickX < rect.width / 2) {
                    toggleCheckbox.checked = false;
                    content1.classList.add('active');
                    content2.classList.remove('active');
                } else {
                    toggleCheckbox.checked = true;
                    content1.classList.remove('active');
                    content2.classList.add('active');
                }
            }
    
            toggleLabel.addEventListener('click', function (e) {
                e.preventDefault();
    
                handleClick(e);
            });
    
            handleClick({ clientX: toggleLabel.getBoundingClientRect().left });  // Initialize based on default state
        </script>
        <script>
            let lastScroll = 0;
            const shareButton = document.querySelector('.share-button');
            
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll > lastScroll && currentScroll > 100) {
                    // Scrolling down
                    shareButton.style.opacity = '0';
                } else {
                    // Scrolling up
                    shareButton.style.opacity = '1';
                }
                
                lastScroll = currentScroll;
            });
        </script>
    </body>
</html>