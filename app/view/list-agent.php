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
      </div>
    </nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
      <!-- Example row of columns -->
      <ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li class="active">List Agent</li>
		</ol>
    <?php if(isset($_SESSION['message'])) {?>
    <div class="alert alert-success"><?php echo $_SESSION['message']?></div>
    <?php }?>

    <?php if(isset($_SESSION['error'])) {?>
      <div class="alert alert-warning"><?php echo $_SESSION['error']?></div>
      <?php }?>
    
      <div class="row">
        <div class="col-md-12">
          	<h2>
          		List Agent
          		<a href="?page=add-agent" class="btn btn-success pull-right">Tambah</a>
          	</h2>
          	<hr>
          	<table class="table table-striped">
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Telp</td>
					<td></td>
				</tr>
        <?php foreach ($agents as $key => $agent) {
        ?>
        <tr>
          <td><?php echo $key+1;?></td>
          <td>
            <?php echo $agent['full_name'];?> <br>
            <small>(<?php echo $agent['username'];?>)</small>
          </td>
          <td><?php echo $agent['email'];?></td>
          <td><?php echo $agent['telp'];?> / <?php echo $agent['hp'];?></td>
          <td>
            <a href="?page=edit-agent&id=<?php echo $agent['id'];?>" class="btn btn-info">edit</a>
            <a href="?page=delete-agent&id=<?php echo $agent['id'];?>" class="btn btn-danger">delete</a>
          </td>
        </tr>
        <?php
        }?>
			</table>
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