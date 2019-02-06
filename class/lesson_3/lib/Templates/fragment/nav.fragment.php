<nav>
	
	<a href="#">Войти</a>
	<?php if ($user): ?>
		<a href="#"><?php $user['email'] ?></a>
		<a href="/log_out.php">Выйти</a>

	<?php else: ?>
		<a href="/login.php">Войти</a>
	<?php endif; ?>
</nav>


<?php if (isset($_SESSION['succerss_message'])): ?>
	<div >
		<?php $_SESSION['succerss_message']; ?>
	</div>

<?php 

	unset($_SESSION['succerss_message']);
endif;
?>