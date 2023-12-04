<x-layout>
    <link rel="stylesheet" href="/css/atividade.css">
    <form method="post">

        <div class="flex-col gap-10 padding-30">
            <div class="texto-grande">Nome</div>
            <input type="text" name="nome" required>
        </div>

        <div class="flex-col gap-10 padding-30">
            <div class="texto-grande">Nivel</div>
            <select name="nivel" id="nivel" required>
                <option value="1">Muito Fácil (10xp)</option>
                <option value="2">Fácil (20xp)</option>
                <option value="3">Médio (30xp)</option>
                <option value="4">Difícil (40xp)</option>
                <option value="5">Muito Difícil (50xp)</option>
            </select>
        </div>

        <div class="flex-col gap-10 padding-30">
            <div class="texto-grande">Prazo</div>
            <input type="datetime-local" placeholder="prazo" name="prazo">
        </div>

        <div class="flex-col gap-10 padding-30">
            <div class="texto-grande">Descrição</div>
            <textarea type="text" name="descricao"></textarea>
        </div>
        
        <div class="grow"></div>

        <div class="flex-row content-center  space-30">
            <button type="submit" class="botao"> Salvar</button>
        </div>
        @csrf
    </form>

</x-layout>