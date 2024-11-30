<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/assets/style/style.css">
    <link rel="stylesheet" href="./public/assets/style/datatables.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
<!-- @yield('style') -->
<title><?php echo $title ?></title>
</head>
<body>
    <div class="open-dash" id="open-dash">
        <button>
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
    <div class="logout-section">
            <a href="#">Logout</a>
    </div>

    <div class="main row">
        <div class="dashboard col-3" id="dashboard">
            <div class="logo">
                <div>
                    LOGO
                </div>
                <button id="btn-menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="select">
                <ul>
                    <li class="active">
                            <div>
                                <a href="#">
                                    <div class="icon">
                                        <i class="fa-solid fa-house"></i>
                                    </div>
                                    <h4>Dashboard</h4>
                                </a>
                            </div>
                    </li>
                    <!-- <li class="">
                        <div>
                            <a href="/vehicles">
                                <div class="icon">
                                    <i class="fa-solid fa-bus"></i>
                                </div>
                                <h4>Vehicles</h4>
                            </a>
                        </div>
                    </li>
                    <li class="">
                        <div>
                            <a href="{{route('students')}}">
                                <div class="icon">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <h4>Students</h4>
                            </a>
                        </div>
                    </li>
                    <li class="">
                        <div>
                            <a href="{{route('drivers')}}">
                                <div class="icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <h4>Drivers</h4>
                            </a>
                        </div>
                    </li>
                    <li class="">
                        <div>
                            <a href="{{route('parents')}}">
                                <i class="fa-solid fa-person-breastfeeding"></i>
                                <h4>Parents</h4>
                            </a>
                        </div>
                    </li>
                    <li class="">
                        <div>
                            <a href="{{route('assistants.index')}}">
                                <i class="fa-solid fa-hands-holding-child"></i>
                                <h4>Assistants</h4>
                            </a>
                        </div>
                    </li>
                    <li class="">
                        <div>
                            <a href="{{route('routes.index')}}">
                                <i class="fa-solid fa-road"></i>
                                <h4>Routes</h4>
                            </a>
                        </div>
                    </li>
                    <li class="">
                        <div>
                            <a href="{{route('incidents')}}">
                                <i class="fa-solid fa-car-burst"></i>
                                <h4>Incidents</h4>
                            </a>
                        </div>
                    </li>
                    <li class="">
                        <div>
                            <a href="{{route('reports')}}">
                                <i class="fa-solid fa-calendar-minus"></i>
                                <h4>Reports</h4>
                            </a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="content col-9" id="content">
            <div class="container">
                    <div class="navbar">

                        <div class="search">
                            <input type="text" name="" id="" placeholder="search here">
                            <button>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                        <div class="actions">
                            <div class="navbar-actions">
                                <div class="item">
                                    <a href="#">
                                        <i class="fa-regular fa-bell"></i>
                                        <div>
                                            <span>2</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item-2">
                                    <a href="#">
                                        <i class="fa-solid fa-gear"></i>
                                        </a>
                                </div>
                            </div>
                            <div class="separator">

                            </div>
                            <div class="user">
                                <p>Hello, <span>El Mahdi</span></p>
                                <div class="user-image">
                                    <img src="./public/assets/images/LMS.png" alt="user image" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <?php
                        echo $content
                        ?>
                    </div>
            </div>
        </div>
    </div>
</body>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/controlle.js')}}"></script>
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/datatable-config.js')}}"></script>
<script src="{{asset('js/launch-modal.js')}}"></script>
<script src="{{asset('js/launch-modal2.js')}}"></script>
<script src="{{asset('js/vehicles-details.js')}}"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- @yield('scripts') -->
</html>