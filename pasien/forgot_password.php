<?php
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Di sini biasanya akan dicek apakah email terdaftar di database, lalu kirim email reset password
    // Tapi untuk demo ini kita hanya akan tampilkan pesan sukses
    $success = true;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Lupa Kata Sandi - Walid Id</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-4 text-blue-700">Lupa Kata Sandi</h2>

        <?php if ($success): ?>
        <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
            Link reset password telah dikirim ke email <strong><?= htmlspecialchars($email) ?></strong>
        </div>
        <?php else: ?>
        <p class="text-center text-gray-600 mb-6">Masukkan email akunmu. Kami akan mengirimkan tautan untuk mengatur
            ulang kata sandi.</p>
        <form action="forgot_password.php" method="POST">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" required
                class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="contoh@email.com" />

            <button type="submit"
                class="mt-6 w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Kirim Link Reset
            </button>
        </form>
        <?php endif; ?>

        <div class="text-center mt-6">
            <a href="login.php" class="text-sm text-blue-600 hover:underline">Kembali ke halaman login</a>
        </div>
    </div>
</body>

</html>