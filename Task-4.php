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
// Първия цикъл отговаря за броя редове
for($i=1; $i <=5; $i++){
    // Вторият цикъл е за броят елементи на ред.
    for($j=1; $j <=$i; $j++){
         echo '*';
         
    }
    //Преминаваме на нов ред.
    echo '<br>';
}