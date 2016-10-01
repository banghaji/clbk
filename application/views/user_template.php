<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <link href="<?=base_url();?>_lib/css/bootstrap.min.css" rel="stylesheet">

<style>	
body {
  min-height: 2000px;
  padding-top: 70px;
}
</style>

  </head>

  <body>

<?php $this->load->view($user_menu); ?>
  
    <div class="container">

<?php $this->load->view($user_content); ?>
	
    </div> <!-- /container -->


    <script src="<?=base_url();?>_lib/js/jquery.min.js"></script>
    <script src="<?=base_url();?>_lib/js/bootstrap.min.js"></script>

	
	
	
	</body>
</html>
