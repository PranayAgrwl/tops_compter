<?php  include('navbar.php');?>
<div class="container">
    <a href="<?php echo $GLOBALS['baseurl'].'productadd' ?>" class="btn btn-outline-primary">Add Product</a><br><br>
    <table class="table table-hover">
    <thead>
        <tr>
        <th>Product ID</th>
        <th>Category Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Category</th>
        <th>Product Image</th>
        <th colspan="2" style="text-align:center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            foreach($products as $key)
            {
        ?>
        <tr>
        <td><?php echo $key -> pid; ?></td>
        <td><?php echo $key -> pname; ?></td>
        <td><?php echo $key -> price; ?></td>
        <td><?php echo $key -> description; ?></td>
        <td><?php echo $key -> cname; ?></td>
        <td><img style="width:100px;height:100px;" src="<?php echo $GLOBALS['baseurl']."uploads/products".$key -> pimage; ?>"></td>
        <td><a href="<?php echo $GLOBALS['baseurl'].'productedit/' . $key->cid ?>" class="btn btn-outline-info"><img src="<?php echo $GLOBALS['baseurl']."resources/edit.png"?>"></a></td>
        <td><a href="<?php echo $GLOBALS['baseurl'].'productdelete/' . $key->cid ?>" class="btn btn-outline-danger"><img src="<?php echo $GLOBALS['baseurl']."resources/trash.png"?>"></a></td>
        </tr>
        <?php
            $i++;
            }
        ?>
    </tbody>
    </table>
</div>
<?php  include('footer.php');?>