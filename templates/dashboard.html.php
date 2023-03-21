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
				<li class="active"><a href="#">Dashboard</a></li>
				<li><a href="/admin/request/">Review Request</a></li>
				<li><a href="/admin/requestauthorisation/">Request Letter</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/admin/login/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>


	<div>
		<form action="" method="post">
			<label for="search-input">Search:</label>
			<input type="text" id="search-input" name="search-input" placeholder="Search...">
			<button type="submit">Search</button>
		</form>
	</div>

	<!-- Dashboard -->
	<!-- <div class="container-fluid"> -->
	<div class="row" style="padding-left:150px; padding-top: 50px;">

        <table>
            <tr>
            <th>NHS Number</th><th>Firstname</th><th>Surname</th><th>Date of Birth</th><th>Address</th><th></th>
        </tr>
        <?php
            foreach($patients as $patient){
                echo '<tr>';
                echo '<td>' . $patient->nhsnumber . '</td><td>' . $patient->firstname . '</td><td>' . $patient->surname . '</td><td>' . $patient->dateofbirth . '</td><td>' . $patient->address1 . '</td>';
                echo '</tr>';
            }
        ?>
    </table>

	</div>
	
