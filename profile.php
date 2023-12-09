<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<style>
    header {
        /* border: 1px solid red; */
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(211, 211, 211, 1);
    }

    .head-menu img {
        padding: 12px;
    }

    .card {
        margin: 0 auto;
        max-width: 400px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        text-align: center;
        padding: 16px 24px;
    }

    .card-img {
        width: 200px;
        padding-top: 1rem;
        transition: 0.3s;
    }

    .card-img:hover {
        transform: scale(1.01);
    }

    .card-text {
        font-size: 30px;
        font-weight: 500px;
    }

    .card-textptn {
        font-size: 20px;
        font-weight: 500px;
        color: rgba(0, 0, 0, 0.6);
    }

    .card-icon {
        cursor: pointer;
        font-size: 37px;
        color: #ca602f;
    }

    .card-icon i:hover {
        opacity: 1;
        transform: scale(1.01);
    }

    .card-icon a {
        text-decoration: none;
    }
    

    button {
        font-family: 'Kanit', sans-serif;
        font-size: 20px;
        font-weight: 500px;
        background-color: #ca602f;
        color: white;
        padding: 10px 24px;
        border: none;
        cursor: pointer;
        width: 50%;
        border-radius: 5px;
        /* bottom: 0; */
        margin: 0;
        transition: 0.3s;
    }

    /* button:hover {
        opacity: 0.8;
        transition: all 0.8s linear;
    } */

    button:focus {
        box-shadow: #d8d8d8 0 0 0 1.5px inset, rgba(211, 211, 211, 0.4) 0 2px 4px, rgba(211, 211, 211, 0.3) 0 7px 13px -3px, #e4e4e4 0 -3px 0 inset;
    }

    button:hover {
        box-shadow: rgba(45, 35, 66, 0.3) 0 4px 8px, rgba(45, 35, 66, 0.2) 0 7px 13px -3px, #cecece 0 -3px 0 inset;
        transform: translateY(-2px);
    }

    button:active {
        box-shadow: #D6D6E7 0 3px 7px inset;
        transform: translateY(2px);
    }

    .nav-links a {
        color: #ca602f;
    }

    
</style>

<body>
    <section class="header">
        <div class="head-menu">
            <img src="img/logo.png" alt=""> 
            <strong>วิทยาลัยการอาชีพปัตตานี</strong>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">หน้าแรก</a></li>
            <li class="current"><a href="profile.php">ประวัติส่วนตัว</a></li>
            <li><a href="activity.php">กิจกรรม</a></li>
            <li><a href="learn.php">ตารางเรียน</a></li>

            <?php if (isset ($_SESSION['username'])) : ?>
                <p><strong><?php echo $_SESSION['username']; ?></strong></p>
                <p><a href="index.php?logout='1'">Logout</a></p>
            <?php endif ?>
        </ul>
    </section>

    <header>
        <div class="header-info">
            <h1>ประวัติส่วนตัว</h1>
        </div>
    </header>

    <div class="card">
        <img class="card-img" src="img/profile.jpg" alt="">
        <p class="card-text"><b>Abdulhafis Waemusor</b></p>
        <p class="card-textptn">STUDENT ITDEP PTNICEC</p>

        <div class="card-icon">
            <a href="www.google.com" target=”_blank”><i class="uil uil-instagram-alt"></i></a>
            <a href="www.google.com" target=”_blank”><i class="uil uil-github"></i></a>
            <a href="www.google.com" target=”_blank”><i class="uil uil-discord"></i></a>
        </div>

        <button type="submit">ติดต่อ</button>
    </div>




    <footer>
        <p><b>66309010012@Abdulhafis Waemusor</b></p>
        <p><i>6 Yarang, ChabangTiko, Muang, Pattani, 94000</i></p>
    </footer>
</body>

</html>