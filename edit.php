<?php

$id = $_GET['id'];

$connection  = mysqli_connect("localhost", "admin", "adminoke", "tokobuah");
$select = mysqli_query($connection, "SELECT * FROM buah WHERE id='$id' ");

$read = mysqli_fetch_assoc($select);

?>

<form action="update_process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $read['id'] ?>" />
    <fieldset>
        <legend>Form data buah</legend>
        <table>
            <tr>
                <td>Nama buah</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $read['nama'] ?>" />
                </td>
            </tr>
            <tr>
                <td>Warna buah</td>
                <td>:</td>
                <td>
                    <select name="warna">
                        <option value="">Pilih warna</option>
                        <option <?php echo $read['warna'] == "merah" ? "selected" : "" ?> value="merah">Merah</option>
                        <option <?php echo $read['warna'] == "kuning" ? "selected" : "" ?> value="kuning">Kuning</option>
                        <option <?php echo $read['warna'] == "hijau" ? "selected" : "" ?> value="hijau">Hijau</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Rasa buah</td>
                <td>:</td>
                <td>
                    <input type="text" name="rasa" value="<?php echo $read['rasa'] ?>" />
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