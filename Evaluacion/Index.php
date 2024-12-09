<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <title>Evaluacion</title>
    <link rel="stylesheet" href="css/problemaStem.css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

    <style>
        body {
            background-color: #f3f4f6;
            color: #2e2e2e;
            font-family: 'Comfortaa', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header, footer {
            background-color: #2e2e2e;
            color: #a8e6cf;
            text-align: center;
            padding: 15px 0;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .logo {
            font-size: 1.8em;
            font-weight: 500;
        }

        #contenedor {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            max-width: 900px;
            margin: 20px auto;
            padding: 0 20px;
        }

        section {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #a8e6cf;
            transition: box-shadow 0.3s;
        }

        section:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        h2 {
            color: #34a853;
            font-size: 1.3em;
            margin-bottom: 10px;
            border-bottom: 2px solid #a8e6cf;
            padding-bottom: 5px;
        }

        p {
            margin-bottom: 10px;
        }

        button {
            background-color: #34a853;
            color: #ffffff;
            font-size: 1em;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #2e7d32;
        }

        .resultado {
            font-size: 1.2em;
            color: #388e3c;
            font-weight: bold;
        }

        footer {
            margin-top: auto;
            font-size: 0.9em;
            color: #b0bec5;
            background-color: #2e2e2e;
        }

        @media (min-width: 768px) {
            #contenedor {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">
                Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas
            </h1>
        </header>

        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Cálculo de la potencia real de una central hidroeléctrica</h2>
                <p>Descripción:</p>
                <p>
                    Calcula la potencia real de una central hidroeléctrica (en CV y en KW), 
                    si el salto de agua es de 15 m, la turbina emplea Kaplan con un rendimiento del 94%, 
                    y el caudal es de 19 m³/s.
                </p>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>Altura (h): 15 m</li>
                    <li>Caudal (Q): 19 m³/s</li>
                    <li>Gravedad (g): 9.8 m/s²</li>
                    <li>Rendimiento (n): 94% (0.94)</li>
                </ul>
            </section>

            <section class="formulas">
                <h2>Fórmulas:</h2>
                <p>1. Pt: 1000*Q*g*h</p>
                <p>2. Pr: n*Pt</p>
                <p>3. CV: Pr/735.5</p>
            </section>

            <section class="calculos">
                <h2>Solución:</h2>
                <form method="post">
                    <button type="submit" name="calcular">Presiona para calcular</button>
                </form>
            </section>

            <section class="resultado">
                <h2>Resultado:</h2>
                <?php
                    function Resultado($Q, $g, $h, $r) {
                        $Pt = 1000 * $Q * $g * $h;
                        $Pr = $r * $Pt;
                        $cv = $Pr / 735.5;
                        return [
                            "Pt" => $Pt,
                            "Pr" => $Pr,
                            "CV" => $cv
                        ];
                    }

                    if (isset($_POST['calcular'])) {
                        $Q = 19;
                        $g = 9.8;
                        $h = 15;
                        $r = 0.94;

                        $resultados = Resultado($Q, $g, $h, $r);
                        
                        echo "<p>Pt: " . number_format($resultados["Pt"], 2) . " W</p>";
                        echo "<p>Pr: " . number_format($resultados["Pr"], 2) . " W</p>";
                        echo "<p>CV: " . number_format($resultados["CV"], 2) . " CV</p>";
                    }
                ?>
            </section>
        </section>
    </section>
</body>

</html>
