<?php

    include "simple_html_dom.php";

    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://www.google.com/search?q=ms+dhoni");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    
    curl_close($ch);

    $html = new simple_html_dom();
    $html->load($response);

    // Parsing th links of search results
    foreach($html->find('div[class="BNeawe UPmit AP7Wnd"]') as $link){
        echo $link->plaintext."<br>";
    }
    
?>