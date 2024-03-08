<?php

$connection  = mysqli_connect("localhost", "admin", "adminoke", "tokobuah");
$select = mysqli_query($connection, "SELECT * FROM buah");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1" style="border-collapse: collapse" cellpadding="5px">
        <thead>
            <th>ID</th>
            <th>Nama buah</th>
            <th>Warna</th>
            <th>Rasa</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($select)) : ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['warna'] ?></td>
                    <td><?php echo $row['rasa'] ?></td>
                    <td>
                        <button>Edit</button>
                        <a href="delete.php?id=<?php echo $row['id'] ?>">
                            <button>Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

    <br>

    <form action="create_process.php" method="POST">
        <fieldset>
            <legend>Form data buah</legend>
            <table>
                <tr>
                    <td>Nama buah</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" />
                    </td>
                </tr>
                <tr>
                    <td>Warna buah</td>
                    <td>:</td>
                    <td>
                        <select name="warna">
                            <option value="">Pilih warna</option>
                            <option value="merah">Merah</option>
                            <option value="kuning">Kuning</option>
                            <option value="hijau">Hijau</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Rasa buah</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="rasa" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button>Simpan</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    
</body>
</html>