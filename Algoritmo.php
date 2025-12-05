<?php
// Inicializar variables de resultado a null
$resultado_plano = null;
$resultado_solido = null;
$error = null;

// --- FUNCIÓN PARA CÁLCULOS DE FIGURAS PLANAS (Área y Perímetro) ---
if (isset($_POST['calcular_plano']) && isset($_POST['figura_plana'])) {
    $figura_plana = $_POST['figura_plana'];

    function validar_parametros($params) {
        foreach ($params as $param) {
            if (!is_numeric($param) || $param <= 0) {
                return false;
            }
        }
        return true;
    }

    switch ($figura_plana) {
        case 'rectangulo':
            $b = $_POST['base'] ?? 0;
            $h = $_POST['altura'] ?? 0;
            if (validar_parametros([$b, $h])) {
                $area = $b * $h; 
                $perimetro = 2 * ($b + $h); 
                $resultado_plano = "Rectángulo: Área = $area cm², Perímetro = $perimetro cm";
            } else {
                $error = "Por favor, ingresa valores numéricos positivos para Base y Altura del Rectángulo.";
            }
            break;

        case 'cuadrado':
            $l = $_POST['lado'] ?? 0;
            if (validar_parametros([$l])) {
                $area = $l * $l; 
                $perimetro = 4 * $l; 
                $resultado_plano = "Cuadrado: Área = $area cm², Perímetro = $perimetro cm";
            } else {
                $error = "Por favor, ingresa un valor numérico positivo para el Lado del Cuadrado.";
            }
            break;

        case 'rombo':
            $D = $_POST['diagonal_mayor'] ?? 0;
            $d = $_POST['diagonal_menor'] ?? 0;
            $l = $_POST['lado_rombo'] ?? 0; 
            if (validar_parametros([$D, $d, $l])) {
                $area = ($D * $d) / 2; 
                $perimetro = 4 * $l; 
                $resultado_plano = "Rombo: Área = $area cm², Perímetro = $perimetro cm";
            } else {
                $error = "Por favor, ingresa valores numéricos positivos para Diagonales y Lado del Rombo.";
            }
            break;

        case 'romboide':
            $b = $_POST['base_romboide'] ?? 0;
            $h = $_POST['altura_romboide'] ?? 0;
            $l = $_POST['lado_romboide'] ?? 0; 
            if (validar_parametros([$b, $h, $l])) {
                $area = $b * $h; 
                $perimetro = 2 * ($b + $l); 
                $resultado_plano = "Romboide: Área = $area cm², Perímetro = $perimetro cm";
            } else {
                $error = "Por favor, ingresa valores numéricos positivos para Base, Altura y Lado del Romboide.";
            }
            break;
        default:
            $error = "Selección de figura plana no válida.";
    }
}

// --- FUNCIÓN PARA CÁLCULOS DE SÓLIDOS REGULARES (Volumen) ---
if (isset($_POST['calcular_solido']) && isset($_POST['solido_regular'])) {
    $solido_regular = $_POST['solido_regular'];

    switch ($solido_regular) {
        case 'cubo':
            $l = $_POST['lado_cubo'] ?? 0;
            if (validar_parametros([$l])) {
                $volumen = pow($l, 3); 
                $resultado_solido = "Cubo: Volumen = $volumen cm³";
            } else {
                $error = "Por favor, ingresa un valor numérico positivo para el Lado del Cubo.";
            }
            break;

        case 'prisma':
            $Ab = $_POST['area_base_prisma'] ?? 0;
            $h = $_POST['altura_prisma'] ?? 0;
            if (validar_parametros([$Ab, $h])) {
                $volumen = $Ab * $h; 
                $resultado_solido = "Prisma: Volumen = $volumen cm³";
            } else {
                $error = "Por favor, ingresa valores numéricos positivos para Área de la Base (en cm²) y Altura (en cm) del Prisma.";
            }
            break;

        case 'piramide':
            $Ab = $_POST['area_base_piramide'] ?? 0;
            $h = $_POST['altura_piramide'] ?? 0;
            if (validar_parametros([$Ab, $h])) {
                $volumen = (1 / 3) * $Ab * $h; 
                $volumen_redondeado = round($volumen, 4);
                $resultado_solido = "Pirámide: Volumen ≈ $volumen_redondeado cm³";
            } else {
                $error = "Por favor, ingresa valores numéricos positivos para Área de la Base (en cm²) y Altura (en cm) de la Pirámide.";
            }
            break;

        case 'cilindro':
            $r = $_POST['radio_cilindro'] ?? 0;
            $h = $_POST['altura_cilindro'] ?? 0;
            if (validar_parametros([$r, $h])) {
                $volumen = M_PI * pow($r, 2) * $h; 
                $volumen_redondeado = round($volumen, 4);
                $resultado_solido = "Cilindro: Volumen ≈ $volumen_redondeado cm³";
            } else {
                $error = "Por favor, ingresa valores numéricos positivos para Radio y Altura del Cilindro.";
            }
            break;
        default:
            $error = "Selección de sólido no válida.";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Evidencia GA7-240201528-AA4-EV01: Algoritmo para el cálculo de áreas y volúmenes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background-color: #f4f4f9; display: flex; flex-direction: column; min-height: 100vh;}
        header { background-color: #007bff; color: white; padding: 15px 20px; text-align: center; }
        .container { max-width: 900px; margin: 20px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); flex-grow: 1; }
        h1 { margin: 0; font-size: 1.8em; }
        h2 { color: #333; border-bottom: 2px solid #ccc; padding-bottom: 10px; margin-top: 20px; }
        form { margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 5px; background: #f9f9f9; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        select { width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #5cb85c; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; margin-top: 10px; }
        button:hover { background-color: #4cae4c; }
        .resultado { padding: 15px; background-color: #dff0d8; color: #3c763d; border: 1px solid #d6e9c6; border-radius: 4px; margin-top: 20px; font-weight: bold; }
        .error { padding: 15px; background-color: #f2dede; color: #a94442; border: 1px solid #ebccd1; border-radius: 4px; margin-top: 20px; font-weight: bold; }
        .params { display: none; margin-top: 10px; padding: 10px; border-left: 3px solid #007bff; background: #e9f5ff; }
        footer { background-color: #333; color: white; text-align: center; padding: 10px 0; font-size: 0.9em; margin-top: auto; }
        .student-info { font-size: 1.1em; margin-top: 5px; }
    </style>
</head>
<body>

<header>
    <h1>Trabajo Práctico con Geometría</h1>
    <div class="student-info">
        Estudiante de Desarrollo Publicitario: Dayelis Maria Rivera Alvarino (Ficha: 304744)
    </div>
</header>

<div class="container">
    
    <?php if ($error): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <script>
        function mostrarParametros(tipo, seleccion) {
            let params = document.querySelectorAll(`.${tipo}-params`);
            params.forEach(p => p.style.display = 'none');
            
            let paramDiv = document.getElementById(`${seleccion}-params`);
            if (paramDiv) {
                paramDiv.style.display = 'block';
            }
        }
    </script>

    <h2>Área y Perímetro de Figuras Planas (Unidades en cm)</h2>
    <form method="post" action="">
        <label for="figura_plana">Selecciona la figura:</label>
        <select id="figura_plana" name="figura_plana" onchange="mostrarParametros('plana', this.value)" required>
            <option value="">-- Seleccionar --</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rombo">Rombo</option>
            <option value="romboide">Romboide</option>
        </select>

        <div id="rectangulo-params" class="plana-params params">
            <label>Base (b) [cm]:</label><input type="number" name="base" step="any" min="0.001">
            <label>Altura (h) [cm]:</label><input type="number" name="altura" step="any" min="0.001">
        </div>

        <div id="cuadrado-params" class="plana-params params">
            <label>Lado (l) [cm]:</label><input type="number" name="lado" step="any" min="0.001">
        </div>

        <div id="rombo-params" class="plana-params params">
            <label>Diagonal Mayor (D) [cm]:</label><input type="number" name="diagonal_mayor" step="any" min="0.001">
            <label>Diagonal Menor (d) [cm]:</label><input type="number" name="diagonal_menor" step="any" min="0.001">
            <label>Lado (l) [cm] (*Para Perímetro):</label><input type="number" name="lado_rombo" step="any" min="0.001">
        </div>

        <div id="romboide-params" class="plana-params params">
            <label>Base (b) [cm]:</label><input type="number" name="base_romboide" step="any" min="0.001">
            <label>Altura (h) [cm]:</label><input type="number" name="altura_romboide" step="any" min="0.001">
            <label>Lado (l) [cm] (*Para Perímetro):</label><input type="number" name="lado_romboide" step="any" min="0.001">
        </div>

        <button type="submit" name="calcular_plano">Calcular Área y Perímetro</button>
    </form>

    <?php if ($resultado_plano): ?>
        <div class="resultado"><?php echo $resultado_plano; ?></div>
    <?php endif; ?>

    <h2>Volumen de Sólidos Regulares (Unidades en cm³)</h2>
    <form method="post" action="">
        <label for="solido_regular">Selecciona el sólido:</label>
        <select id="solido_regular" name="solido_regular" onchange="mostrarParametros('solido', this.value)" required>
            <option value="">-- Seleccionar --</option>
            <option value="cubo">Cubo</option>
            <option value="prisma">Prisma</option>
            <option value="piramide">Pirámide</option>
            <option value="cilindro">Cilindro</option>
        </select>

        <div id="cubo-params" class="solido-params params">
            <label>Lado (L) [cm]:</label><input type="number" name="lado_cubo" step="any" min="0.001">
        </div>

        <div id="prisma-params" class="solido-params params">
            <label>Área de la Base (A_b) [cm²]:</label><input type="number" name="area_base_prisma" step="any" min="0.001">
            <label>Altura (h) [cm]:</label><input type="number" name="altura_prisma" step="any" min="0.001">
        </div>

        <div id="piramide-params" class="solido-params params">
            <label>Área de la Base (A_b) [cm²]:</label><input type="number" name="area_base_piramide" step="any" min="0.001">
            <label>Altura (h) [cm]:</label><input type="number" name="altura_piramide" step="any" min="0.001">
        </div>

        <div id="cilindro-params" class="solido-params params">
            <label>Radio (r) [cm]:</label><input type="number" name="radio_cilindro" step="any" min="0.001">
            <label>Altura (h) [cm]:</label><input type="number" name="altura_cilindro" step="any" min="0.001">
        </div>

        <button type="submit" name="calcular_solido">Calcular Volumen</button>
    </form>

    <?php if ($resultado_solido): ?>
        <div class="resultado"><?php echo $resultado_solido; ?></div>
    <?php endif; ?>

</div>

<footer>
    Estudiante de Desarrollo Publicitario | Dayelis Maria Rivera Alvarino (Ficha: 304744)
</footer>
</body>
</html>