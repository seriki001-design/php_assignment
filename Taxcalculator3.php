<?php
function calculateTax ( ) {
    $salary = readline(prompt: "salary input: ");
        switch ($salary) {
            case ($salary > 100000):
               $percentage = ($salary/100)*50;
               echo "$percentage";
               break;
            case ($salary >= 80000 && $salary <= 90000):
               $percentage = ($salary/100)*35;
               echo "$percentage";
               break;
            case ($salary < 80000):
                $percentage = ($salary/100)*20;
                echo "$percentage";
            default:
                $percentage = 0;
                break;
        }

}
calculateTax ( );