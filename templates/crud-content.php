<?php
function crudContent(){
?>
<div class="container">
<form action="./crud/upload.php" method="POST">
        <legend>Add your content</legend>
        <div class="mb-2">
            <label for="textInput"  class="form-label">Select file</label>
            <input type="file" name="file" class="form-control" placeholder="File">
        </div> 
        <div class="mb-2">
            <label for="textInput"  class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="mb-2">
            <label for="textInput"  class="form-label">Select image</label>
            <input type="file" name="image" class="form-control" placeholder="Image">
        </div> 
        <div class="mb-2">
            <label for="textInput"  class="form-label">Confirm your username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div> 
        <input type="submit" name="save_content" class="btn btn-primary" value="Upload">   
    </form>
</div>

    
<?php
}
?>
