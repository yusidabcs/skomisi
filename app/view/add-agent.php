<!DOCTYPE html>
<html>
<head>
	<title>Sistem Komisi</title>
	<link rel="stylesheet" type="text/css" href="assets/style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style/main.css">
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Sistem Komisi</a>
      </div>
        <!-- <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div> --><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="container">
      <!-- Example row of columns -->
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="?page=list-agent">Agent</a></li>
        <li class="active">Add</li>
      </ol>

      <?php if(isset($_SESSION['error'])) {?>
      <div class="alert alert-warning"><?php echo $_SESSION['error']?></div>
      <?php }?>

      <div class="row">
        <div class="col-md-12">
         <h2>
          Tambah Agent
        </h2>
        <hr>
        <form action="?page=add-agent" method="post" name="add-agent">
          <div class="row">
            <div class="col-md-4">
              <p>Silakan isi data agent/customer untuk di tambahkan ke dalam database</p>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username" name="username" required value="<?php echo $_POST['username']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter password" name="password" required value="<?php echo $_POST['password']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter nama lengkap" name="full_name" required value="<?php echo $_POST['full_name']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Contact Person</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter contact person" name="contact_person" required value="<?php echo $_POST['contact_person']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required value="<?php echo $_POST['email']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <textarea class="form-control" required name="address"><?php echo $_POST['address']?></textarea>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <label for="exampleInputEmail1">Telp</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter telp" name="telp" required value="<?php echo $_POST['telp']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Hp</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter hp" name="hp" value="<?php echo $_POST['hp']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Fax</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter fax" name="fax" value="<?php echo $_POST['fax']?>">
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <label for="exampleInputEmail1">Rekening Bank</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter rekening bank" name="bank_account_number" required value="<?php echo $_POST['bank_account_number']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Pemegang Rekening</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter pemegang rekening" name="bank_account_name" required value="<?php echo $_POST['bank_account_name']?>">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Agent Type</label>
                <select name="agent_type" required class="form-control">
                  <option>Pilih tipe agent</option>
                  <option value="1" <?php echo $_POST['agent_type']==1 ? 'selected':''?>>Agent</option>
                  <option value="2" <?php echo $_POST['agent_type']==2 ? 'selected':''?>>Agent Local</option>
                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
              <button type="submit" class="btn btn-primary btn-lg" name="add-agent" value="1">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <hr>

    <footer>
      <p>© Company 2014</p>
    </footer>
  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  </body>
  </html>