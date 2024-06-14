<?php
    include('alumno.php');

    if (isset($_POST['btnPromedio'])) {
        $nombre = $_POST['txtAlumno'];
        $EP = $_POST['txtEP'];
        $EF = $_POST['txtEF'];
        $PPF = $_POST['txtPPF'];

        $objAlu = new alumno($nombre, $EP, $EF, $PPF);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Calculo Promedio</title>
    </head>
    <body>
    <div class="container">
        <header class="my-4">
            <h1 class="text-center">Calculo Promedio</h1>
        </header>
        <form method="POST"  class="text-center mx-auto" style="max-width: 600px;">
            <div class="mb-3">
                <label for="txtAlumno" class="form-label">Alumno</label>
                <input type="text" name="txtAlumno" class="form-control" id="txtAlumno" required>
            </div>
            <div class="row mb-3">
                <div class="col mb-3">
                    <label for="txtEP" class="form-label">EP</label>
                    <input type="number" name="txtEP" class="form-control" id="txtEP" required>
                </div>
                <div class="col mb-3">
                    <label for="txtEF" class="form-label">EF</label>
                    <input type="number" name="txtEF" class="form-control" id="txtEF" required>
                </div>
                <div class="col mb-3">
                    <label for="txtPPF" class="form-label">PPF</label>
                    <input type="number" name="txtPPF" class="form-control" id="txtPPF" required>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" name="btnPromedio" class="btn btn-primary">Calcular Promedio</button>
            </div>
            <?php if (isset($_POST['btnPromedio'])): ?>
                <div class="alert alert-info">
                    <strong>Promedio:</strong> <?php echo number_format($objAlu->determinaPromedio(), 2); ?>
                </div>
                <div class="alert alert-<?php echo $objAlu->calculaEstado() == 'Aprobado' ? 'success' : 'danger'; ?>">
                    <strong>Estado:</strong> <?php echo $objAlu->calculaEstado(); ?>
                </div>
            <?php endif; ?>
        </form>
    </div>
    </body>
</html>