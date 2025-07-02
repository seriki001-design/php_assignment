<?php

function calculateTax ( ) {
    $salary = readline(prompt: "salary input: ");
        if ( $salary > 100000) {
            $percentage = ( $salary /100) *50;
                echo "$percentage";
        } 
        if ($salary >= 80000 && $salary <= 90000) {
            $percentage = ( $salary /100) *35;
                echo "$percentage";
        }
        if ($salary < 80000) {
            $percentage = ( $salary /100) *20;
                echo "$percentage";
        }

}
     calculateTax();