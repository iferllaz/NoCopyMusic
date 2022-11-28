<?php
    include './templates/main-content.php';
    include './templates/crud-content.php';
    // include './templates/account-content.php';
    include './templates/header.php';

    headerContent(); ?>
    <div class="profile_control">
        <div class="main-container">
            <div class="profile-info">
                <div class="user-picture-box">
                    <img src="./src/avatar.png" alt="julietabebop" class="user-picture">
                </div>
                <div class="user-data">
                    <div class="container-user-data">
                        <div>
                            <p class="user-name user-info bold">julietabebop</p>
                            <p><a href="./index.html" class="user-info">Edit</a></p> 
                        </div>
                        <div class="user-info user-social-box">
                            <div class="insta">
                            <a href="www.instagram.com">
                                    <img src="./src/insta-icon.png" class=" icon">
                                </a>
                            </div>
                            <div class="twitter">
                            <a href="www.twitter.com">
                                    <img src="./src/twitter-icon.png" class=" icon">
                                </a>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="user-interaction">
                    <a href="./profile.html">
                        <div class="interaction-box select">
                            <p class="bold">My content</p>
                            <p>10</p>
                        </div>
                    </a>
                    <div class="interaction-box">
                        <p class="bold">Likes</p>
                        <p>91</p>
                    </div>
                    <div class="interaction-box">
                        <p class="bold">Follows</p>
                        <p>113</p>
                    </div>
                    <div class="interaction-box">
                        <p class="bold">Followers</p>
                        <p>60</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>  
<?php
    crudContent();
    // contentBox();
    // loginContent();
    // signupContent();
    // aboutUs();

    footerContent();
?>
