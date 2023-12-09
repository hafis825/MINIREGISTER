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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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

    .body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .body-info {
        text-align: auto;
        padding: 1rem;
        width: 600px;
        height: 250px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        overflow-y: scroll;
    }

    marquee {
        position: relative;
        transition: all 1s ease;
    }

    .content {
        padding: 1rem;
        margin: 1rem;
        margin-left: 540px;
        margin-right: 540px;
        text-align: center;
        background-color: #333;
        color: #fff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px;
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
            <li class="current"><a href="index.php">หน้าแรก</a></li>
            <li><a href="profile.php">ประวัติส่วนตัว</a></li>
            <li><a href="activity.php">กิจกรรม</a></li>
            <li><a href="learn.php">ตารางเรียน</a></li>

            <?php if (isset ($_SESSION['username'])) : ?>
            <p><strong>
                    <?php echo $_SESSION['username']; ?>
                </strong></p>
            <p><a href="index.php?logout='1'">  Logout</a></p>
            <?php endif ?>
        </ul>
    </section>

    <header>
        <div class="header-info">
            <marquee behavior="scroll" direction="left">
                <h1>ยินดีต้อนรับ ผู้เข้าชมเว็บไซต์ ทุกท่าน</h1>
            </marquee>
        </div>
    </header>

    <section class="body">
        <div class="body-info">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nisi voluptates dolorem eaque tempore
                autem eos nihil recusandae nemo delectus quas, ipsum dignissimos repellat natus veniam! Doloribus sequi
                illum explicabo? Harum minima dolores aspernatur similique nostrum, repudiandae odio quo eveniet, porro,
                iste nisi aliquam mollitia iure rerum iusto labore maxime? Ut repellendus non pariatur, harum
                praesentium numquam molestiae distinctio quis iusto quidem saepe aliquam laudantium eveniet. Saepe quas
                eveniet accusamus laudantium cumque aliquam similique animi! Quidem ad quia recusandae aliquam vero?
                Error commodi quae dolor a voluptate facilis quo. Veniam aperiam eligendi blanditiis ducimus ipsum
                perferendis, consequuntur dolorum reiciendis aut sed rem, in similique? Dolore possimus tempora maiores
                rerum aspernatur temporibus, iusto inventore recusandae debitis cumque sit veniam itaque minus labore
                dolor voluptate voluptates, quia animi amet? Asperiores inventore explicabo, dignissimos laboriosam,
                numquam perferendis quis iure excepturi temporibus laudantium blanditiis possimus quod ut, commodi
                placeat? Odit tempora recusandae consequuntur, neque quisquam quae ut soluta? Sunt ut, ab aut alias
                quisquam ducimus dolore quis explicabo nemo iste exercitationem incidunt saepe pariatur maxime placeat
                facere harum atque nam non. Aperiam asperiores atque eius libero possimus, placeat quos. Ipsum
                reprehenderit maiores impedit, rem in, totam cumque fugiat mollitia modi molestiae suscipit explicabo
                ducimus ad debitis quidem omnis repudiandae maxime? Minima culpa, quos doloremque delectus laborum
                corrupti asperiores? Itaque, labore mollitia suscipit assumenda, porro optio vero illo nemo similique
                esse blanditiis placeat accusamus, dicta voluptas veniam quibusdam! Perferendis alias asperiores velit
                inventore rem ea, quod consequuntur itaque eos veniam. Quis repellat similique expedita sed id ullam
                quod, vel quasi natus dolores! Laborum tenetur doloremque possimus officiis exercitationem porro
                voluptate vitae distinctio illum ad accusamus nesciunt, repudiandae maxime, similique ipsam molestiae
                maiores dolore eaque, ducimus magni sapiente sit facere. Dolore culpa omnis est earum rem, sit
                recusandae. Error minima natus cumque, consequuntur laudantium quos animi eum et facere quo doloribus id
                doloremque suscipit reiciendis assumenda corporis labore esse earum maxime nam! Temporibus quisquam
                corporis assumenda voluptate quia mollitia tempora eos consequatur ex, natus deserunt exercitationem
                quam quasi quos fugit itaque quaerat illum? Expedita quam officia eum accusantium voluptatum distinctio
                non quo dignissimos, cum, quas fugiat tempore labore ipsum itaque molestiae a soluta quia sint
                aspernatur? Minus asperiores architecto vel labore sit consequatur ad eligendi tempore? Sequi vitae
                molestias rem est numquam dolorum sint debitis nesciunt enim odit ullam voluptates temporibus itaque ad
                repellendus, distinctio praesentium, officiis cupiditate facere error iste! Temporibus quibusdam optio
                dolorem ex suscipit nihil maxime sunt iusto ipsa. Dolorum unde est maxime sunt dolor nobis repellat quam
                quia. Eaque iure sint incidunt ipsum velit vel excepturi tenetur? Adipisci soluta eos, unde, in dolore
                non esse repellat rem officia totam ab amet culpa magni inventore temporibus? Cupiditate, voluptas
                labore nemo debitis eum pariatur rerum esse sed sit quis quos saepe earum dolor suscipit neque vero illo
                iste alias voluptatum facere aliquam ipsum distinctio quam eveniet. Eius, aliquid dolore. Quaerat
                dolorum sapiente pariatur laborum nulla est illo id! Iusto aut praesentium ducimus qui, quas incidunt
                quae soluta, laudantium tenetur libero eum asperiores repellendus accusamus?
            </p>
        </div>
    </section>

    <div class="content">

        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                </h3>
            </div>
        <?php endif ?>

    </div>




    <footer>
        <p><b>66309010012@Abdulhafis Waemusor</b></p>
        <p><i>6 Yarang, ChabangTiko, Muang, Pattani, 94000</i></p>
    </footer>

</body>

</html>