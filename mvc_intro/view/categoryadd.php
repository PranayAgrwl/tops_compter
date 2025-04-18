<?php  include('navbar.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
</body>
</html>