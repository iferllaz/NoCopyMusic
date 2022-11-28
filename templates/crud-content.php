<?php
function crudContent(){
?>
<div class="container">
    <form>
        <legend>Add your content</legend>
        <div class="mb-3">
            <label for="textInput" class="form-label">Name</label>
            <input type="text" id="textInput" class="form-control" placeholder="Name">
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example">
            <option selected>Select type</option>
            <option value="1">Music</option>
            <option value="2">Video</option>
            <option value="3">Image</option>
        </select>
        </div>
        
        <div class="mb-3">
            <label for="formFile" class="form-label">Seleccione un archivo:</label>
            <input class="form-control" type="file" id="formFile">
        </div>    
        <button type="submit" class="btn btn-primary">Done</button>
    </form>
</div>

    
<?php
}
?>
