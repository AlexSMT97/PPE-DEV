<?php
    $database = array
    (
        /* Connexion SQL Machine */
        'SITE'            =>    'u907465831_gsb',
        'HOST'            =>    '???',
        'USER'            =>    'u907465831_gsb',
        'PASS'            =>    '???',
    );
    
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host='.$database['sql27.main-hosting.eu'].';dbname='.$database['PPE-DEV'], $database['u907465831_gsb'], $database['I8T9Qf58Vh2m'], $pdo_options);
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