<?php

function emailVerify($email)
{
    if (!ereg('^([a-zA-Z0-9.-])*([@])([a-z0-9]).([a-z]{2,3})', $email))
    {
        $msg = 'E-mail Inv&aacute;lido!';
        return $msg;
    }
    else
    {
        $domain = explode('@', $email);

        if(!checkdnsrr($domain[1], 'A'))
        {
            $msg = 'E-mail Inv&aacute;lido!';
            return $msg;
        }
        else
        {
            return true;
        }
    }
}