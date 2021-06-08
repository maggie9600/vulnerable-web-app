<?php

if( isset( $_POST[ 'Submit' ]  ) ) {
	// Get input
	$target = $_REQUEST[ 'ip' ];

	// Determine OS and execute the ping command.
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		$cmd = shell_exec( 'ping  ' . $target );
	}
	else {
		// *nix
		$cmd = shell_exec( 'ping  -c 4 ' . $target );
	}

	// Feedback for the end user
	$html = "<pre><center>{$cmd}</pre></center>";
	echo $html;
}
$redirect_to=$_GET["url"];
header("Location:". $redirect_to);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Ping ChatAPP</title>

	<!-- Bootstrap core CSS -->
    <link href="vendor-front/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="vendor-front/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="vendor-front/parsley/parsley.css"/>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor-front/jquery/jquery.min.js"></script>
    <script src="vendor-front/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor-front/jquery-easing/jquery.easing.min.js"></script>

    <script type="text/javascript" src="vendor-front/parsley/dist/parsley.min.js"></script>
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div class="container">
        <br />
        <br />
        <h1 class="text-center">Ping</h1>
        <div class="row justify-content-md-center mt-5">
            
            <div class="col-md-4">
</head>
<div class="card">
    <div class="card-body">
		<form name="ping" action="" method="post">
			<div class="form-group">
        <div class="form-group">
            <label>Enter an IP address:</label>
				<input type="text" name="ip" id="ip" class="form-control" required>
			</div>
			<div class="form-group text-center">
                <input type="submit" name="Submit" id="Submit" class="btn btn-primary" value="Submit">
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
