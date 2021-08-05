<?php 

// header("Location: forma.php");

// 1. reikia formos, kurioje butu tik mygtuka
// 2. paspaudus mugtuka yra istrinami cookies ir teises
// 3. nukreipimas i pradini langa 

// ar egzistuoja cookie prisijungti 
if(isset($_COOKIE['prisijungti']) && isset($_COOKIE['teises']))
{
    //$_COOKIE['teises']) == 3
    // ar egistuoja sausainukai 
    echo "Sveikas atvykes ".($_COOKIE['prisijungti']);
    // susikuriam mygtuka 
    // atsijungimo forma isvedame su echo  
    echo 
    '<form action="manopaskyra.php" method="get">
    <button type="submit" name="atsijungti"> atsijungti</button>
    </form>'; 

    if (isset($_GET["atsijungti"])) {
        echo "paspaustas atsijungimo mygtukas";

        // nustatomas cookie galiojimas- laikas- valanda atgal
        // funkcijos kitos tokiam dalykui nera, tik laikas nurodomas i praeiti 
        // istrinamas kam galioja coockies nes galioja viskam 
        setcookie("prisijungti",  "", time() - 3600, "/");
        setcookie("teises",  "", time() - 3600, "/");
        header ("Location:forma.php"); 
    }

} else {
    // jeigu jungiasi neprisijunges asmuo= nukreipiama i prisijungimo langa 
    header ("Location:forma.php");
}

?>



