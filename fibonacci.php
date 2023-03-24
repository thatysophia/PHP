<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Sequência de Fibonacci</title>
</head>
<body>
    <?php
        function fibonacci($n) {
            if ($n <= 1) {
                return $n;
            } else {
                return fibonacci($n-1) + fibonacci($n-2);
            }
        }

        if(isset($_GET["final"])) {
            $final = $_GET["final"];
            echo "<table>
                    <thead>
                        <tr>
                            <th>Valor de Fibonacci</th>
                        </tr>
                    </thead>
                    <tbody>";
            for ($i = 0; $i <= $final; $i++) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . fibonacci($i) . "</td>";
                echo "</tr>";
            }
            echo "</tbody>
                </table>";
        }
    ?>
    <form method="GET">
        <label for="final">Digite um número de 0 a 35:</label>
        <input type="text" name="final" id="final">
        <button type="submit">Gerar</button>
    </form>
</body>
</html>
