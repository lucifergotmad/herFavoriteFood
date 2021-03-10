<h3>Selamat <?=$greeting;?></h3>
<h1><?=$name;?></h1>

<p>Boleh tau makanan kesukaan kamu ga?</p>
<form action="foods/add" method="POST">
  <input type="text" name="name" placeholder="Cingcau Dadar">
  <button type="submit">Simpan</button>
</form>
