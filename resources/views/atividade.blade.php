<x-layout>
    <link rel="stylesheet" href="/css/atividade.css">


    <div class="flex-row space-30" style="background-color: rgb(185, 184, 184);">
        <img src="/img/icone.svg" alt="" width="80px" height="80px">
        <div class="flex-col grow">
            <div class="texto-grande">{{ $usuario->nome }}</div>
            <div class="texto-pequeno">Nivel {{ $usuario->getLevel() }}</div>
            <meter value="{{ $usuario->xp }}" min="{{ $usuario->getCurrentLevelBase() }}" max="{{ $usuario->getNextLevelXPRequirement() }}"></meter>
        </div>
    </div>

    @foreach($atividades as $a)
    <a class="flex-col gap-10 padding-30" href="/concluir/{{ $a->id }}">
        <div class="texto-grande">{{ $a->nome }}</div>
        <div class="texto-pequeno">[{{ $a->getNivelTxt() }}] {{ $a->descricao }}</div>
        
        <div class="flex-row gap-10">
            <img src="img/20.webp" alt="" width="30px" height="30px">
            <input type="datetime-local" value="{{ $a->prazo }}" readonly>
        </div>
    </a>
    @endforeach

    @if($atividades->isEmpty())
    <div class="flex-col content-center space-30">
        Nenhuma tarefa por enquanto.
    </div>
    @endif

    <div class="flex-row content-center space-30">
        <a class="botao" href="/criacao"> Adicionar Tarefa</a>
    </div>
    
</x-layout>