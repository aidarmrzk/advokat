<?php include 'header.php'; ?>

	<div class="block pages" id="start">
		<div class="center">
			<?php if ( function_exists( 'bshepelev_breadcrumbs' ) ) bshepelev_breadcrumbs(); ?>
			<h1 class="title">Добро пожаловать на страницу 404!</h1>
			<div class="content" style="min-height:240px;">
				<p>Вы находитесь здесь, потому что ввели адрес страницы, которая уже не существует или была перемещена по другому адресу</p>
				<p>Вернуться на <a href="<?php echo $urlhome; ?>">главную</a> страницу сайта.</p>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>