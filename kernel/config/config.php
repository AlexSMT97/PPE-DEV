<?php
    $database = array
    (
        /* Connexion SQL Machine */
        'SITE'            =>    'u907465831_gsb',
        'HOST'            =>    'sql27.main-hosting.eu',
        'USER'            =>    'u907465831_gsb',
        'PASS'            =>    'I8T9Qf58Vh2m',
    );
    
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host='.$database['HOST'].';dbname='.$database['SITE'], $database['USER'], $database['PASS'], $pdo_options);
    }
catch(Exception $e)
    {
        $error = '
            <div style="width: 550px; min-height: 250px; margin-right: auto; margin-left: auto; margin-top: 150px; background: #EEEEEE; border: 1px solid #AAAAAA; padding: 20px;">
            MYSQLLLL
            </div>
        ';
        die($error);
    }

?>