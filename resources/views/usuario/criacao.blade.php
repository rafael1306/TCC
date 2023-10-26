<x-layout>

    <h1>Criação de usuário</h1>

    <form method="post">
        @csrf
        <input type="text" placeholder="Nome" name="nome" required>
        <input type="datetime-local" placeholder="Data de Nascimento" name="data_nascimento" required>
        <input type="text" placeholder="Senha" name="senha" required>
        <button type="submit">Salvar</button>
    </form>
</x-layout>