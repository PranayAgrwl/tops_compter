<?php

    if(isset($_SESSION['user']))
    {
        ?>

        <a class="btn btn-outline-link" href="#">Welcome <?php echo $_SESSION['user'] -> username ; ?></a>
        <a class="btn btn-outline-primary" href="<?php echo $GLOBALS['baseurl'] . 'user/userlogout'; ?>">Logout</a>

        <?php
    }
    else
    {
        ?>

        <button type="button" id="mybtn" class="btn btn-outline-primary">Login</button>

        <?php
    }

?>


<!-- Login Modal ----------------------------------------------------------------------------------->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <form method="post" action="<?php echo $GLOBALS['baseurl'] . 'user/userlogin'; ?>">
            <div class="mb-3 mt-3">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
            <label>Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
            </div>
            <input type="submit" class="btn btn-primary" name="login">
            <p class="mt-3">
                Not a member? <a href="#" id="reg">Sign up here</a>
            </p>
        </form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- Modal End ----------------------------------------------------------------------------------->

<!-- Reg Modal ----------------------------------------------------------------------------------->
<div class="modal fade" id="regModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <form method="post" action="<?php echo $GLOBALS['baseurl'] . 'user/userreg'; ?>">
            <div class="mb-3 mt-3">
            <label>Username:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="username">
            </div>
            <div class="mb-3">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
            <label>Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
            </div>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- Modal End ----------------------------------------------------------------------------------->



<script>
    $(document).ready(function()
    {
        $("#mybtn").click(function()
        {
            $("#myModal").modal('show');
        });

        $("#reg").click(function()
        {
            $("#regModal").modal('show');
        });
    }
    );
</script>