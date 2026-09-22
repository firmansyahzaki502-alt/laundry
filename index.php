<html>
    <head>
    	<title>Sistem Informasi Laundry</title>
    	<link rel="stylesheet" type="text/css"href="assets/css/bootstrap.css">
    	<script type="text/javascript" src="assets/js/jquery.js"></script>
    </head>
    <body style="background : #f0f0f0">
    	<br><br><br><br>
    	<center>
    		<h2>Sistem Informasi Laundry<br></h2>
    	</center>
    	<br><br><br><br>
    	<div class="container">
    	 <div class="col-md-4 col-md-offset-4">
         <?php
         if (isset($_GET['pesan'])){
             if ($_GET['pesan'] == "gagal") {
                 echo "<div class='alert alert-danger'>login gagal! Username atau password salah</div>";
             }elseif ($_GET['pesan'] == "logout") {
                 echo "<div class='alert alert-info'>anda berhasil
                 logout</div>";
             }elseif ($_GET['pesan'] == "belum_login") {
                 echo "<div class='alert alert-danger'>anda harus login untuk mengakses halaman admin</div>"
                 ;
               }
            }
         ?>
          <form action="login.php" method="post">
    		 	   <div class="panel">
    		 	     <div class="panel-body">
    		 		      <div class="form-group">
    		 			         <label>Username</label>
    		 			         <input type="text" name="username" class="form-control">
    		 		      </div>
                  <div class="form-group">
                       <label>password</label>
                       <input type="password" name="password" class="form-control">
                  </div>
                  <input type="submit" class="btn btn-primary" value="Log in">
    		       </div>
    		     </div>
    		  </form>
    	  </div>
      </div>
    </body>
</html>