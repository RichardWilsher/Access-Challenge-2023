<?php
namespace access\Controllers;
class access {
    // controller for the car section of the site which is the public facing site
    
    public function __construct() {
        // constructor function to assign all the relevant DatabaseTable objects to the required variables

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
}
?>