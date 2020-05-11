<?php
$db['db_host'] = 'localhost';
$db['db_username'] = 'root';
$db['db_password'] = '';
$db['db_name'] = 'weightcomplexity';
$db['db_port'] = '3308';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}
$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
if ($con) {
} else {
    ?>

    <center><img width="60%" src="https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif"></center>


    <?php
    die('<p style="font-size: 20px; font-weight: bold; text-align: center; margin-top: -8%;">Database Connection Error Occurred<br></p><p style="font-size: 15px; text-align: center;">Sorry for the inconvenience caused</p>');


}
?>
