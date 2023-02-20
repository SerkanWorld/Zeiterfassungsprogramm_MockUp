<?php
    include_once "includes\header.php";
?>
<!-- content --> 
<div class="col-lg-10"> 
        <br>
          <!--login form-->
          <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
              <h1>Anmelden</h1>
              <br>
            <form>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="text" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <br>
              <button class="btn btn-primary" onclick="checkLogin()">Submit</button>
            </form>
          </div>
          <div class="col-lg-4"></div>
          </div>
      </div>
    </div>
  </div>    
</body>
<script>
  function checkLogin() {
            var username = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            
            if(username == "" || password == "") {
                alert("Please enter valid login information");
            } else {
              window.open('dashboard.php', '_blank');
            }
        }
</script>
</html>