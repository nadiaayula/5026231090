<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Bootstrap 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
            background-color: #f8f9fa;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        #sidebar {
            width: 250px;
            height: 100vh;
            background: #0b4a84;
            color: white;
            transition: all 0.3s;
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-bottom: 50px;
        }
        #sidebar.hide {
            margin-left: -250px;
        }
        .sidebar-header {
            display: flex;
            align-items: center;
            padding: 15px;
        }
        .sidebar-header img {
            width: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        #content {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            transition: all 0.3s;
            width: 100%;
        }
        #content.full {
            margin-left: 0;
        }
        .header-bar {
            display: flex;
            align-items: center;
            justify-content: start;
            background: white;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header-bar i {
            font-size: 24px;
            cursor: pointer;
            color: #0b4a84;
            margin-right: 15px;
        }
        .header-bar h1 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }
        /* Profile Card */
        .profile-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .profile-card p {
            margin-bottom: 8px;
        }
        .profile-card img {
            width: 120px;
            height: 160px;
            border-radius: 25px;
            object-fit: cover;
            position: relative; 
            top: -10px; 
        }
        .btn-primary {
            background-color: #1e3a8a;
            border: none;
            width: 60%;
            border-radius: 10px;
        }
        .menu-list {
            list-style: none;
            padding: 0 20px;
        }
        .menu-list li {
            padding: 10px;
            border-radius: 5px;
        }
        .menu-list li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .menu-list li a i {
            width: 20px;
            margin-right: 10px;
        }
        .active {
            background: #2c3e50;
        }
        .logout-btn {
            width: 80%;
            margin: auto;
            margin-top: 270px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
        .logout-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        .fa-purple {
            color: purple;
        }
        .text-gray {
            color: gray;
        }
    </style>
</head>
<body>

    <div id="sidebar">
        <div>
            <div class="sidebar-header">
                <img src="{{ asset('img/profile-photo.png') }}" alt="User">
                <div class="user-info ml-2">
                    <strong>User</strong><br>
                    <small>user@gmail.com</small>
                </div>
            </div>
            <ul class="menu-list">
                <li><a href="#"><i class="fas fa-clipboard-list"></i> Helperlog</a></li>
                <li class="active"><a href="#"><i class="fas fa-search"></i> Helperfind</a></li>
                <li><a href="#"><i class="fas fa-comments"></i> Helperassist</a></li>
            </ul>
        </div>
        <div class="logout-btn"><i class="fas fa-sign-out-alt"></i> Log Out</div>
    </div>

    <div id="content">
        <div class="header-bar">
            <i id="toggleSidebar" class="fas fa-bars"></i>
            <h3><b>Helperfind Dashboard</b></h3>
        </div>
        <p style="margin-top: 15px;"><b>Filter PRT Berdasarkan</b></p>
        <div class="row">

            <!-- Card 1 -->
             <div class="col-lg-4 col-md-6 mb-4">
                <div class="profile-card">
                    <img src="{{ asset('img/image-1.png') }}" alt="Intan" style="float: left; margin: 10px;">
                    <h5>Intan Permata</h5>
                    <p><i class="fa-regular fa-circle-user fa-purple"></i> <span class="text-gray">Baby Sitter</span></p>
                    <p><i class="fa-solid fa-location-dot fa-purple"></i> <span class="text-gray">Surabaya</span></p>
                    <p><i class="fa-regular fa-star fa-purple"></i> <span class="text-gray">4.5/5.0</span></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
                        
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="profile-card">
                    <img src="{{ asset('img/image-2.jpg') }}" alt="Sumairi" style="float: left; margin: 10px;">
                    <h5>Sumairi</h5>
                    <p><i class="fa-regular fa-circle-user fa-purple"></i> <span class="text-gray">Perawat Lansia</span></p>
                    <p><i class="fa-solid fa-location-dot fa-purple"></i> <span class="text-gray">Pasuruan</span></p>
                    <p><i class="fa-regular fa-star fa-purple"></i> <span class="text-gray">4.5/5.0</span></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="profile-card">
                    <img src="{{ asset('img/image-3.jpg') }}" alt="Rofiq" style="float: left; margin: 10px;">
                    <h5>Rofiq</h5>
                    <p><i class="fa-regular fa-circle-user fa-purple"></i> <span class="text-gray">Sopir Pribadi</span></p>
                    <p><i class="fa-solid fa-location-dot fa-purple"></i> <span class="text-gray">Surabaya</span></p>
                    <p><i class="fa-regular fa-star fa-purple"></i> <span class="text-gray">4.5/5.0</span></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="profile-card">
                    <img src="{{ asset('img/image-4.jpeg') }}" alt="Nagisa" style="float: left; margin: 10px;">
                    <h5>Nagisa Natsumi</h5>
                    <p><i class="fa-regular fa-circle-user fa-purple"></i> <span class="text-gray">PRT</span></p>
                    <p><i class="fa-solid fa-location-dot fa-purple"></i> <span class="text-gray">Surabaya</span></p>
                    <p><i class="fa-regular fa-star fa-purple"></i> <span class="text-gray">4.5/5.0</span></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="profile-card">
                    <img src="{{ asset('img/image-5.png') }}" alt="Andri" style="float: left; margin: 10px;">
                    <h5>Andri Wulan</h5>
                    <p><i class="fa-regular fa-circle-user fa-purple"></i> <span class="text-gray">PRT</span></p>
                    <p><i class="fa-solid fa-location-dot fa-purple"></i> <span class="text-gray">Tuban</span></p>
                    <p><i class="fa-regular fa-star fa-purple"></i> <span class="text-gray">4.5/5.0</span></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="profile-card">
                    <img src="{{ asset('img/image-6.jpg') }}" alt="Roniah" style="float: left; margin: 10px;">
                    <h5>Ronieh</h5>
                    <p><i class="fa-regular fa-circle-user fa-purple"></i> <span class="text-gray">Baby Sitter</span></p>
                    <p><i class="fa-solid fa-location-dot fa-purple"></i> <span class="text-gray">Surabaya</span></p>
                    <p><i class="fa-regular fa-star fa-purple"></i> <span class="text-gray">4.5/5.0</span></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('hide');
            document.getElementById('content').classList.toggle('full');
        });
    </script>

</body>
</html>