<?php
 date_default_timezone_set('asia/bangkok');
 include('connect.php');

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>House-Service</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--  -->

    <!-- Js -->

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!--  -->

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <!--  -->

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts Roboto -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Fahkwang:wght@200&family=IBM+Plex+Sans+Thai+Looped:wght@100&family=Itim&family=K2D:wght@100&family=Maitree:wght@200&family=Mitr&family=Noto+Sans+Thai+Looped:wght@400;900&family=Pridi:wght@200&family=Sriracha&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">

    </script>

</head>



<body>

    <!--Main Navigation-->

    <header>

        <!-- Sidebar -->

        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">

            <div class="position-sticky">

                <div class="list-group list-group-flush mx-3 mt-4">

                    <p id="sidebar-head1" class="text-center mt-1">งานบริการต่างๆ</p>

                    <!-- <a href="?page=repair" class="list-group-item list-group-item-action py-2 ripple"

                        aria-current="true">

                        <i class="fa-solid fa-wrench me-3"></i><span id="repair-msg">แจ้งซ่อม</span>

                    </a> -->

                    <a href="?page=service" class="list-group-item list-group-item-action py-2 ripple">

                        <i class="fa-solid fa-broom me-3"></i><span id="repair-msg">งานบริการ</span>

                    </a>

                    <p id="sidebar-head1" class="text-center mt-3">ข้อมูลส่วนตัว</p>

                    <a href="?page=address" class="list-group-item list-group-item-action py-2 ripple"
                        aria-current="true">

                        <i class="fa-solid fa-address-card me-3"></i><span id="repair-msg">ที่อยู่</span>

                    </a>

                    <a href="?page=followwork" class="list-group-item list-group-item-action py-2 ripple"
                        aria-current="true">

                        <i class="fa-solid fa-person-digging me-3"></i><span id="repair-msg">ติดตามงาน</span>

                    </a>

                    <a href="?page=history" class="list-group-item list-group-item-action py-2 ripple">

                        <i class="fa-solid fa-clock-rotate-left me-3"></i><span
                            id="repair-msg">ประวัติการใช้บริการ</span>

                    </a>

                    <p id="sidebar-head1" class="text-center mt-3">อื่นๆ</p>

                    <a href="?page=example" class="list-group-item list-group-item-action py-2 ripple"
                        aria-current="true">

                        <i class="fa-solid fa-circle-question me-3"></i><span id="repair-msg">ตัวอย่างการใช้งาน</span>

                    </a>

                    <a href="?page=contract" class="list-group-item list-group-item-action py-2 ripple"
                        aria-current="true">

                        <i class="fa-solid fa-headset me-3"></i><span id="repair-msg">ติดต่อ</span>

                    </a>

                </div>

            </div>

        </nav>

        <!-- Sidebar -->



        <!-- Navbar -->

        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">

            <!-- Container wrapper -->

            <div class="container-fluid">

                <!-- Toggle button -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fas fa-bars"></i>

                </button>



                <!-- Brand -->

                <a class="navbar-brand" href="?page=home">

                    <img src="img/logo.png" height="40" style="width: 100%;" alt="" loading="lazy" />

                </a>



                <!-- Right links -->

                <ul class="navbar-nav ms-auto d-flex flex-row">

                    <!-- Icon -->

                    <li class="nav-item me-3 me-lg-0">

                        <a class="nav-link" href="https://github.com/OverCatX">

                            <i class="fab fa-github"></i>

                        </a>

                    </li>

                    <!-- Avatar -->

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                                height="22" alt="" loading="lazy" />

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

                            <?php

                                if(isset($_SESSION['logged_in']['username'])){

                                    ?>

                            <a id="profile-msg">สวัสดีคุณ:

                                <?php echo explode(" ",$_SESSION['logged_in']['username'])[0] ?></a>

                            <li><a id="profile-msg" class="dropdown-item" href="?page=address">โปรไฟล์</a></li>

                            <li><a id="profile-msg" class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>

                            <?php

                                    ?>

                            <?php

                            } else {

                                ?>

                            <li><a id="profile-msg" class="dropdown-item" href="?page=login">เข้าสู่ระบบ</a></li>

                            <li><a id="profile-msg" class="dropdown-item" href="?page=register">สมัครสมาชิก</a></li>

                            <?php

                            }

                            ?>

                        </ul>

                    </li>

                </ul>

            </div>

            <!-- Container wrapper -->

        </nav>

        <!-- Navbar -->

    </header>

    <!--Main Navigation-->



    <!--Main layout-->

    <main style="margin-top: 40px">

        <div class="container pt-4">

            <?php

                if(!$_GET){

                    $_GET["page"] = "home";

                }

                if(!$_GET["page"]){

                    $_GET["page"] = "home";

                }

                if($_GET["page"] == "home"){

                    include_once __DIR__ . '/service.php';

                } elseif($_GET["page"] == "register"){

                    include_once __DIR__ . '/register.php';

                } elseif($_GET["page"] == "login"){

                    include_once __DIR__ . '/login.php';

                } elseif($_GET["page"] == "service"){

                    include_once __DIR__ . '/service.php';

                } elseif($_GET["page"] == "service_confirm"){

                    include_once __DIR__ . '/service_confirm.php';

                } elseif($_GET["page"] == "followwork"){

                    include_once __DIR__ . '/followwork.php';

                } elseif($_GET["page"] == "contract"){

                    include_once __DIR__ . '/contract.php';

                } elseif($_GET["page"] == "address"){

                    include_once __DIR__ . '/address.php';

                } elseif($_GET["page"] == "history"){

                    include_once __DIR__ . '/history.php';

                } 

            ?>

        </div>

    </main>

    <!--  -->