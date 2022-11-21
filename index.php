<?php session_start(); ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas: Devmedia</title>
</head>

<body>
    <h1 style="margin-bottom: 5px;">Gerenciador de Tarefas</h1>
    <form action="tarefas.php">
        <fieldset> <!-- AGRUPA ELEMENTOS DE UM FORMULÁRIO -->
            <legend>Nova tarefa</legend>

            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>
        </fieldset>
    
    <hr>
    
    <label>
        Descrição (Opcional):
        <textarea name="descricao"></textarea>
    </label>

    <hr>

    <label>
        Prazo (Opcional):
        <input type="text" name="prazo" />
    </label>
    
    <hr>

    <fieldset>
        <legend>Prioridade:</legend>

        <label>
            <input type="radio" name="prioridade" value="Baixa" checked />
            Baixa
            
            <input type="radio" name="prioridade" value="Média" />
            Média
            
            <input type="radio" name="prioridade" value="Alta" />
            Alta
        </label>
        
        <hr>
        
        <label>
            Tarefa concluída:
            <input type="checkbox" name="concluida" value="Sim" />
        </label>
        
        <input type="submit" value="Cadastrar" />
    </fieldset>
</form>

    <hr>

    <table>
        <tr>
            <th style="padding-right: 25px;">Tarefa</th>
            <th style="padding-right: 25px;">Descrição</th>
            <th style="padding-right: 25px;">Prazo</th>
            <th style="padding-right: 25px;">Prioridade</th>
            <th>Concluída</th>
        </tr>
    
        <?php foreach ($lista_tarefas as $tarefa) : ?>
    
            <tr>
                <td><?php echo $tarefa['nome'] . '<hr>'; ?></td>
                <td><?php echo $tarefa['descricao'] . '<hr>'; ?></td>
                <td><?php echo $tarefa['prazo'] . '<hr>'; ?></td>
                <td><?php echo $tarefa['prioridade'] . '<hr>'; ?></td>
                <td><?php echo $tarefa['concluida'] . '<hr>'; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
<?php // session_destroy(); ?>