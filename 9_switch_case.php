<?php
$age = 12;
switch ($age){  //switch case  statement me koi bhi ak case match
                 // ho gaya hai to uske sabhi bad wala bhi print hoga
    case 12:
        echo 'you  are 12 years old <br>';

     case (45):
        echo'you are 45 years old <br>';  
         
        case (56):
            echo 'you are 56 years old man <br>';
            default:
            echo 'you are age is weird <br> ';
        } 

        $age = 12;
switch ($age){  
    case 12:
        echo 'you  are 12 years old <br>';
        break; //break statement (use is liye karte hai jo case mila hai serf wahi print ho koi aur nahi) 

     case (45):
        echo'you are 45 years old <br>';  
        break; 
         
        case (56):
            echo 'you are 56 years old man <br>';
            break; 
            
            default:
            echo 'you are age is weird <br> ';
            break; 
        }
?>    