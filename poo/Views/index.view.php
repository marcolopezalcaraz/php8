<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <nav>
            <a href="Controllers/contact.php">Contacto</a>
            <a href="Controllers/about.php">Nosotros</a>
            <a href="Controllers/services.php">Servicios</a>
        </nav>
  

        <h1><?= $greeting; ?></h1>

        <h2>Completadas</h2>
        <ul>
            <?php foreach ($completedTasks as $task): ?>
                <li style="color: 
                    <?= $task->color?>;">
                    <?= $task->title?>
                    <form style="display: inline;" action="toggle-task.php" method="POST">
                        <input type="hidden" name="completed" value="0">
                       <input type="hidden" name="id" value="<?= $task->id ?>">
                      <button type="submit">➖</button>
                     </form>
                
                     <form onsubmit="return confirm('¿Desea Eliminar este Registro?');" style="display: inline;" action="delete-task.php" method="POST">
                        <input type="hidden" name="id" value="<?= $task->id ?>">
                        <button type="submit">❌</button>
                    </form>
                </li>
                <?php endforeach?>
        </ul>

        <h2>Pendientes</h2>
        <ul>
            <!--aqui podemos decidir que extraer de la base de datos-->
            <?php foreach ($pendingTasks as $task) : ?> 
                <li style="color: 
                    <?= $task->color?>;">
                    <?= $task->title ?>
                    <form style="display: inline;" action="toggle-task.php" method="POST">
                        <input type="hidden" name="completed" value="1">
                        <input type="hidden" name="id" value="<?= $task->id ?>">
                        <button type="submit">✅</button>
                    </form>

                    <form onsubmit="return confirm('¿Desea Eliminar este Registro?');" style="display: inline;" action="delete-task.php" method="POST">
                        <input type="hidden" name="id" value="<?= $task->id ?>">
                        <button type="submit">❌</button>
                    </form>
                </li>
                
            
            <?php endforeach ?>
        </ul>

        <form action="create-task.php" method="POST">
            Tarea:
            <input type="text" name="title" id=""> <br> <br>
            color:
            <input type="color" name="color" id=""> <br> <br>
           
            <button type="submit">Guardar Tarea</button>
        </form>
</body>
</html>