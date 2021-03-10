<ul>
<?php foreach ($foods as $food): ?>
<li><?=$food['name'];?>
<a href="foods/delete/<?=$food['id']?>">hapus</a>
</li>
<?php endforeach;?>
</ul>