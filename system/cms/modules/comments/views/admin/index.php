<section class="padded">
<div class="container-fluid">


	<!-- Box -->
	<section class="box">

		<!-- Header -->
		<section class="box-header">
			<span class="title"><?php echo lang('comments:title') ?></span>
		</section>


		<!-- Box Content -->
		<section class="box-content">


			<?php echo $this->load->view('admin/partials/filters') ?>

			<?php echo form_open('admin/comments/action');?>
			
				<?php echo form_hidden('redirect', uri_string()) ?>
			
				<div id="filter-stage">
				
					<?php echo $this->load->view('admin/tables/comments') ?>
				
				</div>

				<div class="btn-group padding-left padding-right">
			
					<?php if (Settings::get('moderate_comments')): ?>
						<?php if ( ! $comments_active): ?>
							<?php $this->load->view('admin/partials/buttons', array('buttons' => array('approve','delete'))) ?>
						<?php else: ?>
							<?php $this->load->view('admin/partials/buttons', array('buttons' => array('unapprove','delete'))) ?>
						<?php endif ?>
					<?php else: ?>
						<?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete'))) ?>
					<?php endif ?>
				</div>

			<?php echo form_close();?>


		</section>
		<!-- /Box Content -->

	</section>
	<!-- /Box -->

</div>
</section>