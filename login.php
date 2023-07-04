<html>
    <body>
    <?php
    $fristname=$_GET['fname'];
    $lastname=$_GET['lname'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    $day=$_GET['day'];
    $mon=$_GET['m'];
    $year=$_GET['year'];
    $gender=$_GET['gender'];

   $connect2=mysqli_connect("localhost","root","","facebookclone");
   $adding="insert into login values('NULL','$email','$password','$day','$mon','$year','$gender','$fristname','$lastname')";
   $adding2=mysqli_query($connect2,$adding);

   header('Location: postpage.html');

    ?>

<!-- https://codemyui.com/15-amazing-free-ui-ux-kits/ -->
        
    </body>
</html>
