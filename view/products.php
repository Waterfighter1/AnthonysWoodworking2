<div  id="banner" class="productBanner">
    <h2 class="bannerText" > View Our Product Catalogue </h2>
</div>

<div>
    <h1 class="contactTitle"> Anthony's Woodworking Creations <img src="images/favicon.png" class="titleImage"> </h1> 
</div>

<br>

<div class="pageLinkBar">
<?php

    header("Location:");
    
    $products = getProducts();

    $uniqueGenre = '';
    
    echo("<p id='linkTitle' class='pageLinks'> Genres: ");

    foreach($products as $product)
    {
        if ($product[5] != $uniqueGenre) {
            $displayName = $product[5] . 's';
            echo("<a class='pageLinks' href='#$product[5]'>$displayName</a>"); 

            $uniqueGenre = $product[5];
        }
    }
?>
</div>

<div id="products">
<?php
    $currentGenre = $products[0][5];
    $displayCurrentGenre = $currentGenre . "s";

    echo("<div id='$currentGenre' class='typeHolder'> <h1 class='typeHeader'> $displayCurrentGenre </h1>");

    foreach ($products as $product) {
       
        if ($product[5] != $currentGenre) {
            // Set the current genre to the book's genre
            $currentGenre = $product[5];
            // End the previous div and then start a new one with a new title that is the genre's name 
            echo("</div>  <hr class='typeBreak'> <div id='$product[5]' class='typeHolder'> <h1 class='typeHeader'> $product[5]s </h1>");
        }

        $displayPrice = '';
            
        if ($product[6] == "n/a") {
            $displayPrice = "Not Avaliable";
        }
        else {
            $displayPrice = "$". $product[6];
        }
        echo("
            <div class='productHolder'>
                <div class='productInfo'>

                        <h3 class='secHead'> $product[1] </h1>
                        <hr class='secHeadBreak'>
                        <p> $product[2] </p>
                        <br>
                        <p> Price: $displayPrice </p> 
                </div>

                <div class='productIcon'>
                    <img class='productImage' src='images/productImages/$product[4]'>
                </div>

                <div class='seeMore'>
                    <form action='' method='POST'> 
                        <input type='hidden' name='action' value='goProduct'> 
                        <input type='hidden' name='productID' value='$product[0]'> 
                        <input class='productLink' type='submit' value='See More'>
                    </form>
                </div>
            </div>
        ");
    }
        
    echo("</div></div>");
?>
</div>