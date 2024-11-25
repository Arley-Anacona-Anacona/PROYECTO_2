<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Aves</title>
    <link rel="stylesheet" href="../public/css/registro.css">
    <link rel="stylesheet" href="../public/css/buton1.css">
    
</head>
<body>
    <header>
       
    </header>
    <main>
        <section class="form-section">
            <div class="image-container">
                <img src="../public/img/imagen1.jpg" alt="Registro de Aves" width=150px title="Registro Manual y Automático">
            </div>
            <h2>Registro Manual</h2>
            <form action="guardar-registro.php" method="POST" class="registro-form">
                <div class="form-group">
                    <label for="nombre-ave">Nombre del Ave</label>
                    <input type="text" id="nombre-ave" name="nombre-ave" placeholder="Ej: Gallina #1" required>
                </div>

                <div class="form-group">
                    <label for="peso-ave">Peso (kg)</label>
                    <input type="number" id="peso-ave" name="peso-ave" step="0.01" placeholder="Ej: 1.5" required>
                </div>

                <div class="form-group">
                    <label for="edad-ave">Edad (semanas)</label>
                    <input type="number" id="edad-ave" name="edad-ave" placeholder="Ej: 12" required>
                </div>

                <div class="form-group">
                    <label for="fecha-registro">Fecha de Registro</label>
                    <input type="date" id="fecha-registro" name="fecha-registro" required>
                </div>

                <button type="submit" class="button">Registrar</button>
            </form>
        </section>

        <section class="upload-section">
            <h2>Carga Automática</h2>
            <p>Sube un archivo CSV con los datos de tus aves.</p>
            <form action="cargar-archivo.php" method="POST" enctype="multipart/form-data" class="upload-form">
                <input type="file" name="archivo-csv" accept=".csv" required>
                <button type="submit" class="button">Subir Archivo</button>
            </form>
        </section>
    </main>
    <footer>
        
    <a href="../index.php" class="button">Volver al Menú Principal</a>

    </footer>
</body>
</html>
