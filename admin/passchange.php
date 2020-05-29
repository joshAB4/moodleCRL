<?php
include('config.php');


////////////////////////////////////////////////////////////////////

$username = 'bas4';
$newpassword = 'Arun9841';

////////////////////////////////////////////////////////////////////




if ($userobj = get_record_select('user', "username='$username'", 'id, password')) {
    $userobj->password = md5($newpassword);
    update_record('user', $userobj);
    echo 'Password changed';
} else {
    echo 'Invalid username';
}

?>