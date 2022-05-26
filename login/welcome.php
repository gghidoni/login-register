<?php
define("PAGE", "Welcome");
include("layouts/header.php");
session_start();
$username = $_SESSION['username'];
?>

<div class="container">
    <div class="box welcome">

        <h1>Login successful</h1>
        <h2>Welcome, <?php echo $username; ?></h2>

        <button><a href="utility/out.php">Logout</a></button>

    </div>
</div>

<?php
include("layouts/footer.php");
?>