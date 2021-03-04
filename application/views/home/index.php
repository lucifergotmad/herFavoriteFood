<main>
    <h3>Selamat <?php echo $salam; ?></h3>
    <h1><?php echo $nama; ?></h1>
    <form action="proses.php" method="POST">
        <input type="text" name="makanan" placeholder="Permisi mau nanya, makanan favorit kamu apa?">
        <input type="submit" value="Simpan">
    </form>
</main>
