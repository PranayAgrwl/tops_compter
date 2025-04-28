<?php  include('navbar.php');?>

    <div class="container mt-3">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label>Product Name:</label>
                <input type="text" class="form-control" name="pname" required value="<?php echo $product -> pname ?>" >
            </div>
            <div class="mb-3 mt-3">
                <label>Product Price:</label>
                <input type="number" class="form-control" name="price" required value="<?php echo $product -> price ?>" >
            </div>
            <div class="mb-3 mt-3">
                <label>Product Description:</label>
                <input type="text" class="form-control" name="description" required value="<?php echo $product -> description ?>" >
            </div>
            <div class="mb-3 mt-3">
                <label>Category:</label>
                <select name="category" class="form-select">
                    <option value=""></option>
                    <?php
                        foreach ($catdata as $index)
                        {
                    ?>
                        <option value="<?php echo $index -> cid ?>">
                            <?php
                                if($index -> cid == $product -> catid)
                                {
                                    echo "Selected";
                                }
                            ?>
                            <?php echo $index->cname ?>
                        </option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label>Upload Product Image:</label><br>
                <img style="width:100px;height:100px;" src="<?php echo $GLOBALS['baseurl']."uploads/products".$product -> pimage ?>">
                <input type="file" class="form-control" name="pimage">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

<?php  include('footer.php');?>