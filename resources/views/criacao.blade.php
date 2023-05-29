<x-layout>
    <link rel="stylesheet" href="/css/atividade.css">
    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Nome</div>
        <input type="text">
    </div>
    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Descrição</div>
        <input type="text">
    </div>
    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Prazo</div>
        <input type="date">
    </div>
    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Nivel</div>
        <select name="nivel" id="nivel">
            <option value="muito facil">muito facil</option>
            <option value="facil">facil</option>
            <option value="medio">medio</option>
            <option value="dificil">dificil</option>
            <option value="muito dificil">muito dificil</option>
        </select>
    </div>
    <div class="grow"></div>
    <div class="flex-row content-center">
        <a class="botao" href="">salvar</a>
    </div>


</x-layout>