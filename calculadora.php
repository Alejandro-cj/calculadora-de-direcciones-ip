<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Direcciones IP</title>
    <link rel="stylesheet" href="calculadora.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 0;
        }

        a {
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Direcciones IP</h1>

        <form method="post" action="">
            <label for="ip">Introduce una dirección IP:</label>
            <input type="text" id="ip" name="ip" placeholder="Ejemplo: 192.168.1.1" required>
            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ip = $_POST["ip"];

            // Validar que la dirección IP sea válida
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                // Obtener información detallada de la dirección IP
                $ipDetails = obtenerInformacionIP($ip);

                // Mostrar resultados de manera más detallada
                mostrarResultados($ip, $ipDetails);
            } else {
                echo "<p style='color: red;'>Dirección IP no válida</p>";
            }
        }

        function obtenerInformacionIP($ip) {
            $ipDetails = [];

            $octetos = explode('.', $ip);
            $ipDetails['clase'] = determinarClaseIP($octetos[0]);
            $ipDetails['tipo'] = determinarTipoIP($octetos);
            $ipDetails['subred'] = $octetos[0] . '.' . $octetos[1] . '.' . $octetos[2] . '.0';
            $ipDetails['inicio'] = $octetos[0] . '.' . $octetos[1] . '.' . $octetos[2] . '.1';
            $ipDetails['fin'] = $octetos[0] . '.' . $octetos[1] . '.' . $octetos[2] . '.254';
            $ipDetails['difusion'] = $octetos[0] . '.' . $octetos[1] . '.' . $octetos[2] . '.255';
            $ipDetails['mascara'] = determinarMascara($ipDetails['clase']);

            return $ipDetails;
        }

        function determinarClaseIP($primerOcteto) {
            if ($primerOcteto >= 1 && $primerOcteto <= 126) {
                return 'A';
            } elseif ($primerOcteto >= 128 && $primerOcteto <= 191) {
                return 'B';
            } elseif ($primerOcteto >= 192 && $primerOcteto <= 223) {
                return 'C';
            } elseif ($primerOcteto >= 224 && $primerOcteto <= 239) {
                return 'D';
            } elseif ($primerOcteto >= 240 && $primerOcteto <= 254) {
                return 'E';
            } else {
                return 'Desconocida';
            }
        }

        function determinarTipoIP($octetos) {
            if ($octetos[0] == '10' ||
                ($octetos[0] == '172' && ($octetos[1] >= 16 && $octetos[1] <= 31)) ||
                ($octetos[0] == '192' && $octetos[1] == '168')) {
                return 'Privada';
            } else {
                return 'Pública';
            }
        }

        function determinarMascara($clase) {
            if ($clase == 'A') {
                return '255.0.0.0';
            } elseif ($clase == 'B') {
                return '255.255.0.0';
            } elseif ($clase == 'C') {
                return '255.255.255.0';
            } else {
                return 'Máscara no aplicable';
            }
        }

        function mostrarResultados($ip, $ipDetails) {
            echo "<h2>Resultados para la dirección IP: $ip</h2>";
            echo "<p>Tipo de dirección IP: {$ipDetails['tipo']}</p>";
            echo "<p>Clase: {$ipDetails['clase']}</p>";
            echo "<p>Subred: {$ipDetails['subred']}</p>";
            echo "<p>Inicio: {$ipDetails['inicio']}</p>";
            echo "<p>Fin: {$ipDetails['fin']}</p>";
            echo "<p>Difusión: {$ipDetails['difusion']}</p>";
            echo "<p>Máscara: {$ipDetails['mascara']}</p>";

            echo '<p><a href="index.php">Volver a la página de inicio</a></p>';
        }
        ?>
    </div>
</body>
</html>
