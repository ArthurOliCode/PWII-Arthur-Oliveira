<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro e Consulta de Usuários</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #00004d; 
            font-family: 'Inter', sans-serif;
        }

        /* Estilo da Tabela  com classes Tailwind para borda cinza escura */
        .user-table th, .user-table td {
            border-bottom: 1px solid #475569; /* slate-600: Cinza escuro para as bordas */
            padding: 12px 16px;
            text-align: left;
        }
        .user-table th {
            background-color: #1e293b; /* slate-800 ligeiramente mais claro para cabeçalho */
            font-weight: 600;
            color: #f8fafc;
        }
    </style>

    <?php
        // conexão com o arquivo php para mostragem de usuários
        require_once 'list_users.php'; 
    ?>
</head>
<body class="p-4 sm:p-8 text-gray-100">

    <!-- Container Principal Centralizado -->
    <div class="max-w-4xl mx-auto space-y-10">

        <!-- Seção 1: Formulário de Cadastro de Novo Usuário -->
        <div class="bg-slate-800 p-6 md:p-10 rounded-xl shadow-2xl border border-slate-700/50">
            <h1 class="text-2xl sm:text-3xl font-bold text-white mb-6 border-b border-slate-700 pb-2">
                Adicionar Novo Usuário
            </h1>
            <p class="text-slate-400 mb-8">
                Preencha os campos abaixo para adicionar um novo registro à base de dados.
            </p>

            
            <!-- Formulário para Adicionar Usuário. -->
            <form action="add_user.php" method="POST" class="space-y-4">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="nome" class="block text-sm font-medium text-slate-300">Nome Completo</label>
                        <input 
                            type="text" 
                            id="nome" 
                            name="nome" 
                            required 
                            placeholder="Nome e Sobrenome"
                            class="mt-1 block w-full px-3 py-2 border border-slate-700 rounded-lg bg-slate-700 text-white placeholder-slate-400 focus:ring-indigo-500 focus:border-indigo-500"
                        >
                    </div>

                    <!-- Login (Email) - Corresponde ao campo de consulta 'login' no BD -->
                    <div>
                        <label for="login" class="block text-sm font-medium text-slate-300">Login (E-mail)</label>
                        <input 
                            type="email" 
                            id="login" 
                            name="login" 
                            required 
                            placeholder="exemplo@dominio.com"
                            class="mt-1 block w-full px-3 py-2 border border-slate-700 rounded-lg bg-slate-700 text-white placeholder-slate-400 focus:ring-indigo-500 focus:border-indigo-500"
                        >
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Telefone -->
                    <div>
                        <label for="telefone" class="block text-sm font-medium text-slate-300">Telefone</label>
                        <input 
                            type="text" 
                            id="telefone" 
                            name="telefone" 
                            placeholder="(XX) XXXXX-XXXX"
                            class="mt-1 block w-full px-3 py-2 border border-slate-700 rounded-lg bg-slate-700 text-white placeholder-slate-400 focus:ring-indigo-500 focus:border-indigo-500"
                        >
                    </div>
                    
                    <!-- CPF -->
                    <div>
                        <label for="cpf" class="block text-sm font-medium text-slate-300">CPF</label>
                        <input 
                            type="text" 
                            id="cpf" 
                            name="cpf" 
                            placeholder="XXX.XXX.XXX-XX"
                            class="mt-1 block w-full px-3 py-2 border border-slate-700 rounded-lg bg-slate-700 text-white placeholder-slate-400 focus:ring-indigo-500 focus:border-indigo-500"
                        >
                    </div>

                    <!-- Senha do Novo Usuário -->
                    <div>
                        <label for="nova_senha" class="block text-sm font-medium text-slate-300">Senha</label>
                        <input 
                            type="password" 
                            id="nova_senha" 
                            name="nova_senha" 
                            required 
                            placeholder="Mínimo 8 caracteres"
                            class="mt-1 block w-full px-3 py-2 border border-slate-700 rounded-lg bg-slate-700 text-white placeholder-slate-400 focus:ring-indigo-500 focus:border-indigo-500"
                        >
                    </div>
                </div>

                <!-- Botão de Submissão -->
                <div class="pt-4">
                    <button 
                        type="submit" 
                        class="w-full py-3 px-4 border border-transparent rounded-lg shadow-md text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150"
                    >
                        Registrar Usuário
                    </button>
                </div>

            </form>
        </div>
        
        <!-- Seção 2: Tabela de Visualização de Usuários -->
        <div class="bg-slate-800 p-6 md:p-10 rounded-xl shadow-2xl border border-slate-700/50">
            <h2 class="text-2xl font-bold text-white mb-6 border-b border-slate-700 pb-2">
                Usuários Registrados (Tabela "Usuarios")
            </h2>
            
            <div class="overflow-x-auto rounded-lg border border-slate-700">
                <table class="min-w-full user-table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Exibição de usuários pela function listar_usuários do arquivo list_users.php -->
                       <?php 
                        $lista_usuarios = listar_usuarios();

                        if(!empty($lista_usuarios)){
                            foreach($lista_usuarios as $usuario){
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($usuario['nome']) . "</td>";
                                echo "<td>" . htmlspecialchars($usuario['login']) . "</td>";
                                echo "<td>" . htmlspecialchars($usuario['telefone']) . "</td>";
                                echo "<td>" . htmlspecialchars($usuario['cpf']) . "</td>";
                                echo "</tr>";
                            }
                        }else{
                            echo '<tr><td colspan="4" class="text-center text-slate-400 py-4">Nenhum usuário encontrado. </td></tr>';
                        }
                       ?>
                    </tbody>
                </table>
            </div>
            <p class="text-sm text-slate-500 mt-4">
                Nota: Esta tabela é um exemplo. Você precisará criar um script PHP para consultar e listar os dados reais.
            </p>
        </div>

    </div>

</body>
</html>

