<?php
    $product = getProductsById(filter_input(INPUT_POST, 'productID'));
?>

<div  id="banner" class="productBanner">
    <h2 class="bannerText" > Viewing <?php echo("$product[1]")?> </h2>
</div>

<br>

<div class='productHolderMain'>
    <div class='productInfo'>
        <h3 class='secHead'> <?= $product[1] ?></h1>
        <hr class='secHeadBreak'>
        <p> <?= $product[2] ?> </p>
        <br>
        <p> 
            <?php 
                $displayPrice = '';
                if ($product[6] == "n/a"){
                    echo('Not Currently Avaliable');
                }    
                else {
                    echo('Price: $' . $product[6]);
                }   
            ?> 
        </p> 

        <?php
            if ($_SESSION['loggedIn'] != false) {
                echo(" 
                    <br>
                    <form action='' method='POST'> 
                        <input type='hidden' name='action' value='tryAddWatchList'> 
                        <input type='hidden' name='productID' value='$product[0]'> 
                        <input class='linkButton' type='submit' value='Add To Private Watch List'>
                    </form> 
                ");
            }

        ?>
        
    </div>

    <div class='productIcon'>
        <img class='productImage' src='images/productImages/<?=$product[4]?>'>
    </div>
</div>


