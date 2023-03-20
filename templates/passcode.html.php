<?php
    if (!isset($_SESSION['passcode'])){
        echo '<form action="" method="POST" enctype="multipart/form-data">';
        echo '<label>Passcode</label>
        <input type="text" name="passcode"/>';
        echo '<input type="hidden" name="stage" value="0">';
        echo '<input type="submit" name="submit" value="Enter" />';
        if (isset($_SESSION['error'])){
            echo 'Error ' . $_SESSION['error'];
            unset($_SESSION['error']);
        }
    } else {
        echo '<form action="" method="POST" enctype="multipart/form-data">';
        echo '<label>Date of Birth (DDMMYY)</label>
        <input type="text" name="dateofbirth"/>';
        echo '<input type="hidden" name="stage" value="1">';
        echo '<input type="hidden" name="passcode" value="';
        echo $_SESSION['passcode'];
        echo '">';
        echo '<input type="submit" name="submit" value="Enter" />';
        unset($_SESSION['passcode']);
        if (isset($_SESSION['error'])){
            echo 'Error ' . $_SESSION['error'];
            unset($_SESSION['error']);
        }
    }
?>

