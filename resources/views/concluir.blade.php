<x-layout>
    <link rel="stylesheet" href="/css/atividade.css">
    <div class="flex-col gap-10 padding-30">
        <div class="texto-grande">{{ $atividade->nome }}</div>
        <div class="texto-grande">{{ $atividade->descricao }}</div>
        @if($atividade->prazo)
        <div class="texto-pequeno">Prazo: {{ $atividade->prazo }}</div>
        @endif
        <div class="texto-pequeno">XP a ganhar: {{ $atividade->nivel * 10 }}</div>
    </div>
    <div class="grow"></div>
    <div class="flex-col space-30">
        <a class="botao" href="/salvar-conclusao/{{ $atividade->id }}">Concluir</a>
        <a class="botao" href="/excluir-conclusao/{{ $atividade->id }}">Excluir</a>
    </div>
</x-layout>