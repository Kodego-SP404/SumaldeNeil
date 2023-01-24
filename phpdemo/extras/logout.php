<?php
session_start();

//destroy the session
session_destroy();
header('Location: /sumalde/phpdemo/13_sessions.php');