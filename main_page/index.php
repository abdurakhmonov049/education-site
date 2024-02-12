<?php require 'header/header.php'; ?>

<div class="row">
  <div class="col-md-6">
    <img src="https://static.tuit.uz/uploads/files/m/g/58ec7dc756ccf.jpg" alt="" style="height:729px;width:785px;">
  </div>
  <div class="col-md-6 d-flex align-items-center justify-content-center flex-column">

    <img src="https://static.tuit.uz/uploads/1/W73eM8T-hn5cLRoa_rQWKshn3eUutXvm.png" alt="..."
      class="rounded-circle w-25 h-25 mb-3">

    <h5 class="text-center">TUIT LMS</h5>

    <!-- Form part-->
    <form action="Submit/submit.php" method="post" style="width:450px;height:300px;">
      <div class="form-group mt-5">

        <label>Login</label>
        <input type="text" class="form-control" name="user" placeholder="Enter login">


        <br>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="psw" placeholder="Password">
      </div>


      <br>

      <button type="submit" class="btn btn-primary w-100" name="btn">Submit</button>

    </form>
    <p class="mt-4"> &copy; TUIT 01.09.2024 </p>
  </div>
</div>

<!-- form finished -->








<?php require "footer/footer.php"; ?>