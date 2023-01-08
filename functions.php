<?php

    //funzione genera password:
    var_dump($_GET);
    
    function randPassword(){
        
        $characters = "abcdefghilmnopqrstuvz";
        $specialChar = "£$%&/*°§";
        $numbers= "123456789";
        
        $totChars = $characters . $specialChar . $numbers;

        $lengtPass= $_GET['lengthPassword'] ?? "";

        $pass= '';

        $i = 0;
        while ($i < $lengtPass) {
            $char = substr($totChars, rand(0, strlen($totChars)-1), 1);  

            $pass .= $char;
            $i++;
        }
    
        return $pass;
    }