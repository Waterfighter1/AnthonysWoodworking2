<?php
    $user = $_SESSION['loggedIn'];

?>

<nav>
    <div id="nav">
        <!-- Links ( Left Side Aligned )-->
        
        <div id="navLinks">
            <div class="linkDiv">
                <form action='' method='POST'> 
                    <input type='hidden' name='action' value='goHome'> 
                    <input class="linkButton" type='submit' value='Home'>
                </form>
            </div>

            <div class="linkDiv">
                <form action='' method='POST'> 
                    <input type='hidden' name='action' value='goProducts'> 
                    <input class="linkButton" type='submit' value='Products'>
                </form>
            </div>

            <div class="linkDiv">
                <form action='' method='POST'> 
                    <input type='hidden' name='action' value='goContact'> 
                    <input class="linkButton" type='submit' value='Contact Us'>
                </form>
            </div>
            <?php
                if ($_SESSION['loggedIn'] != false) {
                    echo("
                    <div class='linkDiv'>
                        <form action='' method='POST'> 
                            <input type='hidden' name='action' value='goProfile'> 
                            <input class='linkButton' type='submit' value='Profile'>
                        </form>
                    </div>"
                    );
                }

                if ($_SESSION['loggedIn'] == false) {
                    echo(" 
                        <div class='linkDiv'>
                            <form action='' method='POST'> 
                            <input type='hidden' name='action' value='goLogIn'> 
                            <input class='linkButton' type='submit' value='Log In'>
                            </form>
                        </div>
                    ");
                }
                else {
                    echo("
                        <div class='linkDiv'>
                            <form action='' method='POST'> 
                            <input type='hidden' name='action' value='goLogOut'> 
                            <input class='linkButton' type='submit' value='Log Out'>
                            </form>
                        </div>
                    ");
                }
            ?>
        </div>

        <!-- Icons ( Right Side Aligned )-->
        <div id="navIcons">
            <img src="images/favicon.png" id="navIcon" alt="logo">
        </div>

    </div>
</nav>