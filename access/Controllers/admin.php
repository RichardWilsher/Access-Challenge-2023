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
        header('location: /admin/login');
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
        'title' => 'Request Authorisation',
        'navElement' => '',
        'variables' => [

        ]
            ];
    }

    
}