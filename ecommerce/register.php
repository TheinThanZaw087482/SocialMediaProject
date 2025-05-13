<?php
    include("header.php");
?>
<body>
    <div class="container">
        <div class="reg-img">
            <img src="images/loding_background.jpg" alt="" class="container_img">

        </div>
        <div class ="reg-form">
        <form action="" method ="post">
        <h2 class ="Register_title">Register</h2>
        <label for="" class="reg-lbl">User Name</label>
        <input type="text" class="reg-input" name = "txtuname" placeholder ="Enter Your Name" required>
        <br>
        <label for="" class="reg-lbl">Email</label>
        <input type="email" class="reg-input" name="txtemail" placeholder ="example@gmail.com" required>
        <br>
        <label for="" class="reg-lbl">Password</label>
        <input type="password" class="reg-input" name ="txtpass" placeholder ="Enter Password" required>
        <br>
        <label for="" class="reg-lbl">Confirm Password</label>
        <input type="password" class="reg-input" name ="txtcpass" placeholder ="Enter Confirm Password"required>
        <br>
        <input type="submit" value="Register" class="reg-btn" name ="btnRegister">
        <input type="reset" value="Cancel"  class="reg-btn">
        </div>
        
        </form>
    </div>
    <?php 
        if(isset($_POST['btnRegister'])){
            $username = $_POST['txtuname'];
            $email = $_POST['txtemail'];
            $pwd   = $_POST['txtpass'];
            $cpwd  =$_POST['txtcpass'];

            if($pwd != $cpwd)
                echo "<script>alert('Password and Confirm Password does not match')</script>";
            else{
                $sql = "select email from users where email='$email'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    echo "<script>alert('Email alredy exist')</script>";
                }else{
                    $sql = "insert into users(username,email,password) values('$username','$email','$pwd')";
                    mysqli_query($conn,$sql);
                    header('location:login.php');
                }
            }   
        }
    ?>

    
</body>
<?php
    include("footer.php")
?>
</html>