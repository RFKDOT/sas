<?php

error_reporting(-1);

// /sas.php?usr={username}&pww={password}&job={task}

    define('USERNAME', 'demo');
    define('PASSWORD', '89e495e7941cf9e40e6980d14a16bf023ccd4c91'); // demo
    define('PATH', '/tmp/sas_secure_dir');

    $tasks = array('ApacheRestart', 'PageSpeedRemoveCache', 'GitPull');

    if (!isset($_GET['usr'], $_GET['pww'], $_GET['job']))

        die('Error #1 (input).');

    if ($_GET['usr'] !== USERNAME || sha1($_GET['pww']) !== PASSWORD)

        die('Error #2 (login).');

    if (!in_array($_GET['job'], $tasks))

        die('Error #3 (job).');

    file_put_contents(PATH . '/' . basename($_GET['job']), '');

    die('Job (' . htmlspecialchars($_GET['job']) . ') scheduled good.');

?>
