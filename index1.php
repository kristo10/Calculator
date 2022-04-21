<?php

/**
    $_POST
    $_GET
    $_PATCH
    $_DELETE
    $_PUT

    $_SERVER
*/

    /**
        Variablat:
            string      => $emri = 'EVA'
            integer     => $mosha = 20;
            float       => $gjatesia = 1.75;
            decimal     => $pi = 3.146753472;
            boolean     => $active = true/false
            array       => $fruta = ['eva', 21, 3.166342, true];
            object      => class
    */

$veprimi = $_POST['veprimi'];

echo eval("return $veprimi;");


// if (isset($_POST['vlera'])) {
//     echo eval('return vlera');

// }

// $vlera = $_POST['vlera'];
// echo eval("return $vlera;");
