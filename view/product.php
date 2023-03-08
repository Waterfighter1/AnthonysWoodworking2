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
        
    </div>

    <div class='productIcon'>
        <img class='productImage' src='images/productImages/<?=$product[4]?>'>
    </div>
</div>


