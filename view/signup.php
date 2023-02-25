<br>
<br>
<br>
<br>
<br>

<div>
    <div id="logIn">
        <form action='' method='POST'>
            <h1 class="contactTitle"> Sign Up For A Subscriber Account! </h1>
            <hr class='secHeadBreak'>
            <br>
            <?php
                    if ($action == "trySignUp") {

                        
                        echo("<p class='centerTxt' class='secBody'> Invalid Username Already Taken </p> <br>");
                    }
                ?>
                <div class="formAlignment">
                    <label for="name"> NAME: </label>
                    <input class="loginInput" type="text" name="name">
                    <br>
                    <br>
                    <label for="email"> EMAIL: </label>
                    <input class="loginInput" type="email" name="email">
                    <br>
                    <br>
                    <label for="username"> USERNAME: </label>
                    <input class="loginInput" type="text" name="username">
                    <br>
                    <br>
                    <label for="username"> PASSWORD:  </label>
                    <input class="loginInput" type="password" name="password">
                    <input type='hidden' name='action' value='trySignUp'>
                </div>
                <br>
                <div class="formSubmit">
                    <input class="submitButton" type='submit' value='Sign Up!'>
                </div>
        </form>
    </div>
</div>