<x-layout>
    <link rel="stylesheet" href="/css/atividade.css">
    <form method="post">
    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Nome</div>
        <input type="text" name="nome" required>
    </div>
    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Descrição</div>
        <input type="text" name="descricao">
    </div>
    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Prazo</div>
        <input type="datetime-local" placeholder="prazo" name="prazo">
    </div>
    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">Nivel</div>
        <select name="nivel" id="nivel" required>
            <option value="muito facil">muito facil</option>
            <option value="facil">facil</option>
            <option value="medio">medio</option>
            <option value="dificil">dificil</option>
            <option value="muito dificil">muito dificil</option>
        </select>
    </div>
    <div class="grow"></div>
    <div class="flex-row content-center">
        <button class="button" type="submit" > Salvar</button>
    </div>
    @csrf
    </form>

</x-layout>