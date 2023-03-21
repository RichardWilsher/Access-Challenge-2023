<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="card shadow-lg">
						<div class="card-body p-5">
<?php
    if (!isset($_SESSION['passcode'])){
        echo '<h1 class="fs-4 card-title fw-bold mb-4">Please Enter your Passcode</h1>';
        echo '<form method="POST" class="needs-validation" novalidate="" autocomplete="off">';
        echo '<div class="mb-3">';
        echo '<label class="mb-2 text-muted" for="email">Passcode</label>';
        echo '  <input id="pin" type="text" class="form-control" name="passcode"  required autofocus>';
        echo '  <div class="invalid-feedback">';
        echo '      ';
        echo '  </div>';
        echo '</div>';
        echo '<div class="d-flex align-items-center">';
        echo '  <button type="submit" class="btn btn-primary ms-auto">';
        echo '      Login	';
        echo '  </button>';
        echo '<input type="hidden" name="stage" value="0">';
        echo '</div>';
        echo '</form>';

        if (isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    } else {

        echo '<h1 class="fs-4 card-title fw-bold mb-4">Please Enter your Date of Birth</h1>';
        echo '<form method="POST" class="needs-validation" novalidate="" autocomplete="off">';
        echo '<div class="mb-3">';
        echo '  <label class="mb-2 text-muted" for="email">Date Of Birth (DDMMYYYY)</label>';
        echo '  <input id="pin" type="text" class="form-control" name="dateofbirth"  required autofocus>';
        echo '  <div class="invalid-feedback">';
        echo '      Email is invalid';
        echo '  </div>';
        echo '</div>';

        echo '<div class="d-flex align-items-center">';
        echo '  <button type="submit" class="btn btn-primary ms-auto">';
        echo '      Login	';
        echo '  </button>';
        echo '</div>';
        echo '<input type="hidden" name="stage" value="1">';
        echo '<input type="hidden" name="passcode" value="';
        echo '</form>';

        if (isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    }
?>

                        <div class="card-footer py-3 border-0">
							<div class="text-center">
								Already have an account? <a href="/access/login/" class="text-dark">Login</a>
							</div>
						</div>
						</div>
						<div class="card-footer py-3 border-0">

						</div>
					</div>
