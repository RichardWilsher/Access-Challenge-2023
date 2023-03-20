<?php

    require '../autoload.php';

    $routes = new \access\Routes();

    $entryPoint = new \tools\EntryPoint($routes);

    $entryPoint->run();
