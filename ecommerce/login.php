<?php
    include("header.php");
?>
<body>
<?php
    if(isset($_POST['Login'])){
        $email = $_POST['txtemail'];
        $pwd = $_POST['txtpass'];
        $sql = "select * from users where 	email='$email'"; 
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $sql1="select * from users where 	email='$email' and password ='$pwd'";
            $data = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($data)>0){
                $user_id = mysqli_fetch_assoc($data);
                $_SESSION['userid'] = $user_id['userid'];

                header('Location: home.php');
                echo "<script>alert('Succeful login')</script>";
            }else{
                echo "<script>alert('Worng Password')</script>";
            }
        }else{
            echo "<script>alert('Email acoount does not exist')</script>";

        }

    }
    ?>
    <div class="container">
        <div class ="reg-form">
        <form action="" method ="post">
        <h2 class ="Register_title">Login</h2>
       
        <label for="" class="reg-lbl">Email</label>
        <input type="email" class="reg-input" name="txtemail" placeholder ="example@gmail.com" required>
        <br>
        <label for="" class="reg-lbl">Password</label>
        <input type="password" class="reg-input" name ="txtpass" placeholder ="Enter Password" required>
        <br>
        
        <input type="submit" value="Login" class="btn_login" name ="Login">
        <input type="reset" value="Cancel"  class="reg-btn">
        </div>
        <div class="reg-img">
            <img src="images/loding_background.jpg" alt="" class="container_img">

        </div>
        
        </form>
    </div>
  
    
   
    
</body>