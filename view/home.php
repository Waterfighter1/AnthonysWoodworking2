 <!-- Banner that stretches just under the navigation bar -->
 <div  id="banner" class="homeBanner">
    <h2 class="bannerText" > Find Hand-made wooden projects </h2>
    <form action='' method='POST'> 
            <input type='hidden' name='action' value='goProducts'> 
            <input class="bannerLink" type='submit' value='Click Here To Look Now'>
    </form>
</div>

<!-- This is the title of the page and it's div-->
<div>
    <h1 class="contactTitle"> Anthony's Woodworking Creations <img src="images/favicon.png" class="titleImage"> </h1> 
</div>

<div id="main">
    <div class="multipleContent">
        <div class="set3_side">
            <?php createSection("Our Creator"," Our woodworker, Anthony, is the sole creator of our products. Based in Fair Grove, he taught himself most of what he knows about woodworking. While he may be new in the community, he is excited about reaching out and listening to advice, tips, and critisim from all who wish to give it.", 'secBody') ?>
        </div>


        <div class="set3_cent">
            <?php createSection("What Is This Site? "," Welcome to our landing page! This website serves as the contact point for our company, <b> Anthony's Woodworking Creators (AWC) </b>. Find info about us and our products by navigating our page. To hear about navigating this site, see the section labeled 'Look Around' on your right.
                If you experience any issues with this site, contact us by visiting our 'Contact Us' tab. 
                <img class='logo' src='./images/favicon.png' alt='logo'>
                Now, about our company. We dedicate ourselves to creating hand-crafted wooden projects ranging from decorative paperweights to functional bowls. Our woodworker constructs all projects who come through our site and shop. If you wish to learn more about him, you can learn more in the splash of text on your left.", 'secBody') ?>
        </div>


        <div class="set3_side">
            <?php createSection("Look Around","Need Help Navigating? No Problem. Along the top of the screen is our navigation menu. Each tab on there has its purpose. Each tab does exactly as it is named. Home brings you home, Contact Us shows you the info on how to communicate with us. Products displays our catalog. and finally, Log In allows you to log into your account, or make one if you're a new user!", 'secBody');?>
        </div>
    </div>

    <div id="spotLight">
        <div class="spotHeader">
            <div class="secAnnouce">
                <div class='secHeader'>
                    <hr class="headBuffer">
                    <h3 id="annouce" class="secHead"> Our Weekly Spotlight </h3>
                    <hr class="headBuffer">
                </div>
            </div>

            <?php
                $spotLight = getWeeklySpotlight();
                echo("<h1 class='spotLightName'>  $spotLight[1] </h1>");
            ?>
        </div>
    </div>
</div>
