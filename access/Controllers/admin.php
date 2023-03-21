<?php
namespace access\Controllers;
class admin {

    private $pendingTable;

    public function __construct($pendingTable){
        $this->pendingTable = $pendingTable;
    }

    public function login(){
        return ['template' => 'adminlogin.html.php',
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
        'title' => 'Request Authorisation',
        'navElement' => '',
        'variables' => [

        ]
            ];
    }

    
}