<?php

/* 
 * Условие.
 *   Напишете вложени for цикли, които извеждат следното:
     *
     * *
     * * *
     * * * *
     * * * * *
 */
// Създаваме променлива кочто ще се увеличава с 1 след всяко приниране.
$number=1;
// Първия цикъл отговаря за броя редове
for($i=1; $i <=5; $i++){
    // Вторият цикъл е за броят елементи на ред.
    for($j=1; $j <=$i; $j++){
         echo $number . " ";
         //Увеличаване на променливата.
         $number++;
        
    }
    //Преминаваме на нов ред.
    echo '<br>';
}

echo '<br/>';
// Създаваме променлива кочто ще се увеличава с 1 след всяко приниране.
$number1=1;
// Първия цикъл отговаря за броя редове
for($i=1; $i <=10; $i++){
    // Вторият цикъл е за броят елементи на ред.
    for($j=1; $j <=$i; $j++){
         echo $number1 . " ";
         //Увеличаване на променливата.
         $number1++;
        
    }
    //Преминаваме на нов ред.
    echo '<br>';
}

echo '<br/>';
// Създаваме променлива кочто ще се увеличава с 1 след всяко приниране.
$number2=1;
// Първия цикъл отговаря за броя редове
for($i=1; $i <=21; $i++){
    // Вторият цикъл е за броят елементи на ред.
    for($j=1; $j <=$i; $j++){
         echo $number2 . " ";
         //Увеличаване на променливата.
         $number2++;
        
    }
    //Преминаваме на нов ред.
    echo '<br>';
}