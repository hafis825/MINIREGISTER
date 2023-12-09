<?php 
    session_start();
    include('server.php');
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
    }

    .login {
        /* border: 1px solid red; */
        margin: 0 auto;
        max-width: 850px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        outline: none;
        border-radius: 5px;
    }

    button {
        background-color: #ca602f;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
        transition: 0.3s;
    }

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



    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    .container a {
        color: #ca602f;
    }


    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
</style>

<body>
    <!-- <section class="header">
        <div class="head-menu">
            <h1><a href="index.html">Mini Project Website (30900-0001)</a></h1>
        </div>
        <ul class="nav-links">
            <li><a href="home.html">หน้าแรก</a></li>
            <li><a href="profile.html">ประวัติส่วนตัว</a></li>
            <li><a href="activity.html">กิจกรรม</a></li>
            <li><a href="learn.html">ตารางเรียน</a></li>
            <li><a href="member.html">สมัครสมาชิก</a></li>
            <li class="current"><a href="admin.html">ผู้ดูแลระบบ</a></li>
        </ul>
    </section> -->

    <header>
        <div class="header-info">
            <h1>FOR LOGIN</h1>
        </div>
    </header>

    <section class="login">
        <div class="container">
            <form action="login_db.php" method="post">
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h3>
                            <?php
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                        </h3>
                    </div>
                <?php endif ?>
                <div class="input-group">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                </div>

                <div class="input-group">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                </div>
                
                <div class="input-group">
                <button type="submit" name="login_user" class="btn">Login</button>
                </div>
                
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                
                
            
            
            </form>
        </div>        

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw">Not yet a member? <a href="register.php">Sing up</a></span>
                </div>
        
    </section>




    <!-- <footer>
        <p><b>66309010012@Abdulhafis Waemusor</b></p>
        <p><i>6 Yarang, ChabangTiko, Muang, Pattani, 94000</i></p>
    </footer> -->
</body>

</html>