<?php
    include './db.php';

    if (isset($_POST['save_content'])){
        $file = $_POST['file'];
        $title = $_POST['title'];
        $username = $_POST['username'];
        $image = $_POST['image'];

        echo $file.$title.$username.$image;

        // $uery = "INSERT INTO `userContent` (`username`, `title`, `file`, `image`) 
        // VALUES ('username_ejemplo', 'title_ejemplo', 'file_ejemplo', 'image_ejemplo')";
        // $query = "INSERT INTO userContent(username, title, file, image) VALUES ('$username', '$title', '$file','$image')";
                        
        
        // $result = mysql_query($conn, $query);
        // if(!$result) {
        //   die("Query Failed.");
        // }
        // echo "\nSAVED";
    }

?>
