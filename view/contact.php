<!-- Banner sitting just under the nav bar and its image-->
<div id="banner" >
    <img class="hideImage" src="images/Welcome.png">
</div>

<!-- This is the title of the page and it's div-->
<div>
    <h1 class="contactTitle"> Anthony's Woodworking Creations <img src="images/favicon.png" class="titleImage"> </h1> 
</div>

<!-- Main Content (class to devide into sections evenly)-->
<div id="main" class="contactSections">

    <?php
        $contacts = getContacts();

        foreach ($contacts as $contact) {
            echo("
                <div class='contactMethodSection'>
                    <img class='contactTitles' src='$contact[2]'>
                    <p class='centerTxt'> $contact[3] </p>
                </div>  
            ");
        }
    ?>

</div>

<br>
<br>
<br>

<!-- This sits in the center, under the rest of the contact methods-->
<div class="center">
    <p class='secBody'> <span class="emphasized"> Feel free to reach out and inquire about our products, woodworker, or leave a review of what you recieved! </span></p>
</div> 