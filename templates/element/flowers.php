<ul>
<?php foreach($query as $row) : ?>
<li>Nome: <?=$row->name?></li>
<?php foreach($row->occasions as $occasion) :?>
<li>Occasione: <?$occasion->name . '-' . $occasion->description ?></li>
  <?php endforeach; ?>
  <?php endforeach; ?>
</ul>