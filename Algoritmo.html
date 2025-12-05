<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico con Geometría</title>
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
        Estudiante de Filosofía: **Maria Alejandra Franco Hernandez** (Matrícula: 345325)
    </div>
</header>

<div class="container">
    <div id="error-message" class="error" style="display:none;"></div>

    <script>
        // Función para mostrar/ocultar los campos de parámetros según la selección
        function mostrarParametros(tipo, seleccion) {
            let params = document.querySelectorAll(`.${tipo}-params`);
            params.forEach(p => p.style.display = 'none');
            
            let paramDiv = document.getElementById(`${seleccion}-params`);
            if (paramDiv) {
                paramDiv.style.display = 'block';
            }
            // Ocultar el resultado y el error al cambiar la figura
            document.getElementById(`${tipo}-resultado`).style.display = 'none';
            document.getElementById('error-message').style.display = 'none';
        }

        // Función de validación de entradas
        function validar(params) {
            for (let param of params) {
                if (param === null || param === "" || isNaN(param) || Number(param) <= 0) {
                    return false;
                }
            }
            return true;
        }

        // --- FUNCIÓN PARA CÁLCULOS DE FIGURAS PLANAS (Área y Perímetro) ---
        function calcularPlano(event) {
            event.preventDefault();
            
            const figura = document.getElementById('figura_plana').value;
            const resultadoDiv = document.getElementById('plano-resultado');
            const errorDiv = document.getElementById('error-message');
            
            errorDiv.style.display = 'none';
            resultadoDiv.style.display = 'none';

            let resultado = "";
            let area, perimetro;

            switch (figura) {
                case 'rectangulo':
                    const b_rect = parseFloat(document.querySelector('#rectangulo-params [name="base"]').value);
                    const h_rect = parseFloat(document.querySelector('#rectangulo-params [name="altura"]').value);
                    if (validar([b_rect, h_rect])) {
                        area = b_rect * h_rect; 
                        perimetro = 2 * (b_rect + h_rect); 
                        resultado = `Rectángulo: Área = ${area.toFixed(2)} cm², Perímetro = ${perimetro.toFixed(2)} cm`;
                    } else {
                        errorDiv.textContent = "Error: Ingresa valores numéricos positivos para Base y Altura del Rectángulo.";
                        errorDiv.style.display = 'block';
                        return;
                    }
                    break;

                case 'cuadrado':
                    const l_cuad = parseFloat(document.querySelector('#cuadrado-params [name="lado"]').value);
                    if (validar([l_cuad])) {
                        area = l_cuad * l_cuad; 
                        perimetro = 4 * l_cuad; 
                        resultado = `Cuadrado: Área = ${area.toFixed(2)} cm², Perímetro = ${perimetro.toFixed(2)} cm`;
                    } else {
                        errorDiv.textContent = "Error: Ingresa un valor numérico positivo para el Lado del Cuadrado.";
                        errorDiv.style.display = 'block';
                        return;
                    }
                    break;

                case 'rombo':
                    const D_romb = parseFloat(document.querySelector('#rombo-params [name="diagonal_mayor"]').value);
                    const d_romb = parseFloat(document.querySelector('#rombo-params [name="diagonal_menor"]').value);
                    const l_romb = parseFloat(document.querySelector('#rombo-params [name="lado_rombo"]').value);
                    if (validar([D_romb, d_romb, l_romb])) {
                        area = (D_romb * d_romb) / 2; 
                        perimetro = 4 * l_romb; 
                        resultado = `Rombo: Área = ${area.toFixed(2)} cm², Perímetro = ${perimetro.toFixed(2)} cm`;
                    } else {
                        errorDiv.textContent = "Error: Ingresa valores numéricos positivos para Diagonales y Lado del Rombo.";
                        errorDiv.style.display = 'block';
                        return;
                    }
                    break;

                case 'romboide':
                    const b_romboid = parseFloat(document.querySelector('#romboide-params [name="base_romboide"]').value);
                    const h_romboid = parseFloat(document.querySelector('#romboide-params [name="altura_romboide"]').value);
                    const l_romboid = parseFloat(document.querySelector('#romboide-params [name="lado_romboide"]').value);
                    if (validar([b_romboid, h_romboid, l_romboid])) {
                        area = b_romboid * h_romboid; 
                        perimetro = 2 * (b_romboid + l_romboid); 
                        resultado = `Romboide: Área = ${area.toFixed(2)} cm², Perímetro = ${perimetro.toFixed(2)} cm`;
                    } else {
                        errorDiv.textContent = "Error: Ingresa valores numéricos positivos para Base, Altura y Lado del Romboide.";
                        errorDiv.style.display = 'block';
                        return;
                    }
                    break;
                default:
                    errorDiv.textContent = "Error: Selecciona una figura plana válida.";
                    errorDiv.style.display = 'block';
                    return;
            }

            resultadoDiv.textContent = resultado;
            resultadoDiv.style.display = 'block';
        }

        // --- FUNCIÓN PARA CÁLCULOS DE SÓLIDOS REGULARES (Volumen) ---
        function calcularSolido(event) {
            event.preventDefault();

            const solido = document.getElementById('solido_regular').value;
            const resultadoDiv = document.getElementById('solido-resultado');
            const errorDiv = document.getElementById('error-message');
            
            errorDiv.style.display = 'none';
            resultadoDiv.style.display = 'none';

            let resultado = "";
            let volumen;

            switch (solido) {
                case 'cubo':
                    const l_cubo = parseFloat(document.querySelector('#cubo-params [name="lado_cubo"]').value);
                    if (validar([l_cubo])) {
                        volumen = Math.pow(l_cubo, 3);
                        resultado = `Cubo: Volumen = ${volumen.toFixed(2)} cm³`;
                    } else {
                        errorDiv.textContent = "Error: Ingresa un valor numérico positivo para el Lado del Cubo.";
                        errorDiv.style.display = 'block';
                        return;
                    }
                    break;

                case 'prisma':
                    const Ab_prisma = parseFloat(document.querySelector('#prisma-params [name="area_base_prisma"]').value);
                    const h_prisma = parseFloat(document.querySelector('#prisma-params [name="altura_prisma"]').value);
                    if (validar([Ab_prisma, h_prisma])) {
                        volumen = Ab_prisma * h_prisma;
                        resultado = `Prisma: Volumen = ${volumen.toFixed(2)} cm³`;
                    } else {
                        errorDiv.textContent = "Error: Ingresa valores numéricos positivos para Área de la Base (cm²) y Altura (cm) del Prisma.";
                        errorDiv.style.display = 'block';
                        return;
                    }
                    break;

                case 'piramide':
                    const Ab_piram = parseFloat(document.querySelector('#piramide-params [name="area_base_piramide"]').value);
                    const h_piram = parseFloat(document.querySelector('#piramide-params [name="altura_piramide"]').value);
                    if (validar([Ab_piram, h_piram])) {
                        volumen = (1 / 3) * Ab_piram * h_piram;
                        resultado = `Pirámide: Volumen ≈ ${volumen.toFixed(2)} cm³`;
                    } else {
                        errorDiv.textContent = "Error: Ingresa valores numéricos positivos para Área de la Base (cm²) y Altura (cm) de la Pirámide.";
                        errorDiv.style.display = 'block';
                        return;
                    }
                    break;

                case 'cilindro':
                    const r_cil = parseFloat(document.querySelector('#cilindro-params [name="radio_cilindro"]').value);
                    const h_cil = parseFloat(document.querySelector('#cilindro-params [name="altura_cilindro"]').value);
                    if (validar([r_cil, h_cil])) {
                        volumen = Math.PI * Math.pow(r_cil, 2) * h_cil;
                        resultado = `Cilindro: Volumen ≈ ${volumen.toFixed(2)} cm³`;
                    } else {
                        errorDiv.textContent = "Error: Ingresa valores numéricos positivos para Radio y Altura del Cilindro.";
                        errorDiv.style.display = 'block';
                        return;
                    }
                    break;
                default:
                    errorDiv.textContent = "Error: Selecciona un sólido regular válido.";
                    errorDiv.style.display = 'block';
                    return;
            }

            resultadoDiv.textContent = resultado;
            resultadoDiv.style.display = 'block';
        }
    </script>

    <h2>Área y Perímetro de Figuras Planas (Unidades en cm)</h2>
    <form onsubmit="calcularPlano(event)">
        <label for="figura_plana">Selecciona la figura:</label>
        <select id="figura_plana" onchange="mostrarParametros('plana', this.value)" required>
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

        <button type="submit">Calcular Área y Perímetro</button>
    </form>

    <div id="plano-resultado" class="resultado" style="display:none;"></div>

    <h2>Volumen de Sólidos Regulares (Unidades en cm³)</h2>
    <form onsubmit="calcularSolido(event)">
        <label for="solido_regular">Selecciona el sólido:</label>
        <select id="solido_regular" onchange="mostrarParametros('solido', this.value)" required>
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

        <button type="submit">Calcular Volumen</button>
    </form>

    <div id="solido-resultado" class="resultado" style="display:none;"></div>

</div>

<footer>
    **Trabajo Práctico con Geometría** | Maria Alejandra Franco Hernandez (345325)
</footer>
</body>
</html>