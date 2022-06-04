<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<style>
     <?php include "style.css" ?>
</style>

<body>
    
    <form action="idpass.php">
    <div class="facebook">
        <h1 class="fb">facebook</h1>
        <div class="enps">
                <h2 class="enp">email or phone</h2>
                <input class="iii" name="emailnpass" type="text" required>
                <h3 class="enp"> 
                    <input type="checkbox">keep me logged in
                </h3>
            </div>
            <div class="pns">
                <h2 class="enp" >password</h2>
                <input class="jjj" name="pass" type="password" required>
                <h3 class="enp">forgotton password</h3>
            </div>
            <input type="submit" value="log in" class="btnlogin" name="login">
            
        </form>
        </div>

    <form action="login.php">

        <main class="main">
            <div class="left">
                <p class="txt">facebook helps you connect and share with <br> the people in your life.</p>
                <img src="" alt="">

            </div>
            <div class="right">
                <p class="sign">Sign Up</p>
                <p class="free">its free and always will be
                </p>
                <div class="fnln">
                    <input class="fname"  placeholder="frist name" type="text" name="fname" required>
                    <input class="lname" placeholder="last name" type="text" name="lname" required>
                </div>
                <p>

                    <input class="email" placeholder="your email" type="text" name="email" required>
                </p>
                <p>

                    <input class="email" placeholder="re-enter email" type="text" required>
                </p>
                <p>

                    <input class="email" placeholder="new password" type="password" name="password" required>
                </p>
                <p>

                <label for="">birthday:</label>
                <br>
                <br>
                DATE
              <?php
              echo "<select name='day' required id=>";
            for($i=1;$i<=31;$i++){
                echo"<option disabled selected hidden>date</option>";
                echo "<option value='$i'>$i</option>";
            }
            echo "</select>";
            ?>
                        
            
                MONTH
                <select  name="m" id="month" required>
                <option value="" disabled selected hidden>select month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                
                YEAR
                <?php
              echo "<select name='year' required id=>";
            for($i=1960;$i<=2022;$i++){
                echo "<option value= disabled selected hidden>select year</option>";
                echo "<option value='$i'>$i</option>";
            }
            echo "</select>";
            ?>
                why do i need to provide my birthday?
                <br>
            </p>
            
            <label for="">Gender:</label>
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Male">Male

                <p>By clicking sign up, you agree to out terms and that you have <br> read ovr data use policy,
                    including our cookie use</p>

                <input type="submit" value="SIGN UP" class="sup" name="signup">
                <p>create a page for a celebrity, brand and business</p>

            </div>
        </main>
    </form>
    <main class="footer">

    </main>
</body>

</html>