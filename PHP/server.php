<?php

    //prendiamo i dati da discs.json con file_get_content(path) e li trasformiamo in una stringa, assegnandola poi alla variabile $string
    $string = file_get_contents('../discs.json');

    //trasformiamo la stringa in un array associativo comprensibile da PHP e lo assegniamo alla variabile $discs (diventerà un array associativo contenente tutti i valori del json)
    $discs = json_decode($string, true);

    
    //permette di cambiare il tipo del contenuto interpretato dal browser rendendolo a tutti gli effetti un file json
    header('Content-Type: application/json');

    // restituisce un array diverso in base ai parametri passati durante la chiamata
    if(isset($_GET['discIndex'])){
        echo json_encode($discs[$_GET['discIndex']]);
    }else{
        echo json_encode($discs);
    }


    