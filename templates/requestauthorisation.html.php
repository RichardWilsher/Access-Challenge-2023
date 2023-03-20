<form action="" method="POST" enctype="multipart/form-data">

	<label>NHS Number</label>
	<input type="text" name="nhsnumber"/>
    <label>Firstname</label>
	<input type="text" name="firstname"/>
    <label>Surname</label>
	<input type="text" name="surname"/>
    <label>Address</label>
	<input type="text" name="address1"/>
	<input type="text" name="address2"/>
	<input type="text" name="address3"/>
    <label>Town</Label>
	<input type="text" name="town"/>
    <label>Postcode</label>
	<input type="text" name="postcode"/>
    <label>Date of Birth (DDMMYYYY)</label>
	<input type="text" name="dateofbirth"/>

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

    <label>Passcode</label>
	<input type="text" name="passcode" value="<?=$passcode?>"/>

	<input type="submit" name="submit" value="Request Access" />

</form>
