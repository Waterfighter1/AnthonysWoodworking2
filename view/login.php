<br>
<br>
<br>
<br>
<br>

<div>
    <div id="logIn">
        <form action='' method='POST'>
            <h1 class="contactTitle"> Log In To Your Subscriber Account </h1>
            <hr class='secHeadBreak'>
            <br>
            <?php
                    if ($action == "tryLogIn") {
                        echo("<p class='centerTxt' class='secBody'> Failed. Invalid Username or Password </p> <br>");
                    }
                ?>
                <div class="formAlignment">
                    <label for="username"> USERNAME: </label>
                    <input class="loginInput" type="text" name="username">
                    <br>
                    <br>
                    <label for="username"> PASSWORD:  </label>
                    <input class="loginInput" type="password" name="password">
                    <input type='hidden' name='action' value='tryLogIn'>
                </div>
                <br>
                <div class="formSubmit">
                    <input class="submitButton" type='submit' value='Log In'>
                </div>
        </form>
        
        <br>
        <br>

        <div>
            <form action='' method='POST'> 
                <input class="absolute" type='hidden' name='action' value='goSignIn'>
                <p class="centerTxt"> Don't Have A Subscriber Account?  <input class="signUp" type='submit' value='Sign Up Here!'> </p>
                <p class="centerTxt"> <i> Signing up allows you to favorite products, comment on products, and reach out to our creator! </i> </p>
            </form>
        </div>
    </div>
</div>