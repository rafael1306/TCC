<x-layout>
    <link rel="stylesheet" href="/css/atividade.css">


    <div class="flex-row padding-30" style="background-color: rgb(185, 184, 184);">
        <img src="/img/icone.svg" alt="" width="80px" height="80px">
        <div class="flex-col">
            <div class="texto-grande">Nome do cidadão</div>
            <div class="texto-pequeno">Nivel 77</div>
            <progress value="50" max="100"></progress>
        </div>
    </div>


    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Nome da atividade</div>
        <div class="texto-pequeno">Descrição da atividade</div>
        <div class="flex-row gap-10">
            <img src="img/20.webp" alt="" width="30px" height="30px">
            <div class="texto-pequeno">prazo</div>
            <input type="date" id="diaa" name="diaa" readonly>
        </div>
    </div>


    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Nome da atividade</div>
        <div class="texto-pequeno">Descrição da atividade</div>
        <div class="flex-row gap-10">
            <img src="img/20.webp" alt="" width="30px" height="30px">
            <div class="texto-pequeno">prazo</div>
            <input type="date" id="diaa" name="diaa" readonly>
        </div>
    </div>


    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Nome da atividade</div>
        <div class="texto-pequeno">Descrição da atividade</div>
    </div>
    <div class="grow"></div>


    <div class="flex-row content-center">
        <a class="botao" href="/criacao"> adiciona atividade</a>
    </div>
    
</x-layout>