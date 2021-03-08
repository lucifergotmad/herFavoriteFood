
<main class="hero-section">
    <h3 class="heading">Selamat <?php echo $salam; ?></h3>
    <a href="makanan">
    <h1 class="nama text-white"><?=$orang['nama']?></h1>
    </a>
    <form class="row w-100 mx-auto" action="makanan/tambah" method="POST">
        <input class="col-lg-10 py-3 input rounded-pill" autocomplete="off" type="text" name="makanan" placeholder="Permisi mau nanya, makanan favorit kamu apa?">
        <input class="col-lg-2 py-3 btn btn-dark rounded-pill" type="submit" value="Simpan">
    </form>
</main>
