<?php
    require 'header.php';
?>

<main>
    <div class="main-wrapper">
        <section class="hero">
            <div class="form-head">
                <h1>Sign UP</h1>
            </div>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class="signup-error">Please fill in all the necesary fields!</p>';
                    }
                    else if($_GET['error'] == "invaliduidmail"){
                        echo '<p class="signup-error">Invalid username and email address!</p>';
                    }
                    else if($_GET['error'] == "invaliduid"){
                        echo '<p class="signup-error">Invalid username!</p>';
                    }
                    else if($_GET['error'] == "invalidemail"){
                        echo '<p class="signup-error">Invalid email address!</p>';
                    }
                    else if($_GET['error'] == "passwordcheck"){
                        echo '<p class="signup-error">Your passwords do not match!</p>';
                    }
                    else if($_GET['error'] == "usertaken"){
                        echo '<p class="signup-error">Username is already in used!</p>';
                    }
                }
                // else if($_GET['signup'] == 'success'){
                //     echo '<p class="signup-success">Sign Up succsesfully!</p>';
                // }
            ?>
            <div class="form-wrapper">
                <form class="signup-form" action="includes/signup.inc.php" method="POST">
                    <div class="reg-inp"><input class="signup-input" type="text" name="uid" placeholder="Username:"
                            value="">
                        <i class="fa fa-user fa-lg fa-fw"></i>
                    </div>
                    <div class="reg-inp"><input class="signup-input" type="text" name="email" placeholder="Email:"
                            value="">
                        <i class="fa fa-envelope fa-lg fa-fw"></i>
                    </div>
                    <div class="reg-inp"><input class="signup-input" type="password" name="pwd" placeholder="Password:"
                            value="">
                        <i class="fas fa-key fa-lg fa-fw"></i>
                    </div>
                    <div class="reg-inp"><input class="signup-input" type="password" name="pwd-repeat"
                            placeholder="Repeat password:" value="">
                        <i class="fas fa-key fa-lg fa-fw"></i>
                    </div>
                    <button class="reg-sub" type="submit" name="signup-submit">Signup</button>
                </form>
            </div>
        </section>
    </div>
</main>

<?php
    require"footer.php";
?>