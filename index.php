<!DOCTYPE html>
<html lang="en">
<script>
    if( window.history.replaceState ) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php 
    include('data/functions.php');
    $action = filter_input(INPUT_POST, 'action');
    session_start();

    if ($action == 'goLogOut') {
        $action = "goLogIn";
        $_SESSION['loggedIn'] = false;
    }
    else if ($action == 'tryLogIn') {
        $attempt = attemptLogIn(filter_input(INPUT_POST, 'username'), filter_input(INPUT_POST, 'password'));
        if ($attempt != "Failed") {
            $_SESSION['loggedIn'] = $attempt;
            $action = 'goProfile';
        }
    }
    else if ($action == 'trySignUp') {
        $attempt = attemptSignUp(filter_input(INPUT_POST, 'username'), filter_input(INPUT_POST, 'password'), filter_input(INPUT_POST, 'email'));
        if ($attempt == 'Passed') {
            $createdID = createUser(filter_input(INPUT_POST, 'name'),filter_input(INPUT_POST, 'username'), filter_input(INPUT_POST, 'password'), filter_input(INPUT_POST, 'email'));
            $_SESSION['loggedIn'] = $createdID;
            $action = 'goProfile';
        }
    }

    if (empty($_SESSION['loggedIn'])) { 
        $_SESSION['loggedIn'] = false;
    }

    include('view/components/header.php');
    echo("<body>");

    switch($action) {
        case 'tryLogIn':
            $_POST['action'] == 'goLogIn';
        case 'goLogIn':
            include("view/login.php");
            break;
        case 'goSubscribe':
            include("view/subscribe.php");
            break;
        case 'goContact':
            include("view/contact.php");
            break;
        case 'tryAddWatchList':
            addToWatchList($_SESSION['loggedIn'][0], $_POST['productID']);
            $_POST['action'] == 'goProfile';
        case 'goProfile':
            include("view/profile.php");
            break;
        case 'goProduct':
            include("view/product.php");
            break;
        case 'goProducts':
            include("view/products.php");
            break;
        case 'trySignUp':
            $_POST['action'] == 'goSignIn';
        case 'goSignIn':
            include("view/signup.php");
            break;
        case '':
        case "goHome":
        default:
            include ("view/home.php");
    }
?>
</body>
</html>
<!-- Website Created and Programmed by Chloe Madison Gertner -->