<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="resorurce/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Genarar Certificado</title>
    </head>
    <body>

        <form method="POST" action="service/sgenerar_certificado.php" autocomplete="off" style="padding: 100px;">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ape">Apellidos</label>
                    <input type="text" name="ape" class="form-control" id="ape">
                </div>
                <div class="form-group col-md-6">
                    <label for="nom">Nombres</label>
                    <input type="text" name="nom" class="form-control" id="nom">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="curs">Curso</label>
                    <select name="cur" id="cur" class="form-control">
                        <option selected>Seleccionar</option>
                        <option>Diseño Web</option>
                        <option>Solid Word</option>
                        <option>Auto Cad</option>
                        <option>Ingles</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="fi">Fecha inicio</label>
                    <input type="date" name="fi" class="form-control" id="fi">
                </div>
                <div class="form-group col-md-4">
                    <label for="ff">Fecha final</label>
                    <input type="date" name="ff" class="form-control" id="ff">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Generar certificado</button>
    </form>

    <script src="resorurce/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
