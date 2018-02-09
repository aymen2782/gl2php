<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 09/02/2018
 * Time: 09:06
 */

$maVar = 'Bonjour';
phpinfo(INFO_VARIABLES );
function test(){
    global $maVar;
    var_dump($maVar);
}

test();