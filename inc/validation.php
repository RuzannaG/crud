<?php 
$error = '';
$success = '';

function requiredInput($value)
{
    $str = trim($value);
    if(strlen($str) > 0)
    {
        return true;
    }
    return false;
}


function santString($value)
{
    $str = trim($value);
    $str = filter_var($str,FILTER_SANITIZE_STRING);
    return $str;
}



function santEmail($email)
{
    $email = trim($email);
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    return $email;
}




function minInput($value,$min)
{
    if(strlen($value) < $min)
    {
        return false;
    }
    return true;
}


function maxInput($value,$max)
{
    if(strlen($value) > $max)
    {
        return false;
    }
    return true;
}



function validEmail($email)
{
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    return false;
}
