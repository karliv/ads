<?php

function Palindrome($string) {

    if ((strlen($string) == 1) || (strlen($string) == 0)) {
        return " STRING IS PALINDROME";
    }

    else {

        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)) {
            return Palindrome(substr($string,1,strlen($string) -2));
        }
        else { return " STRING IS NOT A PALINDROME"; }
    }
}

$text2 = 'minim';
echo Palindrome($text2);
