<?php
    #Página com o form para incluir um aluno
    include_once("controller/curso_controller.php");
    include_once("view/curso_html.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE CADASTRO DE ALUNOS</title>
</head>
<body>
    <center><h1 style="color: green;">SISTEMA DE CADASTRO DE ALUNOS</h1></center>

    <p><b>Informe os dados para cadastro::</b></p>

    <form name="frmCadastroAlunos" method="POST" action="alunos_inc_exec.php">
        <table>
            <tr>
                <td><span><b>Nome:</b></span></td>
                <td><input type="text" name="nome_aluno" size="45" maxlength="70"></td>
            </tr>
            <tr>
                <td><span><b>Idade:</b></span></td>
                <td><input type="text" name="idade_aluno" size="3" maxlength="3"></td>
            </tr>
            <tr>
                <td><span><b>Estrangeiro:</b></span></td>
                <td><select name="estrangeiro_Aluno">
                        <option value="S">SIM</option>
                        <option value="N">NÃO</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><span><b>Curso:</b></span></td>
                <td>
                    <?php
                        //Implementar consulta no banco -- OK                   

                        //Percorrer os resultados

                        $cursoCont = new CursoController();
                        $cursos = $cursoCont->listar();

                        CursoHTML::desenhaSelect($cursos, "curso_aluno");

                        //Select com as opções de cursos
                    ?>
                </td>
            </tr>
        </table>

        <button type="submit">Gravar</button>
        <button type="reset">Limpar</button>
    </form><br>
    
    <a href="index.php">Voltar</a>
</body>
</html>