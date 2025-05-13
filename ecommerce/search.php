<?php
include("header.php");
?>
<body>
    <?php 
        if(isset($_POST["btnSearch"])){
            $search = $_POST["txtSearchName"];
            echo $search;

        }
    ?>
    
</body>
<?php
include("footer.php");
?>
