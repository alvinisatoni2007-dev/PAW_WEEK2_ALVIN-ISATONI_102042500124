<?php
// Inisialisasi variabel
$submitted = false;
$errors    = [];
$nama = $email = $jk = $alamat = $telepon = "";

// Proses data hanya jika form dikirim dengan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama    = trim($_POST["nama"] ?? "");
    $email   = trim($_POST["email"] ?? "");
    $jk      = $_POST["jenis_kelamin"] ?? "";
    $alamat  = trim($_POST["alamat"] ?? "");
    $telepon = trim($_POST["telepon"] ?? "");

    // Validasi sederhana
    if ($nama === "")    { $errors[] = "Nama wajib diisi."; }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "Format email tidak valid."; }
    if ($jk === "")      { $errors[] = "Jenis kelamin wajib dipilih."; }
    if ($alamat === "")  { $errors[] = "Alamat wajib diisi."; }
    if (!preg_match('/^[0-9+\-\s]{8,15}$/', $telepon)) { $errors[] = "Nomor telepon tidak valid (8-15 digit)."; }

    $submitted = empty($errors);
}

// Fungsi bantu agar output aman dari XSS
function e($teks) { return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Input Data Pengguna</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f6f8; margin:0; padding:30px 16px; color:#222; }
        .box { max-width:480px; margin:0 auto 24px; background:#fff; padding:24px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,.1); }
        h1, h2 { margin-top:0; }
        label { display:block; margin:14px 0 4px; font-weight:bold; font-size:14px; }
        input[type=text], input[type=email], input[type=tel], textarea {
            width:100%; padding:9px; border:1px solid #bbb; border-radius:6px; box-sizing:border-box; font-size:14px; }
        .radio label { display:inline; font-weight:normal; margin-right:16px; }
        button { margin-top:20px; background:#c8102e; color:#fff; border:0; padding:10px 22px; border-radius:6px; font-size:15px; cursor:pointer; }
        button:hover { background:#8f0b21; }
        .error { background:#fdecea; color:#b71c1c; padding:10px 14px; border-radius:6px; margin-bottom:10px; }
        table { width:100%; border-collapse:collapse; }
        td { padding:8px; border-bottom:1px solid #eee; vertical-align:top; }
        td:first-child { width:38%; font-weight:bold; }
    </style>
</head>
<body>

<?php if ($submitted) { ?>
    <!-- Hasil input ditampilkan kembali -->
    <div class="box">
        <h2>Data yang Anda Masukkan</h2>
        <table>
            <tr><td>Nama</td><td><?php echo e($nama); ?></td></tr>
            <tr><td>Email</td><td><?php echo e($email); ?></td></tr>
            <tr><td>Jenis Kelamin</td><td><?php echo e($jk); ?></td></tr>
            <tr><td>Alamat</td><td><?php echo nl2br(e($alamat)); ?></td></tr>
            <tr><td>Nomor Telepon</td><td><?php echo e($telepon); ?></td></tr>
        </table>
        <p><a href="index.php">&larr; Isi form lagi</a></p>
    </div>
<?php } else { ?>
    <!-- Form input -->
    <div class="box">
        <h1>Form Data Pengguna</h1>

        <?php foreach ($errors as $err) { ?>
            <div class="error"><?php echo e($err); ?></div>
        <?php } ?>

        <form action="index.php" method="POST">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo e($nama); ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo e($email); ?>" required>

            <label>Jenis Kelamin</label>
            <div class="radio">
                <input type="radio" id="lk" name="jenis_kelamin" value="Laki-laki" <?php if ($jk == "Laki-laki") echo "checked"; ?> required>
                <label for="lk">Laki-laki</label>
                <input type="radio" id="pr" name="jenis_kelamin" value="Perempuan" <?php if ($jk == "Perempuan") echo "checked"; ?>>
                <label for="pr">Perempuan</label>
            </div>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="3" required><?php echo e($alamat); ?></textarea>

            <label for="telepon">Nomor Telepon</label>
            <input type="tel" id="telepon" name="telepon" value="<?php echo e($telepon); ?>" required>

            <button type="submit">Submit</button>
        </form>
    </div>
<?php } ?>

</body>
</html>