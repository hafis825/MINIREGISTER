<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
    header {
        /* border: 1px solid red; */
        padding: 1rem;
        ;
        padding-bottom: 0.2px;
    }

    .reg {
        /* border: 1px solid red; */
        background-color: rgba(211, 211, 211, 1);
        position: relative;
        max-width: 900px;
        width: 100%;
        padding: 20px;
        margin: 0 15px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 1);
        border-radius: 5px;
    }

    .body-info {
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 900px;
        max-height: 650px;
        margin: 0 auto;
    }

    .body-info form {
        /* border: 1px solid red; */
        position: relative;
        margin: 16px;
        min-height: 490px;
        background-color: rgb(211, 211, 211);
    }

    .body-info form .form-id {
        margin-top: 10px;
    }

    .body-info form .title {
        display: block;
        margin-bottom: 8px;
        font-size: 20px;
        font-weight: 500;
        margin: 6px 0;
        color: #333;
    }

    .body-info form .form-group {
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .body-info form .form-input {
        display: flex;
        width: calc(100% / 3 - 15px);
        flex-direction: column;
        margin: 4px 0;
    }

    .form-input label {
        font-size: 12px;
        font-weight: 500px;
        color: #333;
    }

    .form-input input {
        outline: none;
        font-size: 14px;
        font-weight: 400;
        color: #333;
        height: 42px;
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
    }

    .body-info form button {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 45px;
        max-width: 200px;
        width: 100%;
        border: none;
        outline: none;
        color: white;
        border-radius: 5px;
        margin: 8px 0;
        background-color: #ca602f;
        transition: all 0.4s linear;
        cursor: pointer;
        float: right;
        transition: 0.3s;
    }

    .body-info form button {
        font-size: 14px;
        font-weight: 400;
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

    .form-radio {
        font-size: 12px;
        font-weight: 500px;
        color: #333;
    }

    .form-radio input {
        width: 0;
        height: 0;
        position: absolute;
        left: -9999px;
        /* border: 1px solid red; */
    }

    .form-radio input+label {
        margin: 0px;
        padding: 12px 8px;
        width: 64px;
        height: 50px;
        box-sizing: border-box;
        position: relative;
        display: inline-block;
        text-align: center;
        border: 1px solid #ebebeb;
        background-color: #FFF;
        font-size: 14px;
        font-weight: 600;
        color: #888;
        text-align: center;
        text-transform: none;
        transition: border-color .15s ease-out, color .25s ease-out, background-color .15s ease-out, box-shadow .15s ease-out;
        border-radius: 5px;
    }

    .form-radio input:checked+label {
        background-color: #ca602f;
        color: #FFF;
        border-color: #ca602f;
        z-index: 1;
    }

    .form-radio input:focus+label {
        outline: none;
    }

    .form-radio input:hover {
        background-color: #ca602f;
        color: #FFF;
        border-color: #ca602f;
    }

    .form-select a {
        color: #ca602f;
    }

    .form-login a {
        color: #ca602f;
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
            <li class="current"><a href="member.html">สมัครสมาชิก</a></li>
            <li><a href="admin.html">ผู้ดูแลระบบ</a></li>
        </ul>
    </section> -->

    <header>
        <div class="header-info">
            <h1>สมัครสมาชิกใช้งาน</h1>
        </div>
    </header>
    <section class="body-info">
        <div class="reg">
            <form action="register_db.php" method="post">
                <?php include('errors.php'); ?>
                
                <div class="form-first">
                    <span class="title"><b>รายละเอียดบัญชี้ผู้ใช้งาน</b></span>
                    <div class="form-group">
                        <div class="form-input">
                             <label for="first_name">Username</label>
                             <input type="text" name="username" placeholder="Enter your Username" required />
                         </div>    

                        <div class="form-input">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter your email" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-input">
                            <label>password</label>
                            <input type="password" name="password_1" placeholder="Enter your Password" required />
                        </div>
                        <div class="form-input">
                            <label>Repeat your password</label>
                            <input type="password" name="password_2" placeholder="Enter your Password" required />
                        </div>
                    </div>

                
                </div>

                <div class="form-second">
                    <div class="form-id">
                        
                        <hr color="#333">

                        <div class="form-select">
                            <input type="checkbox" placeholder="Enter your Postal Code" required />
                            <label for="first_name">I accept the <a href="#">Privacy Policy for W3Docs.</a></label>
                            <span class="checkmark"></span>
                        </div>

                        <div class="form-select">
                            <input type="checkbox" placeholder="Enter your Postal Code" required />
                            <label for="first_name">I want to recelve personallzed offers by your site</a></label>
                            <span class="checkmark"></span>
                        </div>

                        <div class="form-login">
                            <p>Already a member? <a href="login.php">Sing in</a></p>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="reg_user" class="btn">Register</button>
                        </div>
                        

                    </div>
                </div>
            </form>
        </div>
    </section>

    <br><br><br><br><br><br><br>

    <!-- <footer>
        <p><b>66309010012@Abdulhafis Waemusor</b></p>
        <p><i>6 Yarang, ChabangTiko, Muang, Pattani, 94000</i></p>
    </footer> -->
</body>

</html>