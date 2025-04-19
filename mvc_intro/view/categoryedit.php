<?php  include('navbar.php');?>


    <div class="container mt-3">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
            <label>Category Name:</label>
            <input type="text" class="form-control" name="cname" required value="<?php echo $catdata -> cname ?>" >
            </div>
            <div class="mb-3 mt-3">
            <label>Upload Category Image:</label><br>
            <img style="width:100px;height:100px;" src="<?php echo $GLOBALS['baseurl']."uploads/".$catdata->cimage ?>">
            <input type="file" class="form-control" name="cimage">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

<?php  include('footer.php');?>