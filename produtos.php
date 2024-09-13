<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor 24 Online</title>
    <link rel="stylesheet" href="styles.css"> </head>
<body>
    <h1>Bem-vindo à Sabor 24</h1>
    <h2>Menu</h2>

    <table>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Detalhes</th>
        </tr>
        <?php
        $produtos = [
            [
                'id' => 777,
                'nome' => 'SNACK SAUDÁVEL ',
                'descricao' => 'Snack feito com frutas desidratadas',
                'preco' => 15.90,
                'url' => 'detalhes.php'
            ],
            [    'id' => 444,
                'nome' => 'REFEIÇÃO CONGELADA FITNESS',
                'descricao' => 'Refeição balanceada, rica em proteinas.',
                'preco' => 25.99,
                'url' => 'detalhes.php'],
                
            [   'id' =>333,
                'nome' => 'SUCO NATURAL DETOX',
                'descricao' => 'Suco natural a base de frutas e vegetais.',
                'preco' => 8.75,
                'url' => 'detalhes.php']
           
        ];

        foreach ($produtos as $produto) {
            echo "<tr>";
            echo "<td>" . $produto['nome'] . "</td>";
            echo "<td>" . $produto['descricao'] . "</td>";
            echo "<td>R$ " . number_format(num: $produto['preco'], decimals: 2, decimal_separator: ',', thousands_separator: '.') . "</td>";
            echo "<td><a href='detalhes.php?id=" . $produto['id'] . "'>Ver detalhes</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>