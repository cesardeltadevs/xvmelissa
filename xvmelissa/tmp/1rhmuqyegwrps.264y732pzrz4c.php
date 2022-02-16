<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
    <meta charset="utf-8" />

    <title>Lista de Invitados - Regina XV Años</title>

    <link href="<?= ($ruta) ?>favicon.ico" rel="icon" type="image/x-icon" />
    <link href="<?= ($ruta) ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= ($ruta) ?>css/descarga.css" rel="stylesheet" />
    
    <script src="<?= ($ruta) ?>js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="<?= ($ruta) ?>js/bootstrap.bundle.min.js" type="text/javascript"></script>    
</head>
<body>
    <div class="contaier-fluid">
        <h1 class="text-center">XV AÑOS REGINA</h1>
        <div class="row resumen">
            <div class="col-md-4 text-center">
                <strong>Confirmados: <?= ($resumen['CONF']) ?></strong>
            </div>
            <div class="col-md-4 text-center">
                Faltantes: <?= ($resumen['FALTA'])."
" ?>
            </div>
            <div class="col-md-4 text-center">
                Invitados Totales: <?= ($resumen['TOTAL'])."
" ?>
            </div>
        </div>
        <p>&nbsp;</p>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ASISTENTE</th>
                        <th>FAMILIA</th>
                        <th>INVITADO</th>
                        <th>CONFIRMADO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (($asistentes?:[]) as $asistente): ?>
                        <?php if ($asistente['CONFIRMADO'] == 'SI'): ?>
                            
                                <tr class="confirmado">
                                    <td><?= ($asistente['ASISTENTE']) ?></td>
                                    <td><?= ($asistente['FAMILIA']) ?></td>
                                    <td><?= ($asistente['INVITADO']) ?></td>
                                    <td><?= ($asistente['CONFIRMADO']) ?></td>
                                </tr>
                            
                            <?php else: ?>
                                <tr class="sin-confirmar">
                                    <td><?= ($asistente['ASISTENTE']) ?></td>
                                    <td><?= ($asistente['FAMILIA']) ?></td>
                                    <td><?= ($asistente['INVITADO']) ?></td>
                                    <td><?= ($asistente['CONFIRMADO']) ?></td>
                                </tr>
                            
                        <?php endif; ?>
                        
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
            <div class="col-md-2"></div>            
        </div>
    </div>
</body>
</html>
