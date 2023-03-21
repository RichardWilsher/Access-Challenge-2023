<?php
namespace access\Controllers;
class admin {

    private $pendingTable;
    private $patientTable;
    private $referalsTable;

    public function __construct($pendingTable, $patientTable, $referalsTable){
        $this->pendingTable = $pendingTable;
        $this->patientTable = $patientTable;
        $this->referalsTable = $referalsTable;
    }

    public function login(){
        return ['template' => 'adminlogin.html.php',
        'css' => 'styles.css',
        'title' => 'Login',
        'navElement' => '',
        'variables' => [

        ]
            ];
    }

    public function loginSubmit(){
        header('location: /admin/dashboard');
    }

    public function requestauthorisation(){
        return ['template' => 'requestauthorisation.html.php',
        'css' => 'styles.css',
        'title' => 'Request Authorisation',
        'navElement' => '',
        'variables' => [

        ]
            ];
    }

    public function requestauthorisationSubmit(){
        unset($_POST['submit']);
        $message = $_POST;
        $this->pendingTable->insert($message);
        header('location: /admin/login');
    }

    public function forgot(){
        return ['template' => 'adminforgot.html.php',
        'css' => 'styles.css',
        'title' => 'Forgot Password',
        'navElement' => '',
        'variables' => [

        ]
            ];
    }

    public function dashboard(){
        //var_dump($_SESSION);
        $patients = [];
        if (isset($_POST['patient'])){
            $search = $_POST['patient'];
            $patients = $this->patientTable->findall('nhsnumber', $search);
        } 
        return ['template' => 'dashboard.html.php',
        'css' => 'styles.css',
        'title' => 'Dashboard',
        'navElement' => '',
        'variables' => [
            'patients' => $patients
        ]
            ];
    }

    public function dashboardSubmit(){
        $_SESSION['patient'] = $_POST['search-input'];
        header('location: /admin/dashboard');
    }

    public function request(){
        return ['template' => 'changerequests.html.php',
        'css' => 'styles.css',
        'title' => 'Change of Detail Requests',
        'navElement' => '',
        'variables' => [

        ]
            ];
    }

    
}