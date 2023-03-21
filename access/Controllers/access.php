<?php
namespace access\Controllers;
class access {
    // controller for the car section of the site which is the public facing site
    
    private $pendingTable;
    private $patientTable;
    private $referalsTable;

    public function __construct($pendingTable, $patientTable, $referalsTable) {
        // constructor function to assign all the relevant DatabaseTable objects to the required variables
        $this->pendingTable = $pendingTable;
        $this->patientTable = $patientTable;
        $this->referalsTable = $referalsTable;
    }

    public function home() {
        // function to display the home page
        return ['template' => 'home.html.php',
        'css' => 'styles.css',
        'title' => 'Home',
        'navMenu' => '',
        'variables' => [
            
            ]
        ];
    }

    public function login() {
        return ['template' => 'login.html.php',
        'css' => 'styles.css',
        'title' => 'Login',
        'navMenu' => '',
        'variables' => [
            
            ]
        ];
    }

    public function passcode(){
        return ['template' => 'passcode.html.php',
        'css' => 'styles.css',
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
            $_SESSION['passcode'] = $passcode;
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
                //var_dump($_SESSION);
                unset($_SESSION['dob']);
                $passcode = $_SESSION['passcode'];
                $record = $this->pendingTable->find('passcode', $passcode);
                $_SESSION['nhsnumber'] = $record[0]->nhsnumber;
                header('location: /access/register');
            } else {
                $_SESSION['error'] = 'incorrect date of birth';
                header('location: /access/passcode');
            }
        }
        
    }

    public function register(){
        unset($_SESSION['error']);
        return ['template' => 'register.html.php',
        'css' => 'styles.css',
        'title' => 'Register',
        'navMenu' => '',
        'variables' => [
            
            ]
        ];
    }

    public function registerSubmit(){
        $passcode = $_SESSION['passcode'];
        unset($_SESSION['passcode']);
        unset($_SESSION['error']);
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $email = $_POST['email'];
        if ($password == $password2){
            $nhsnumber = $_SESSION['nhsnumber'];
            $record = $this->pendingTable->find('nhsnumber', $nhsnumber)[0];
            $newrecord['nhsnumber'] = $record->nhsnumber;
            $newrecord['firstname'] = $record->firstname;
            $newrecord['surname'] = $record->surname;
            $newrecord['address1'] = $record->address1;
            $newrecord['address2'] = $record->address2;
            $newrecord['address3'] = $record->address3;
            $newrecord['town'] = $record->town;
            $newrecord['postcode'] = $record->postcode;
            $newrecord['dateofbirth'] = $record->dateofbirth;
            $newrecord['email'] = $email;
            $newrecord['password'] = $password;
            $this->patientTable->insert($newrecord);
            $this->pendingTable->delete($passcode);
            header('location: /access/login');
        } else {
            $_SESSION['error'] = 'passwords do not match';
            header('location: /access/register');
        }
    }

    public function forgot(){
        return ['template' => 'forgot.html.php',
        'css' => 'styles.css',
        'title' => 'Forgot Password',
        'navMenu' => '',
        'variables' => [
            
            ]
        ];
    }

    public function portal(){
        return ['template' => 'portal.html.php',
        'css' => 'styles2.css',
        'title' => 'Portal',
        'navMenu' => '',
        'variables' => [
            
            ]
        ];
    }

    public function loginSubmit(){
        header('location: /access/portal');
    }
}
?>