<?php
require 'model.php';
$model = new Model();
$tampil = $model->tampil("datalist");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>

<body>
    <header>
        <h1>Todo List</h1>
    </header>

    <form action="proses.php" method="post">
        <input type="text" name="keterangan">
        <button type="submit" name="tambah">+</button>
    </form>

    <?php
    foreach ($tampil as $d) :
    ?>

        <ul>
            <li>
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <td><?= $d["keterangan"]; ?></td>
                        <td>
                            <button type="submit">complete</button>
                        </td>
                        <td>
                            <button type="submit">hapus</button>
                        </td>
                    </tr>
                </table>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>