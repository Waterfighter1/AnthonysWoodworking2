<!-- Banner sitting just under the nav bar and its image-->
<div id="banner" class="contactBanner">
    <h2 class="bannerText" > How To Reach Out To AWC! </h2>
    <!-- <img class="bannerArrow" src="./images/Arrow.png"> -->
</div>

<!-- This is the title of the page and it's div-->
<div>
    <h1 class="contactTitle"> Anthony's Woodworking Creations <img src="images/favicon.png" class="titleImage"> </h1> 
</div>

<br>

<!-- Main Content (class to devide into sections evenly)-->
<div id="main" class="contactSections">

    <?php
        $contacts = getContacts();

        foreach ($contacts as $contact) {
            echo("<div class='set3_side'> ");

            createSection($contact[1],"$contact[3]", 'contactText');
        
            echo("</div>");
        }
    ?>

</div>

<br>
<br>
<br>

<!-- This sits in the center, under the rest of the contact methods-->
<div class="center">
    <p class='contactText'> <span class="emphasized"> Feel free to reach out and inquire about our products, woodworker, or leave a review of what you recieved! </span></p>
</div> 