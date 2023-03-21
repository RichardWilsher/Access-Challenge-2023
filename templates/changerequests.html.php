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
    <!-- <div class="row" style="padding-left:150px; padding-top: 50px;"> -->
        <!-- <div class="row" style="padding-left:50px; padding-top: 25px;"> -->
            <div class="col-m-10">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Reviewing Data Change Requests</h3></center>
                    </div>
                    <div class="panel-body">
                        <table>
                            <thead>
                              <tr>
                                <th style="padding: 10px">ID</th>
                                <th style="padding: 10px">User</th>
                                <th style="padding: 10px">Date Requested</th>
                                <th style="padding: 10px">Data Type</th>
                                <th style="padding: 10px">Original Value</th>
                                <th style="padding: 10px">New Value</th>
                                <th style="padding: 10px">Status</th>
                                <th style="padding: 10px">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="padding: 10px">1</td>
                                <td style="padding: 10px">John Doe</td>
                                <td style="padding: 10px">2023-03-18</td>
                                <td style="padding: 10px">Email Address</td>
                                <td style="padding: 10px">john.doe@example.com</td>
                                <td style="padding: 10px">johndoe@example.com</td>
                                <td style="padding: 10px">Pending</td>
                                <td style="padding: 10px">
                                <button >Approve</button>
                                  <button>Reject</button>
                                </td>
                              </tr>
                              <!-- Add more rows as needed -->
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
    
        </div>

   
<!-- </div> -->
  </body>