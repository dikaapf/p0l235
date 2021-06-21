<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<p>
	<?php if (!is_null($transparansi)) $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/apbdesa-tema.php'), $transparansi);?>
		<div>
			<a href="<?= site_url('siteman') ?>"><button class="btn btn-primary navbar-btn"><i class="fa fa-lock fa-lg"></i> Login Admin</button></a>
			<a href="<?= site_url('mandiri_web') ?>"><button class="btn btn-primary navbar-btn"><i class="fa fa-user fa-lg"></i> Layanan Mandiri</button></a>
		</div>
		&copy; 2021-<?php echo date("Y");?> Polres Pandeglang</a> <i class="fa fa-circle" style="font-size: smaller;"></i>
		Banten</a> <?php echo AmbilVersi()?>
	</p>

	<div class="scrollToTop"><i class="fa fa-arrow-up fa-lg"></i></div>
