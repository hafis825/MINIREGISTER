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
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(211, 211, 211, 1);
    }

    .head-menu img {
        padding: 12px;
    }

    table {
        border-collapse: collapse;
        margin: 0 auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    td,
    th {
        border: 2px solid black;
        padding: 4px;
        text-align: center;
        line-height: 0.4;
    }

    .day-time td{
        padding: 15px;
    }

    .center {
        filter: flipv fliph;
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        transform: rotate(-90deg);
        position: relative;
        white-space: nowrap;
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
            <li><a href="activity.php">กิจกรรม</a></li>
            <li class="current"><a href="learn.php">ตารางเรียน</a></li>

            <?php if (isset ($_SESSION['username'])) : ?>
                <p><strong><?php echo $_SESSION['username']; ?></strong></p>
                <p><a href="index.php?logout='1'">Logout</a></p>
            <?php endif ?>
        </ul>
    </section>

    <header>
        <div class="header-info">
            <h1>ภาคเรียนที่ 1 / 2566</h1>
        </div>
    </header>

    <table>

        <tr class="day-time">
            <td>เวลา </td>
            <td>07:50 - 08:20</td>
            <td>08:20 - 09:20</td>
            <td>09:20 - 10:20</td>
            <td>10:20 - 11:20</td>
            <td>11:20 - 12:20</td>
            <td>12:20 - 13:20</td>
            <td>13.20 - 14:20</td>
            <td>14:20 - 15:20</td>
            <td>15:20 - 16:20</td>
            <td>16:20 - 17:20</td>
            <td>17:20 - 18:20</td>
        </tr>
       
        <tr class="day-time">
            <td>วัน/คาบที่</td>
            <td rowspan="10" class="center" style="padding: 2px;"><b>กิจกรรมหน้าเสาธง</b></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td rowspan="10" class="center"><b>พักกลางวัน</b></td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>

        <tr>
            <td>จันทร์</td>
            <td colspan="4">
               <p>30900-0005</p>
               <p>1205</p>
               <p>ซูฟิยัน</p>
            </td>
            
            <td colspan="5">
                <p>30900-0002</p>
                <p>1205</p>
                <p>ฮาวาณี</p>
            </td>
        </tr>

        <tr>
            <td>อังคาร</td>
            <td colspan="2">
                <p>30000-1201</p>
                <p>4402</p>
                <p>GIDEON</p>
            </td>
            <td colspan="2">
                <p>30000-1101</p>
                <p>4302</p>
                <p>นูรฮูดา</p>
            </td>
            <td colspan="5">
                <p>30900-0003</p>
                <p>1205</p>
                <p>อิมรอน</p>
            </td>
        </tr>

        <tr>
            <td>พุธ</td>
            <td colspan="4">
                <p>30900-0001</p>
                <p>1205</p>
                <p>ธีระ</p>
            </td>
            <td colspan="1">
                <p>30900-0001</p>
                <p>1205</p>
                <p>ธีระ</p>
            </td>
            <td></td>
            <td colspan="2">
                <p>30000-2001</p>
                <p>0001</p>
                <p>ฟาดีละห์</p>
            </td>
            <td colspan="ๅ">
                <p>30900-0004</p>
                <p>1205</p>
                <p>มูฮามัดอัสรี</p>
            </td>
            
        </tr>

        <tr>
            <td>พฤหัสบดี</td>
            <td colspan="2">
                <p>30000-1201</p>
                <p>4402</p>
                <p>GIDEON</p>
            </td>
            <td colspan="1">
                <p>30000-1101</p>
                <p>4302</p>
                <p>นูรฮูดา</p>
            </td>
            <td></td>
            <td colspan="5">
                <p>30900-0004</p>
                <p>1205</p>
                <p>มูฮามัดอัสรี</p>
            </td>
        </tr>

        <tr>
            <td>ศุกร์</td>
            <td colspan="1">
                <p>30900-0005</p>
                <p>1205</p>
                <p>ซูฟิยัน</p>
             </td>
            <td></td>
            <td colspan="3">
                <p>30900-0006</p>
                <p>6302</p>
                <p>ซากินา</p>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <br><br><br>


    <footer>
        <p><b>66309010012@Abdulhafis Waemusor</b></p>
        <p><i>6 Yarang, ChabangTiko, Muang, Pattani, 94000</i></p>
    </footer>
</body>

</html>