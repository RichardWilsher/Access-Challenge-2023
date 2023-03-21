<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
		body {
			background-color: #f1f1f1;
		}

		.container-fluid {
			padding-top: 20px;
			padding-bottom: 20px;
			background-color: #0072c6;

		}

		.panel-primary>.panel-heading {
			background-color: #0072c6;
			color: #fff;
		}

		.panel-default>.panel-heading {
			background-color: #f1f1f1;
			color: #333;
		}

		.navbar-inverse .navbar-nav>.active>a {
			background-color: #0072c6;

		}

		.navbar-inverse .navbar-nav>li>a {
			color: #f1f1f1;
		}
        .navbar-inverse {

            overflow: auto;
        }
        .navbar-nav{
            display: block;
            overflow: auto;
        }
	</style>
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">


			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="/admin/dashboard/">Dashboard</a></li>
				<li><a href="/admin/request/">Review Request</a></li>
				<li><a href="/admin/requestauthorisation/">Request Letter</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/admin/login/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>

<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">

					<div class="card shadow-lg">
						<div class="card-body p-5">
<form action="" method="POST" enctype="multipart/form-data">

<?php
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            $passcode = implode($pass); //turn the array into a string
    ?>

<table>
    <tr><td><label>NHS Number</label></td><td><input type="text" name="nhsnumber"/></td></tr>
    <tr><td><label>Firstname</label></td><td><input type="text" name="firstname"/></td></tr>
    <tr><td><label>Surname	</label></td><td><input type="text" name="surname"/></td></tr>
    <tr><td><label>Address	</label></td><td><input type="text" name="address1"/></td></tr>
    <tr><td></td><td><input type="text" name="address2"/></td></tr>
    <tr><td></td><td><input type="text" name="address3"/></td></tr>
    <tr><td><label>Town	</Label></td><td><input type="text" name="town"/></td></tr>
    <tr><td><label>Postcode	</label></td><td><input type="text" name="postcode"/></td></tr>
    <tr><td><label>Date of Birth (DDMMYYYY)</label></td><td><input type="text" name="dateofbirth"/></td></tr>
    <tr><td><label>Passcode	</label></td><td><input type="text" name="passcode" value="<?=$passcode?>"/></td></tr>
</table>





<div class="align-items-center d-flex">

	<button type="submit" name="submit" value="Request Access" class="btn btn-primary ms-auto">Request Access</button>
        </div>
</form>

		</div>
	</section>
