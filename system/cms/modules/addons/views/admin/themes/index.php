<section class="padded">
<div class="container-fluid">


	<!-- Box -->
	<section class="box">

		<!-- Header -->
		<section class="box-header">
			<span class="title"><?php echo lang('addons:themes') ?></span>
		</section>


		<!-- Box Content -->
		<section class="box-content">

			<?php if ($themes): ?>
			
				<?php echo form_open('admin/addons/themes/set_default') ?>
				<?php echo form_hidden('method', $this->method) ?>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th width="50px" class="text-center"><?php echo lang('addons:themes:default_theme_label') ?></th>
							<th width="15%"><?php echo lang('addons:themes:theme_label') ?></th>
							<th class="collapse"><?php echo lang('global:description') ?></th>
							<th class="collapse" width="15%"><?php echo lang('global:author') ?></th>
							<th width="50px" class="text-center"><?php echo lang('addons:themes:version_label') ?></th>
							<th width="250px"></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($themes as $theme): ?>
						<tr>
							<td class="text-center"><input type="radio" name="theme" value="<?php echo $theme->slug ?>"
								<?php echo isset($theme->is_default) ? 'checked' : '' ?> />
							</td>
							<td>
								<?php if ( ! empty($theme->website)): ?>
									<?php echo anchor($theme->website, $theme->name, array('target'=>'_blank')) ?>
								<?php else: ?>
									<?php echo $theme->name ?>
								<?php endif ?>
							</td>
							<td class="collapse"><?php echo $theme->description ?></td>
							<td class="collapse">
								<?php if ($theme->author_website): ?>
									<?php echo anchor($theme->author_website, $theme->author, array('target'=>'_blank')) ?>
								<?php else: ?>
									<?php echo $theme->author ?>
								<?php endif ?>
							</td>
			
							<td class="text-center"><?php echo $theme->version ?></td>
							<td>
								<div class="btn-group pull-right">
									<?php echo isset($theme->options) ? anchor('admin/addons/themes/options/'.$theme->slug, lang('addons:themes:options'), 'title="'.$theme->name.'" class="btn btn-small options"') : '' ?>
									<a href="<?php echo $theme->screenshot ?>" rel="screenshots" title="<?php echo $theme->name ?>" class="btn btn-small" data-toggle="modal"><?php echo lang('buttons:preview') ?></a>
									<?php if($theme->slug != 'admin_theme') { echo anchor('admin/addons/themes/delete/'.$theme->slug, lang('buttons:delete'), 'class="confirm btn btn-small btn-danger"'); } ?>
								</div>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>

				<?php $this->load->view('admin/partials/pagination') ?>
				
				<div class="btn-group padding-left padding-right">
					<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save') )) ?>
				</div>
				
				<?php echo form_close() ?>
			
			<?php else: ?>
				<p class="alert margin"><?php echo lang('addons:themes:no_themes_installed') ?></p>
			<?php endif ?>

		</section>
		<!-- /Box Content -->

	</section>
	<!-- /Box -->


</div>
</section>