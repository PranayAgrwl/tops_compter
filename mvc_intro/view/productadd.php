<?php  include('navbar.php');?>


    <div class="container mt-3">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
            <label>Product Name:</label>
            <input type="text" class="form-control" placeholder="Enter Product Name" name="pname" required>
            </div>
            <div class="mb-3 mt-3">
            <label>Product Price:</label>
            <input type="number" class="form-control" placeholder="Enter Product Price" name="price" required>
            </div>
            <div class="mb-3 mt-3">
            <label>Product Description:</label>
            <input type="text" class="form-control" placeholder="Enter Product Description" name="description" required>
            </div>
            <div class="mb-3 mt-3">
            <label>Select Product Category:</label><br>
            <select name="category" class="form-select">
                <option value="">
                    <?php
                        foreach ($catdata as $index)
                        {
                    ?>
                        <option value="<?php echo $index -> cid ?>"><?php echo $index -> cname ?></option>
                    <?php
                        }
                    ?>
                </option>
            </select>
            </div>
            <div class="mb-3 mt-3">
            <label>Upload Product Image:</label>
            <input type="file" class="form-control" name="pimage" required>
            </div>

            <input type="submit" class="btn btn-primary" name="submit">
        </form>
    </div>

<?php  include('footer.php');?>
