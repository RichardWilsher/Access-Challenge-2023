<?php
namespace access;

class Routes implements \tools\Routes{

    public function getController($name) {
        // function to create the DatabaseTable object instances and the Controller instances and return the requested controller
        require '../database.php';
        
        $pendingTable = new \tools\DatabaseTable($pdo, 'pending', 'passcode');
        $patientTable = new \tools\DatabaseTable($pdo, 'patients', 'nhsnumber');
        $referalsTable = new \tools\DatabaseTable($pdo, 'referals', 'id');

        $controllers = [];

        $controllers['access'] = new \access\Controllers\access($pendingTable, $patientTable, $referalsTable);
        $controllers['admin'] = new \access\Controllers\admin($pendingTable, $patientTable, $referalsTable);
        
        return $controllers[$name];
    }
    
    public function getDefaultRoute() {
        // function to return the default route if no route is supplied
        return 'access/passcode';
    }

    public function checkLogin($route) {
        // function to check if being logged in is required for a particular page
        // if being logged in is required, will check if a user is logged in and allow them to continue to the page if so
        // if not will redirect them to the login page
        session_start();
        $loginRoutes = [];

        // $loginroutes['/admin/admins'] = true;
        // $loginroutes['/admin/editadmins'] = true;
        // $loginroutes['/admin/auctions'] = true;
        // $loginroutes['/admin/editauction'] = true;
        // $loginroutes['/admin/editlot'] = true;
        

        $requiresLogin = $loginRoutes[$route] ?? false;

        if ($requiresLogin && !isset($_SESSION['loggedin'])) {
            header('location: /admin/login');
            exit();
        }
    }
}