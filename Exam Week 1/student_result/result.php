<?php
// Example: input marks for 5 subjects
$math = 100;
$english = 85;
$science = 35;
$history = 45;
$geography = 33;
// Function to calculate the result
function calculateResult($math, $english, $science, $history, $geography) {
    // Mark range validation and fail condition
    if ($math < 0 || $math > 100 || 
        $english < 0 || $english > 100 || 
        $science < 0 || $science > 100 || 
        $history < 0 || $history > 100 || 
        $geography < 0 || $geography > 100) {
        return "Mark range is invalid!";
    }

    if ($math < 33 || $english < 33 || $science < 33 || $history < 33 || $geography < 33) {
        return "Fail: Student scored below 33 in at least one subject.";
    }

    // Calculate total and average
    $totalMarks = $math + $english + $science + $history + $geography;
    $averageMarks = $totalMarks / 5;

    // Determine grade using switch-case
    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = 'A';
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = 'B';
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = 'C';
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }

    // Output the result
    return "Total Marks: $totalMarks\nAverage Marks: $averageMarks\nGrade: $grade";
}

// Call the function and print the result
echo calculateResult($math, $english, $science, $history, $geography);
