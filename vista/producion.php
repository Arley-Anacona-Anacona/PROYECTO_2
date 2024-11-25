<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas de Producción</title>
    <link rel="stylesheet" href="../public/css/produccion.css">
    <link rel="stylesheet" href="../public/css/buton1.css">
</head>
<body>
    <header>
     
    </header>
    <main>
        <!-- Formulario para seleccionar fechas -->
        <section class="form-section">
            
            <h2>Seleccionar Fechas</h2>
            
            <form action="mostrar-estadisticas.php" method="GET" class="fecha-form">
                <div class="form-group">
                <img src="../public/img/imagen1.jpg" alt="Registro de Aves" width=150px title="Registro Manual y Automático">
                    <label for="fecha_inicio">Fecha de Inicio:</label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                </div>

                <div class="form-group">
                    <label for="fecha_fin">Fecha de Fin:</label>
                    <input type="date" id="fecha_fin" name="fecha_fin" required>
                </div>

                <button type="submit" class="button">Mostrar Estadísticas</button>
            </form>
        </section>

        <!-- Estadísticas de producción -->
        <section class="estadisticas-section">
            <h2>Estadísticas de Producción</h2>
            <div class="estadisticas-card">
                <h3>Producción Total</h3>
                <p>1500 Huevos</p>
            </div>
            <div class="estadisticas-card">
                <h3>Consumo de Alimento</h3>
                <p>200 kg</p>
            </div>
            <div class="estadisticas-card">
                <h3>Rendimiento Promedio</h3>
                <p>85%</p>
            </div>
        </section>

        <!-- Espacio para gráficos -->
        <section class="chart-section">
            <h2>Gráficos de Producción</h2>
            <div class="chart-placeholder">
                <p>Gráficos interactivos aquí.</p>
            </div>
        </section>
    </main>
    <footer>
        <a href="../index.php" class="button">Volver al Menú Principal</a>
    </footer>
</body>
</html>
