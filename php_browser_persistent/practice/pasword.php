<?php
$password="paSsword";
$encrypt_password=password_hash($password,PASSWORD_BCRYPT);
// echo $encrypt_password;
if(password_verify('paSsword',$encrypt_password))
{
    echo "you have acces to this page";
}else{
    echo "yo dont acces to this page";
}