<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
    <header class="header">

        <sectio0n class="flex">

            <a href="dashboard.php" class="logo">Admin</a>

            <form action="search_course.php" method="post" class="search-form">
                <input type="text" name="search_course" placeholder="search courses" required maxlength="100">
                <button type="submit" class="fas fa-search" name="search_course_btn"></button>
            </form>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <div id="search-btn" class="fas fa-search"></div>
                <div id="user-btn" class="fas fa-user"></div>
                <div id="toggle-btn" class="fas fa-sun"></div>
            </div>

            <div class="profile">
                <?php
                $select_profile = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");

                $select_profile->execute([$tutor_id]);
                if ($select_profile->rowCount() >  0) {
                    $fetcht_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

                ?>
                    <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
                    <h3><?= $fetch_profile['name'] ?></h3>
                    <span><?= $fetch_profile['profession'] ?></span>
                    <a href="profile.html" class="btn">View Profile</a>

                    <div class="flex-btn">
                        <a href="login.php" class="option-btn"></a>
                        <a href="register.php" class="option-btn"></a>
                    </div>

                    <a href="../components/admin_logout.php" onclick="return confirm('Do you want to log out')" class="delete-btn">logout</a>
                <?php
                } else {
                ?>
                    <h3 style="text-align: center;">Login</h3>
                    <div class="flex-btn">
                        <a href="login.php" class="option-btn">Login</a>
                        <a href="register.php" class="option-btn">Register</a>
                    </div>
                <?php } ?>
            </div>
            </section>
    </header>


    <div class="side-bar">

        <div class="close-side-bar">
            <i class="fas fa-times"></i>
        </div>

        <div class="profile">
            <?php
            $select_profile = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
            $select_profile->execute([$tutor_id]);
            if ($select_profile->rowCount() > 0) {
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
                <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
                <h3><?= $fetch_profile['name']; ?></h3>
                <span><?= $fetch_profile['profession']; ?></span>
                <a href="profile.php" class="btn">view profile</a>
            <?php
            } else {
            ?>
                <h3>please login or register</h3>
                <div class="flex-btn">
                    <a href="login.php" class="option-btn">login</a>
                    <a href="register.php" class="option-btn">register</a>
                </div>
            <?php
            }
            ?>
        </div>

        <nav class="navbar">
            <a href="dashboard.php"><i class="fas fa-home"></i><span>Home</span></a>
            <a href="playlists.php"><i class="fa-solid fa-bars-staggered"></i><span>Playlists</span></a>
            <a href="contents.php"><i class="fas fa-graduation-cap"></i><span>Contents</span></a>
            <a href="comments.php"><i class="fas fa-comment"></i><span>Comments</span></a>
            <a href="../components/admin_logout.php" onclick="return confirm('Want to logout?');"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
        </nav>
    </div>
</body>

</html>