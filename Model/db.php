<?php

include './libs/rb.php';

R::setup( 'mysql:host=localhost;dbname=project_db',
'root', '' );

session_start();