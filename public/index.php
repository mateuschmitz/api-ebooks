<?php

require('../bootstrap.php');

chdir(dirname(__DIR__));

//echo "<pre>" . print_r($_GET, 1);

echo "<pre>" . print_r(runApp($_GET), 1);