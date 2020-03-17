<?php include "Includes/functions.php"; ?>
<?php getHeader(); ?>

<?php session_start(); ?>
<?php 
    $x = random_int(1 , 85);
    $y = random_int(2 , 8);
    $res = $x + $y;
    
    $_SESSION['AntiSpam'] = $res;

?>
<div class="form">
    <div class="main">
        <form action="register" method="POST">

            <label for="fullname">نام و نام خانوادگی :‌</label><br>
            <input type="text" name="fullname" required>
            <br>
            <label for="passwd">رمز عبور :‌ <i class="fas fa-eye" id="eye" role="button" title="نشان دادن"></i>  </label>
            <br>
            <input type="password" name="passwd">
            <br>
            <input type="number" placeholder="<?php echo $x . '+' . $y; ?>" name="antispam" autocomplete="off" required> <br>
            <button type="submit">
                ثبت نام <i class="fa fa-user-plus"></i>
            </button>
        </form>
    </div>

    <div class="cont">
        <h3>
            <i class="fa fa-user-plus "></i>
            <br>
            <span>ثبت نام کاربر</span>
        </h3>
    </div>
</div>



<?php getFooter(); ?>