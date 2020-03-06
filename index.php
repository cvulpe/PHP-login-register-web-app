<?php
    require "header.php";
?>

<main class="bgimage">
    <div class="main-wrapper">
        <section class="section-default">
            <?php
            if(isset($_SESSION['userId'])){
                echo" <p>You are logged in!</p>";
            }
            else{
                echo"<p>You are logged out!</p>";
            }
        ?>
        </section>
    </div>
</main>

<?php
    require"footer.php";
?>