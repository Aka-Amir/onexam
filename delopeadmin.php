<?php 
    include_once "Includes/functions.php" ;
    $dir = HomeDir;
?>

<?php getHeader(); ?>

<?php 
    session_start();
    if(isset($_POST['usrname']) && !empty($_POST['usrname']) && $_POST['usrname'] == '@#!^') {
        $log = true;
    } else {
        header("LOCATION: $dir/404");
    }
?>


    <?php 
        if(isset($_POST['thecode']) && !empty($_POST['thecode'])) {
                $data = getData($_POST['thecode']);
                
                $txt = print_r($data, true);
                
                echo '<a href="result.txt">get it</a>';

                file_put_contents('result.txt', print_r($data, true));
        } else {
            echo 'enter';
        }
    ?>



    <form action="delopeadmin" method="POST">
        <input type="text" name='thecode'>
        <br>
        <input type="text" name="usrname">
        <button type="submit">submit</button>
    </form>
    
    
    

<?php getFooter(); ?>