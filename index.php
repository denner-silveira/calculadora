<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="calculator">
    <h2>Calculadora</h2>
    
    <!-- Formulário para entrada de dados -->
    <form method="POST" action="">
        <!-- Entrada para o primeiro número -->
        <input type="number" name="num1" placeholder="Primeiro número" required>
        
        <!-- Seleção de operação -->
        <select name="operation" required>
            <option value="">Escolha a operação</option>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>
        
        <!-- Entrada para o segundo número -->
        <input type="number" name="num2" placeholder="Segundo número" required>
        
        <!-- Botão para submeter o cálculo -->
        <button type="submit">Calcular</button>
    </form>

    <?php
    // Processa a operação ao enviar o formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os números e a operação selecionada pelo usuário
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = "";

        // Executa a operação selecionada
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                // Verifica divisão por zero no divisor (num2)
                if ($num2 == 0) {
                    $result = "Erro: Divisão por zero!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Operação inválida!";
        }

        // Exibe o resultado do cálculo
        echo "<div class='result'>Resultado: $result</div>";
    }
    ?>
</div>

</body>
</html>

<!-- Desenvolvido por Denner Silveira -->
