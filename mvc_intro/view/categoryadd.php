<?php  include('navbar.php');?>


    <div class="container mt-3">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
            <label>Category Name:</label>
            <input type="text" class="form-control" placeholder="Enter Category Name" name="cname" required>
            </div>
            <div class="mb-3 mt-3">
            <label>Upload Category Image:</label>
            <input type="file" class="form-control" name="cimage" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

<?php  include('footer.php');?>