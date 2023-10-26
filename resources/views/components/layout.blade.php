<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tcc</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/flex-style.css">
    <link rel="stylesheet" href="/css/layout.css">


</head>

<body>
    <header id="cabecalho" class="flex-row space-20 content-vcenter">
        <img src="/img/menu.svg" alt="" onclick="document.querySelector('#app-menu').classList.toggle('esconder')">
        <span>TCC</span>
    </header>
    <nav id="app-menu" class="flex-col fit-width space-30 esconder">
        <a href="/" class="flex-roe gap-20 content-vcenter">

            Atividades

        </a>
        <a href="/concluir" class="flex-roe gap-20 content-vcenter">

            Concluida

        </a>
        <a href="/historico" class="flex-roe gap-20 content-vcenter">

            Histórico

        </a>
        <a href="/perfil" class="flex-roe gap-20 content-vcenter">

            Perfil

        </a>
    </nav>
    <div id="conteudo" class="grow">
        {{ $slot }}
    </div>


</body>

</html>