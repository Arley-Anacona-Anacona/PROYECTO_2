<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Finanzas</title>
    <link rel="stylesheet" href="../public/css/finanzas.css">
    <link rel="stylesheet" href="../public/css/buton1.css">
</head>
<body>
    <header>
       
    </header>
    <main>
        <!-- Formulario para registrar ingresos y gastos -->
        <section class="form-section">
        <img src="../public/img/imagen1.jpg" alt="Registro de Aves" width=150px title="Registro Manual y Automático">
            <h2>Registrar Transacción</h2>
            <form action="guardar-finanzas.php" method="POST" class="registro-form">
                <div class="form-group">
                    <label for="tipo">Tipo de Transacción:</label>
                    <select id="tipo" name="tipo" required>
                        <option value="ingreso">Ingreso</option>
                        <option value="gasto">Gasto</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" id="descripcion" name="descripcion" placeholder="Ej: Venta de huevos" required>
                </div>

                <div class="form-group">
                    <label for="monto">Monto ($):</label>
                    <input type="number" id="monto" name="monto" step="0.01" placeholder="Ej: 1500.00" required>
                </div>

                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required>
                </div>

                <button type="submit" class="button">Registrar</button>
            </form>
        </section>

        <!-- Resumen financiero -->
        <section class="summary-section">
            <h2>Resumen Financiero</h2>
            <div class="summary-card ingresos">
                <h3>Total Ingresos</h3>
                <p>$0.00</p>
            </div>
            <div class="summary-card gastos">
                <h3>Total Gastos</h3>
                <p>$0.00</p>
            </div>
            <div class="summary-card balance">
                <h3>Balance</h3>
                <p>$0.00</p>
            </div>
        </section>

        <!-- Espacio para gráficos -->
        <section class="chart-section">
            <h2>Gráficos Financieros</h2>
            <div class="chart-placeholder">
                <p>Espacio reservado para gráficos interactivos.</p>
            </div>
        </section>
    </main>
    <footer>
        <a href="../index.php" class="button">Volver al Menú Principal</a>
    </footer>
</body>
</html>
