<?php 
    ini_set('session.use_only_cookies', 1);
    ini_set('session.use_strict_mode', 1);

    session_set_cookie_params([
        // lifetime of the cookie in seconds (30 minutes) 
        'lifetime' => 1800,
        // cookies can only run on the domain that is set
        'domain' => 'localhost/PHPCrashCourse/index.php',
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);

    session_start();

    // time since last regeneration, if it is not set, set it to the current time
    // if it is set, check if the time since the last regeneration is greater than 30 minutes (aka interval)
    if (isset($_SESSION['last_regeneration'])) {
        session_regenerate_id(true);
        $_SESSION['last_regenerate'] = time();
    } else {
        $Interval = 60 * 30;
        
        if (time() - $_SESSION['last_regeneration'] >= $Interval) {
            // regenerate the session id
            session_regenerate_id(true);
            // update the last regeneration time
            $_SESSION['last_regeneration'] = time();
        }
    }