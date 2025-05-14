<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="form">
        <form action="antrian.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" id="nama" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" id="kelas" name="keluhan" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: right;"><button>kirim</button></td>
                </tr>
            </table>

            <!-- <div>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div>
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>
            </div> -->
            <!-- <button>kirim</button> -->
        </form>
    </div>
</body>
</html>