<?php
function headerContent(){ ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>NoCopyMusic</title>

            <link rel="stylesheet" href="./style/main.css">
            <link rel="stylesheet" href="./style/nav.css">
            <link rel="stylesheet" href="./style/file-box.css">
            <link rel="stylesheet" href="./style/profile.css">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div>
                <img src="./src/menu-icon.png" class=" nav-icon">
            </div>
            <div class="nav-link"><a href="./index.php">Home</a></div>
            <div class="nav-link"><a href="./index.php"> Audio</a></div>
            <div class="nav-link"><a href="./index.php"> Video</a></div>
            <div class="nav-link"><a href="./index.php"> Image</a></div>
            <div class="nav-link"><a href="./about-us.php"> About Us</a></div>

            <div class="user-options">
                <a href="./profile.php">
                    <img src="./src/avatar.png" alt="MyProfile" class="nav-icon-photo">
                </a>
                <a href="./account.php">
                    <img src="./src/options-icon.png" alt="Config" class="nav-icon">
                </a>
            </div>
        </nav>
        <div class="main-container">
<?php
}
function footerContent(){ ?>  
        </div>
        <footer class="bg-dark">
                <div class="bg-gray py-4">
                <div class="container text-center">
                    <p class="text-muted mb-0 py-2">    
                        5°B
                        Integrantes:
                        - Dávalos Jorge
                        - Llamas Julia
                        - Robledo Christian
                    </p>
                </div>
                </div>
            </footer>
            <script>
                $( document ).ready(function() { 
                    $(".main-contain").fadeOut("slow"); 
                    $(".profile_cont").fadeOut("slow"); 
                    $(".main-content").fadeOut("slow"); 
                    $(".login_contro").fadeOut("slow"); 
                    $(".signup_contr").fadeOut("slow"); 
                    $(".main-content").fadeOut("slow"); 
                   });
            </script>
        </body>
    </html>
<?php
}
?>