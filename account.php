<?php
    include './templates/main-content.php';
    // include './templates/crud-content.php';
    // include './templates/account-content.php';
    include './templates/header.php';

    headerContent();

    // noCopyContent();
    // profileInfo();
    // contentBox();
    // loginContent();
    // signupContent(); ?>

<div class="container-fluid">
    <div class="justify-content-md-center row gap-4">
            <a class="link-light" href="./signup.php">
                <button class="btn btn-primary">Sign up</button>
            </a>
            <a class="link-light" href="./login.php">
                <button class="btn btn-success">Login</button>
            </a>
    </div>
</div>


<?php

    footerContent();
?>