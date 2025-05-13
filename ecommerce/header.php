<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelling</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<nav>
    <img src="images/logo.gif" alt="" class="logo_image">
    <a href="home.php" class="nav_link"><i class="fa fa-home"></i> Home</a>
    <a href="padagoda.php" class="nav_link">Popular Pagoda</a>
    <a href="place.php" class="nav_link">Famous Place</a>
    <a href="contactus.php" class="nav_link"><i class="fa fa-envelope"></i> Contacts Us</a>
    <a href="aboutus.php" class="nav_link"><i class="fa fa-envelope"></i> About Us</a>
    <form action="search.php" method= "post">
        <input type="text" name="txtSearchName" placeholder="Search...." class="search">
        <button class="btnSearch" name="btnSearch">Search</button>
    </form>
    

    <?php
    include("DbConfig.php");
    session_start();
    if (isset($_SESSION['userid'])) {
        $uid = $_SESSION['userid'];
        $sql = "SELECT * FROM users WHERE userid = $uid";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result); ?>
        <a href="#" class="profile">
            <img src="images/film-movie-movies-poster-wallpaper-preview.jpg" alt="" class="profile_img">
            <?= ($user['username']); ?>
        </a>
        <a href="logout.php" class="btnLogout"><i class="fa fa-sign-out"></i> Logout</a>
    <?php } else { ?>
        <a href="login.php" class="nav_link"><i class="fa fa-user"></i> Sign in</a>
        <a href="register.php" class="nav_link"><i class="fa fa-user-plus"></i> Sign up</a>
    <?php } ?>
</nav>
</head>

</html>