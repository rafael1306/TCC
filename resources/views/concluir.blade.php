<x-layout>
    <link rel="stylesheet" href="/css/atividade.css">
    <div class="flex-col gap-10 padding-30 text-center">
        <div class="texto-grande">{{ $atividade->nome }}</div>
        <div class="texto-pequeno">{{ $atividade->descricao }}</div>
        @if($atividade->prazo)
        <div class="texto-pequeno">Prazo: {{ $atividade->prazo }}</div>
        @endif
        <br><br>
        <strong class="texto-pequeno">XP a ganhar: {{ $atividade->nivel * 10 }}</strong>
    </div>
    <div class="grow"></div>
    <div class="flex-col space-30">
        <a class="botao" href="/salvar-conclusao/{{ $atividade->id }}">Concluir</a>
        <a class="botao-alt" href="/excluir/{{ $atividade->id }}">Excluir</a>
        <a class="botao-alt" href="#" onclick="history.back()">Voltar</a>
    </div>
</x-layout>