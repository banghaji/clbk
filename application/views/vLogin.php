<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login CLBK</title>

    <link href="<?=base_url();?>_lib/css/bootstrap.min.css" rel="stylesheet">

<style>	
body {
  min-height: 2000px;
  padding-top: 70px;
}
</style>

  </head>

  <body>

    <div class="container">

<div class="alert alert-info" style="margin:10% auto; max-width: 350px;">
	<h1>Login</h1>
	<?=form_open('user/login')?>
		<div class="form-group">
			<input type="text" name="uID" class="form-control" placeholder="User ID">
		</div>
		<div class="form-group">
			<input type="password" name="uPW" class="form-control" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary btn-block" value="Login">
		</div>
	<?=form_close();?>
</div>

    </div> <!-- /container -->

    <script src="<?=base_url();?>_lib/js/jquery.min.js"></script>
    <script src="<?=base_url();?>_lib/js/bootstrap.min.js"></script>

	
	
	
	</body>
</html>
