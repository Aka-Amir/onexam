<?php include_once 'Includes/functions.php'; ?>

<?php 

$dir = HomeDir;
    if(!isset($_POST['subject'])) {
        header("LOCATION: $dir");
    } elseif(isset($_POST['subject']) && empty($_POST['subject'])) {
        redirect("$dir/panel" , 'عنوان درس را وارد کنید');
    }
?>


<?php getHeader(); ?>

    <?php getTemplate('Templates/addQ.php'); ?>
    
<?php getFooter(); ?>