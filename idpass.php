<html> 
    <body>
        <?php
        $id=$_GET['emailnpass'];
        $pass=$_GET['pass'];

        $connect5=mysqli_connect("localhost","root","","facebookclone");
        $idpassword="select * from login where username='$id' && password='$pass'";
        $check=mysqli_query($connect5,$idpassword);
         
        

        $count1=mysqli_num_rows($check);
        if($count1==1){
            echo "<script>alert('welcome to facebook')</script><script>window.location='postpage.html'</script>";
        }
        else{
            echo "<script>alert('incorrect id password')</script><script>window.location='index.php'</script>";
        }
        ?>
    </body>
</html>