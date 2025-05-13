<?php
include("header.php");
?>
<body>
    <div class="pcontainer">
        <?php
            $sql ="select * from pagoda";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){?>
            <div class="pcard">
                <img src="images/<?= $row['image_name']?>" alt="" class="pcard_img">
                <h3 class="card_text"> <?= $row['name']?></h3>
                <p class="Pdescription"> <?= $row['description']?></p>
                <a href="pagoda_view.php?id=<?= $row['pogoda_id']?>" class="readmore">Readmore</a>

                
            </div>
            <?php }
            ?>

           
    </div>
    
</body>
<?php
include("footer.php");
?>
