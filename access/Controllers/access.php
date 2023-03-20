<?php
namespace access\Controllers;
class access {
    // controller for the car section of the site which is the public facing site
    
    private $pendingTable;

    public function __construct($pendingTable) {
        // constructor function to assign all the relevant DatabaseTable objects to the required variables
        $this->pendingTable = $pendingTable;
    }

    public function home() {
        // function to display the home page
        return ['template' => 'home.html.php',
        'title' => 'Home',
        'navMenu' => '',
        'variables' => [
            
            ]
        ];
    }

    public function login() {
        return ['template' => 'login.html.php',
        'title' => 'Login',
        'navMenu' => '',
        'variables' => [
            
            ]
        ];
    }

    public function passcode(){
        return ['template' => 'passcode.html.php',
        'title' => 'Login',
        'navMenu' => '',
        'variables' => [
            
            ]
        ];
    }

    public function passcodeSubmit(){
        if ($_POST['stage'] == '0'){
            unset($_SESSION['error']);
            $passcode = $_POST['passcode'];
            $record = $this->pendingTable->find('passcode', $passcode);
            // var_dump($record);
            if (count($record) != 0){
                $_SESSION['passcode'] = $passcode;
                $_SESSION['dob'] = $record[0]->dateofbirth;
                header('location: /access/passcode');
            } else {
                unset($_SESSION['passcode']);
                $_SESSION['error'] = 'Passcode not found';
                header('location: /access/passcode');
            }
        } else {
            if ($_SESSION['dob'] == $_POST['dateofbirth']){
                unset($_SESSION['dob']);
                header('location: /access/register');
            } else {
                $_SESSION['error'] = 'incorrect date of birth';
                header('location: /access/passcode');
            }
        }
        
    }
}
?>