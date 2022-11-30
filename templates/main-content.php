<?php
// function fileBox(){ 
//           $query = "SELECT * FROM userContent";
//           $result_tasks = mysqli_query($conn, $query);    

//           while($row = mysqli_fetch_assoc($result_tasks)) { ?>
       <!-- <tr>
//             <td><?php echo $row['image']; ?></td>
//             <td><?php echo $row['title']; ?></td>
//             <td><?php echo $row['username']; ?></td>
//             <td>
//               <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
//                 <i class="fas fa-marker"></i>
//               </a>
//               <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
//                 <i class="far fa-trash-alt"></i>
//               </a>
//             </td>
//           </tr> --> <?php
// }

function contentShow(){ 
    include "./db.php";?>
    <div class="main-content">
    <table class="table table-bordered container-audio content-box">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>


<?php
}
function content2Box(){ ?>
    <div class="main-content">
        <div class="media-selection bold">
            <div>  Audio</div>
            <div>  Video</div>
            <div>  Image</div>
        </div>
        <div class="container-content">
            <div class="container-audio content-box" id="style-4" id="style-4">
                <div class="file-box">
                    <div class="file-img-box"> 
                        <img src="./src/file-img01.jpeg" alt="vaporwav3.mp3" class="file-img">
                    </div>
                    <div class="file-info-box">
                        <div class="file-info">
                            <div class="file-name bold">vaporwav3</div>
                            <div class="file-owner">julietabebop</div>
                        </div>
                        <div class="like-save">
                            <div class="like-box">
                                <img class="like-icon" src="./src/like-icon.png">
                            </div>
                            <div class="options-box">
                                <a href="./crud/delete.php" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </div>                            
                        </div>
                    </div>     
                </div> 
            </div>
            <div class="container-video content-box" id="style-4">
                <div class="file-box">
                    <div class="file-img-box"> 
                        <img src="./src/wallhaven-6koqy7.png" alt="vaporwav3.mp3" class="file-img">
                    </div>
                    <div class="file-info-box">
                        <div class="file-info">
                            <div class="file-name bold">wind0ws pop</div>
                            <div class="file-owner">julietabebop</div>
                        </div>
                        <div class="like-save">
                            <div class="like-box">
                                <img class="like-icon" src="./src/like-icon.png">
                            </div>
                            <div class="options-box">...</div>                            
                        </div>
                    </div>     
                </div>
            </div>
            <div class="container-image content-box" id="style-4">
                <div class="file-box">
                    <div class="file-img-box"> 
                        <img src="./src/img05.jpeg" alt="vaporwav3.mp3" class="file-img">
                    </div>
                    <div class="file-info-box">
                        <div class="file-info">
                            <div class="file-name bold">the bebop</div>
                            <div class="file-owner">julietabebop</div>
                        </div>
                        <div class="like-save">
                            <div class="like-box">
                                <img class="like-icon" src="./src/like-icon.png">
                            </div>
                            <div class="options-box">...</div>                            
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

