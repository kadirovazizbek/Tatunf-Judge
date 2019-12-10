<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-10 08:59:50 --> Unable to connect to the database
ERROR - 2019-12-10 08:59:50 --> Unable to connect to the database
ERROR - 2019-12-10 08:59:50 --> Severity: Error --> Uncaught Error: Call to a member function query() on bool in D:\OSPanel\domains\acm.tatunf.local\web\system\database\drivers\mysqli\mysqli_driver.php:212
Stack trace:
#0 D:\OSPanel\domains\acm.tatunf.local\web\system\database\DB_driver.php(740): CI_DB_mysqli_driver->_execute('INSERT INTO `sh...')
#1 D:\OSPanel\domains\acm.tatunf.local\web\system\database\DB_driver.php(605): CI_DB_driver->simple_query('INSERT INTO `sh...')
#2 D:\OSPanel\domains\acm.tatunf.local\web\system\database\DB_query_builder.php(1589): CI_DB_driver->query('INSERT INTO `sh...')
#3 D:\OSPanel\domains\acm.tatunf.local\web\system\libraries\Session\drivers\Session_cookie.php(525): CI_DB_query_builder->insert('sessions', Array)
#4 D:\OSPanel\domains\acm.tatunf.local\web\system\libraries\Session\drivers\Session_cookie.php(274): CI_Session_cookie->_sess_create()
#5 D:\OSPanel\domains\acm.tatunf.local\web\system\libraries\Session\Session.php(665): CI_Session_cookie->initialize()
#6 D:\OSPanel\domains\acm.tatunf.local\web\system\libraries\Driver.p D:\OSPanel\domains\acm.tatunf.local\web\system\database\drivers\mysqli\mysqli_driver.php 212
ERROR - 2019-12-10 09:12:18 --> Severity: Warning --> file_get_contents(/var/www/clients/client1/web2/private/tester/shield/defc.h): failed to open stream: No such file or directory D:\OSPanel\domains\acm.tatunf.local\web\application\controllers\Settings.php 46
ERROR - 2019-12-10 09:12:18 --> Severity: Warning --> file_get_contents(/var/www/clients/client1/web2/private/tester/shield/defcpp.h): failed to open stream: No such file or directory D:\OSPanel\domains\acm.tatunf.local\web\application\controllers\Settings.php 47
ERROR - 2019-12-10 09:12:18 --> Severity: Warning --> file_get_contents(/var/www/clients/client1/web2/private/tester/shield/shield_py2.py): failed to open stream: No such file or directory D:\OSPanel\domains\acm.tatunf.local\web\application\controllers\Settings.php 48
ERROR - 2019-12-10 09:12:18 --> Severity: Warning --> file_get_contents(/var/www/clients/client1/web2/private/tester/shield/shield_py3.py): failed to open stream: No such file or directory D:\OSPanel\domains\acm.tatunf.local\web\application\controllers\Settings.php 49
