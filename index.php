<?php
    // include './db.php';
    include './templates/main-content.php';
    // include './templates/crud-content.php';
    // include './templates/account-content.php';
    include './templates/header.php';
    // include './templates/about-content.php';
    // include './templates/profile-content.php';

    headerContent(); ?>
    <div class="main-container">
        <div class="logo-browser">
            <div class="logo">
                <img src="./src/ncm-logo.png" alt="NoCopyMusic" href="/index.php" class="logo-img">
                <p class="logo-alt">(No Copy Music)</p>
            </div>
            <div class="search">
                <input type="Search..." class="search-input">
                <img src="./src/search-icon.png" href="/index.php" style="width: 3%; height: 3%;" >
            </div>
        </div>
    </div>
    <div class="main-content">
    
<?php
    content2Box();
    // profileInfo();
    // loginContent();
    // signupContent();
    // aboutUs();

    footerContent();
?>