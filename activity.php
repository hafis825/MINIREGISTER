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
</head>

<style>
    header {
        /* border: 1px solid red; */
        padding: 1rem;
    }

    .head-menu img {
        padding: 12px;
    }

    .activity {
        /* border: 1px solid red; */
        width: 90%;
        padding: 1rem;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(2, 2fr);
        grid-gap: 60px;
    }

    .activity-items {
        background-color: white;
        /* border: 1px solid red; */
    }

    .activity-items:hover {
        transform: scale(1.01);
    }

    .activity-items {
        transition: 0.3s;
    }

    .activity-img {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 100%;
        height: 17vw;
        object-fit: cover;
    }

    .activity-text {
        font-size: 30px;
        text-align: center;
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
            <li><a href="profile.php">ประวัติส่วนตัว</a></li>
            <li class="current"><a href="activity.php">กิจกรรม</a></li>
            <li><a href="learn.php">ตารางเรียน</a></li>

            <?php if (isset ($_SESSION['username'])) : ?>
                <p><strong><?php echo $_SESSION['username']; ?></strong></p>
                <p><a href="index.php?logout='1'">Logout</a></p>
            <?php endif ?>
        </ul>
    </section>

    <header>
        <div class="header-info">
            <h1>กิจกรรมวิทยาลัย</h1>
        </div>
    </header>
    
    <div class="activity">
        <div class="activity-items">
            <img class="activity-img" src="img/big cleaning day.jpg" alt="">
            <p class="activity-text"><b>Big Cleaning Day</b></p>
        </div>
        <div class="activity-items">
            <img class="activity-img" src="img/รับน้อง.jpg" alt="">
            <p class="activity-text"><b>กิจกรรมสานสัมพันธ์พี่สู่น้อง</b></p>
        </div>
    </div>


    <footer>
        <p><b>66309010012@Abdulhafis Waemusor</b></p>
        <p><i>6 Yarang, ChabangTiko, Muang, Pattani, 94000</i></p>
    </footer>
</body>

</html>