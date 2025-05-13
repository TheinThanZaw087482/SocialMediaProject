<?php
include("header.php");
?>

<body>
    <?php
    $pid = $_GET['id'];
    $sql = "select * from pagoda where pogoda_id= $pid";
    $result =  mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $hcount = 0;
    $tcount = 0;
    if (isset($_POST['btnHeart']) && isset($_SESSION['userid'])) {
        $uid = $_SESSION['userid'];
        $sql1 = "Select * from react where userid=$uid and pogoda_id=$pid";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) == 0) {
            $sql2 = "insert into react(userid,pogoda_id,type) values($uid,$pid,'heart')";
            mysqli_query($conn, $sql2);
        }
    }
     elseif (isset($_POST['btnThumb']) && isset($_SESSION['userid'])) {
        $uid = $_SESSION['userid'];
        $sql1 = "Select * from react where userid=$uid and pogoda_id=$pid";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) == 0) {
            $sql2 = "insert into react(userid,pogoda_id,type) values($uid,$pid,'thumb')";
            mysqli_query($conn, $sql2);
        }
    }
    $sql3 = "select count(*) as count from react where pogoda_id=$pid and type ='heart'";
    $hdata = mysqli_query($conn, $sql3);
    $row1  = mysqli_fetch_assoc($hdata);
    $hcount = $row1['count'];

    $sql4 = "select count(*) as count from react where pogoda_id=$pid and type ='thumb'";
    $tdata = mysqli_query($conn, $sql4);
    $row2  = mysqli_fetch_assoc($tdata);
    $tcount = $row2['count'];

    ?>
    <form action="" method="post">
        <div class="pagoda_container">
            <div class="img_view">
                <img src="images/<?= $row['image_name'] ?>" alt="" class="PdetailImg">
            </div>
            <div class="pagoda_text">
                <h4><?= $row['desc_detail'] ?></h4>
                <h4 class="plocation"><?= $row['Location'] ?></h4>
                <button class="btn_reaction_icon" name="btnHeart">
                    <i class="fa fa-heart card_icon fa-lg"></i>
                    <?php if ($hcount > 0) echo $hcount ?>
                </button>
                <button class="btn_reaction_icon" name="btnThumb"><i class="fa fa-thumbs-up card_icon fa-lg"></i><?php if ($tcount > 0) echo $tcount ?></button>
            </div>
        </div>
    </form>
    
    

</body>
<?php
include("footer.php");
?>