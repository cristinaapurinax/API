<?php
function verificarURL($URL) {
    return $url == parse_url($_SERVER ['REQUEST_URL'], PHP_URL_PATH);
}

function verificarmetodo ($metodo) {
    return $metodo == $_SERVER ['REQUEST_METHOD'];
}

$rotas = [

    [
    "url" => "/",
    "metodo" => "get",
    "conteudo" => "pagina principal",
    ]

    [
    "url" => "/perfil",
    "metodo" => "get",
    "conteudo" => "pagina de perfil",
    ]

    [
        "url" => "/amigos",
        "metodo" => "get",
        "conteudo" => "pagina de amigos",
    ]

    ];

    foreach ($rotas as $rota) {
        if(verificarurl($rota ['url']) && verificarmetodo ($rota['metodo'])) 
        {
            echo $rota['conteudo']
        }


    }
