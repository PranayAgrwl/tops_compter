<?php  include('navbar.php');?>
<div class="container">
    <a href="<?php echo $GLOBALS['baseurl'].'categoryadd' ?>" class="btn btn-outline-primary">Add Category</a><br><br>
    <table class="table table-hover">
    <thead>
        <tr>
        <th>Category ID</th>
        <th>Category Name</th>
        <th>Category Image</th>
        <th colspan="2" style="text-align:center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            foreach($catdata as $key)
            {
        ?>
        <tr>
        <td><?php echo $key -> cid; ?></td>
        <td><?php echo $key -> cname; ?></td>
        <td><img style="width:100px;height:100px;" src="<?php echo $GLOBALS['baseurl']."uploads/".$key -> cimage; ?>"></td>
        <td><a href="<?php echo $GLOBALS['baseurl'].'categoryedit/' . $key->cid ?>" class="btn btn-outline-info"><img src="<?php echo $GLOBALS['baseurl']."resources/edit.png"?>"></a></td>
        <td><a href="<?php echo $GLOBALS['baseurl'].'categorydelete/' . $key->cid ?>" class="btn btn-outline-danger"><img src="<?php echo $GLOBALS['baseurl']."resources/trash.png"?>"></a></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
</div>
<?php  include('footer.php');?>