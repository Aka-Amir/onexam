<?php include_once "Includes/functions.php"; ?>
<?php getHeader() ?>
<?php 
    $dir = HomeDir;
    session_start();
?>
<?php if(isset($_SESSION['LoggedIn']) && !empty($_SESSION['LoggedIn']) && $_SESSION["LoggedIn"] == 1): ?>
    <?php if(isset($_SESSION['userData']) && !empty($_SESSION['userData'])): ?>
        <?php 
        $userData = $_SESSION['userData'];
        else :
            $dir = HomeDir;
            echo "<script> GoTo('$dir/Login' , 'لطفا دوباره وارد شوید') </script>"
            ?>
    <?php endif;?>

    <?php if($userData['role'] == 'teacher'): ?>
    <?php getTemplate('Templates/TeacherPanel-T.php'); ?>
    <?php elseif($userData['role'] == 'student'): ?>
        <?php getTemplate('Templates/StudentPanel-T.php')?>
    <?php else :  ?>
        <?php 
        echo "<script> GoTo('$dir/Login' , 'لطفا دوباره وارد شوید') </script>";
            ?>
    <?php endif; ?>

<?php else: /* Loggin Form */ ?>
    <?php 
        /*
         * cheking Form
         */
        if(isset($_SESSION['AntiSpam']) && !empty($_SESSION['AntiSpam'])) {
            $anti = $_SESSION['AntiSpam'];
            $filled = true;
            $inputs = array('username' , 'password' , 'role' , 'antispam') ;
            $userData = checkInputs($inputs);
            if($userData == null) {
                echo "<script> GoTo('$dir/Login' , 'لطفا تمام فیلد ها را پر کنید') </script>";
            }
            if($anti == $userData['antispam']) {
                $_SESSION['userData'] = $userData;
                $_SESSION["LoggedIn"] = 1;
            } else {
                echo "<script> GoTo('$dir/Login' , 'جواب معادله اشتباه است لطفا دوباره تلاش کنید') </script>";
            }
        } else {
            echo "<script> GoTo('$dir/Login' , 'لطفا دوباره وارد شوید') </script>";
        }
        ?>
not logged   

<?php endif; ?>

<?php getFooter() ?>