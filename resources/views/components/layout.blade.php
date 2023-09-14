<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tcc</title>
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/flex-style.css">
    <link rel="stylesheet" href="/css/layout.css">

    
</head>

<body>
    <header id="cabecalho" class="flex-row space-20 content-vcenter">
        <img src="img/menu.svg" alt="">
        <span>TCC</span>
    </header>
    <div id="conteudo" class="grow">
        {{ $slot }}
    </div>
    <div class="conteudo grow">
        <nav>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </nav>
    </div>


</body>

</html>