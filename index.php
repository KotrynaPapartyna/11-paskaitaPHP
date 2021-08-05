
<?php

// 1. paprasta masyvas su 10 elementu/ klientu 
$masyvas= array(0,1,2,3,4,5,6,7,8,9);

// 8. galima kintamaji susikurti ir pries for- gauname elementu skaiciu
$k=0; 
// 2. atvaizduoti visus masyvo elementus. nepamirsti prie masyvo [$i]
    for ($i=0; $i<count($masyvas); $i++) {
        echo $masyvas[$i]; 
        echo "<br>"; 
        // $k=9, tik po $k++ prisideda 1 elementas 
        $k++; 
        // $k= 10, po ciklo prasisukimo pridedamas 1 elementas 
    }

    // 6. bandome paleisti $i uz ciklo . po 8 $k sukurimo atvaizdavimas $k. 
echo "i reiksme po ciklo for.$k"; 

// 4. susikuriam kintamaji pries foreach , lygu nuliui 
    $i=0; 

// 3. foreach cikle nenaudojamas $i (index sutrumpinimas)
// kiekvienam elementui atvaizduoja tik eiliskuma, ne indeksa 
    foreach($masyvas as $elementas) {
        echo $elementas; 
        echo "<br>"; 
        // $i=9, tik po $i++ prisideda 1 elementas 
        // 5. foreach tobulinimas- indexo sukurimui, kaip for funkcijoje
        $i++; 
        // $i= 10, po ciklo prasisukimo pridedamas 1 elementas 
    }

// 7. kintamasis uz ciklo ribos galioja 
// bandom issivesti po foreach ciklo, reiksme- elementu skaicius masyve 
echo "i reiksme po ciklo foreach.$i"; 

?>