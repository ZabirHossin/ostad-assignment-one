<?php

function calculateStudentResult($bangla, $english, $math, $physics, $chemistry)
{
        // 1. IF mark is less then 0 or greater then 100 then show invalid marks....

    if ($bangla <= 100 && $bangla >= 0 && $english <= 100 && $english >= 0 && $math <= 100 && $math >= 0
     && $physics <= 100 && $physics >= 0 && $chemistry <= 100 && $chemistry >= 0) {

            // 1. IF mark is less then 33 then show You Are Failed....

        if ($bangla > 33 && $english > 33 && $math > 33 && $physics > 33 && $chemistry > 33) {

            // 3.Grade Calculation....
            // 4.Output: Total Marks, Average Marks, Grade....

            $totalMark = ($bangla + $english + $math + $physics + $chemistry);
            echo "Total Marks: $totalMark \n";

            $average = ($totalMark / 5);
            echo "Average Marks: $average \n";

            switch (true) {
                case ($average >= 80 && $average <= 100):
                    echo "Grade: A+";
                    break;
                case ($average >= 70 && $average < 80):
                    echo "Grade: A";
                    break;
                case ($average >= 60 && $average < 70):
                    echo "Grade: A-";
                    break;
                case ($average >= 50 && $average < 60):
                    echo "Grade: B";
                    break;
                case ($average >= 40 && $average < 50):
                    echo "Grade: C";
                    break;
                case ($average >= 33 && $average < 40):
                    echo "Grade: D";
                    break;

                default:
                    echo "Grade: F";
                    break;

            }

        } else {
            echo "You Are Failed";
        }

    } else {
        echo "Invalid Marks You Input";
    }

}


calculateStudentResult(78, 80, 70, 78, 60);


// 1. IF input less then 0 or greater then 100 then show --Invalid Marks You Input....
// 1. IF input less then 33 then show --You Are Failed....

?>