<?php include_once "Includes/functions.php"; ?>
<?php getHeader() ?>
<?php session_start(); ?>
<?php 
    $x = random_int(1 , 85);
    $y = random_int(2 , 8);
    $res = $x + $y;
    $_SESSION['AntiSpam'] = $res;

?>
<div class="form">
    <div class="main">
        <form action="panel" method="POST">
            <label for="username">نام کاربری </label> <br>
            <input type="text" name="username" autocomplete="off" required> <br>
            <label for="password">رمز عبور</label> <br>
            <input type="password" name="password" autocomplete="off" required> <br>
            <input type="number" placeholder="<?php echo $x . '+' . $y; ?>" name="antispam" autocomplete="off" required> <br>
            <input type="radio" name="role" value="student" required> 
            <label for="role">
               
            دانش آموز

            
        </label>
            <br>
            <input type="radio" name="role" value="teacher" required>
            <label for="role">
                 معلم
                 
            </label>
            <br>
            <button type="submit">ورود</button>
        </form>
    </div>

    <div class="cont">
        <h3>
            <i class="fa fa-user "></i>
            <br>
            <span>ورود کاربر</span>
        </h3>
    </div>
</div>


<?php getFooter() ?>