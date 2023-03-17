<br>
<br>
<br>

<div class="profileBoard">
    <h2 class="profileWelcome"> Welcome, <?php echo($_SESSION['loggedIn'][1]); ?> </h2>
    <hr class='secHeadBreak'>
    <div class="itemContainer">
        <div class='profileInfo'>
           
            <div class='textAlign'>
                <p class="secHead"> Your Information: </p>
                <br>
                <?php
                echo("<p class='alignLeft'> User ID: " . $_SESSION['loggedIn'][0]. " </p>");

                echo("<br>");

                echo("<p class='alignLeft'> User's Name: " . $_SESSION['loggedIn'][1]. " </p>");

                echo("<br>");

                echo("<p class='alignLeft'> User's Email: " . $_SESSION['loggedIn'][2]. " </p>");

                echo("<br>");

                echo("<p class='alignLeft'> Username: " . $_SESSION['loggedIn'][4]. " </p>");

                ?>
            </div>
        </div>
        <div class='profileFavorites'>
            <div class='textAlign'>
                <p class="secHead"> Your Watchlist: </p>

                <?php
                    $productFavorites = getUsersFavorites($_SESSION['loggedIn'][0]);
                    $products = [];

                    foreach($productFavorites as $prod) {
                        $products[count($products)] = getProductsById($prod);
                    }

                    
                    foreach($products as $prod) {
                        echo("  <form action='' method='POST'> 
                                    <input type='hidden' name='action' value='goProduct'> 
                                    <input type='hidden' name='productID' value='$prod[0]'> 
                                    <input class='favoriteLink' type='submit' value='$prod[1]'>
                                </form>
                        ");
                    }
                ?>
            </div>
        </div>
    </div>
</div>

