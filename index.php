<?php

require 'config.php';

require ROOT.'app/routes/home.php';
require ROOT.'app/routes/admin/admin.php';
require ROOT.'app/routes/admin/login.php';
require ROOT.'app/routes/admin/painel.php';


$app->run();