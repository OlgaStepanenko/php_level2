<?php 
	foreach ($reviewes as $reviewes): 
			
	?>
		<br><strong><?= $reviewes['id'] ?></strong>
		<?= $reviewes['name'] ?>
		<?= $reviewes['review'] ?>

	<?php 
	endforeach;
	?>
</ul>


