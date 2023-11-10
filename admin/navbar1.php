<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('location:index.php');
}
?>
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-2">
    <a href="index.php" class="navbar-brand d-flex me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>

    <div class="navbar-nav align-items-center ms-auto">
        <a href="signin.php" style="color:white; margin-right: 40px;">Sign in</a>


        <a href="register.php" style="color:white; margin-right: 40px;">Register</a>

    </div>
</nav>