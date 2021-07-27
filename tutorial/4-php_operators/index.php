<?php
    // ********************Operators in PHP********************
    /*
        1. Arithematic Operators
        2. Assignment Operators
        3. Comparison Operators
        4. Increment/Decrement Operators
        5. Logical Operators
    */

    $a = 10;
    $b = 5;

    // 1. Arithematic Operators
    echo "<h1>Arithematic Operators</h1>";
    echo " The value of $a + $b is ";
    echo $a + $b;
    echo "<br />";
    echo " The value of $a - $b is ";
    echo $a - $b;
    echo "<br />";
    echo " The value of $a * $b is ";
    echo $a * $b;
    echo "<br />";
    echo " The value of $a / $b is ";
    echo $a / $b;
    echo "<br />";

    // 2. Assignment Operators
    echo "<h1>Assignment Operators</h1>";
    $newVar = $a;
    // $newVar += 1;
    // $newVar -= 1;
    // $newVar *= 2;
    // $newVar /= 2;
    echo " The Value Of newVar is ";
    echo $newVar;
    echo "<br />";

    // 3. Comparison Operators
    echo "<h1>Comparison Operators</h1>";
    echo " The Value Of 1==4 is ";
    echo var_dump(1==4);
    echo "<br />";
    echo " The Value Of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br />";
    echo " The Value Of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br />";
    echo " The Value Of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br />";

    // 4. Increment/Decrement Operators
    echo "<h1>Increment/Decrement Operators</h1>";
    $a++;
    echo $a;
    echo "<br />";
    $a--;
    echo $a;
    echo "<br />";
    ++$a;
    echo $a;
    echo "<br />";
    --$a;
    echo $a;
    echo "<br />";

    // 5. Logical Operators
    echo "<h1>Logical Operators</h1>";
    /*
        1. and (&&)
        2. or (||)
        3. xor
    */

    /*
    if ((4 > 2) and (8 > 4)) {
        echo "Statement is correct";
    } 
    else {
        echo "Sorry! Statement is incorrect";
    }
    echo "<br />";
    */

    /*
    if ((4 > 2) && (8 > 4)) {
        echo "Statement is correct";
    } 
    else {
        echo "Sorry! Statement is incorrect";
    }
    echo "<br />";
    */

    /*
    if ((4 > 2) or (2 > 4)) {
        echo "Statement is correct";
    } 
    else {
        echo "Sorry! Statement is incorrect";
    }
    echo "<br />";
    */

    /*
    if ((4 > 2) || (8 > 4)) {
        echo "Statement is correct";
    } 
    else {
        echo "Sorry! Statement is incorrect";
    }
    echo "<br />";
    */

    /*
    if ((1 > 2) xor (8 > 4)) {
        echo "Statement is correct";
    } 
    else {
        echo "Sorry! Statement is incorrect";
    }
    echo "<br />";
    */
?>