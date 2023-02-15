<!DOCTYPE html>
<html lang="en">
<?php 
    include('view/components/header.php');
    include('data/functions.php');
    echo("<body>");

    switch($action) {
        case 'goSubscribe':
            include("view/subscribe.php");
            break;
        case 'goContact':
            include("view/contact.php");
            break;
        case "goHome":
        default:
            include ("view/home.php");
    }
?>
</body>
</html>
<!-- Website Created and Programmed by Chloe Madison Gertner -->