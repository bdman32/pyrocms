<section class="padded">
<div class="container-fluid">


	<!-- Box -->
	<section class="box">

		<!-- Header -->
		<section class="box-header">
			<span class="title"><?php echo lang('addons:modules:addon_list');?></span>
		</section>


		<!-- Box Content -->
		<section class="box-content">
		
			<?php if ($addon_modules): ?>
			<table class="table table-hover table-striped">

				<thead>
					<tr>
						<th><?php echo lang('name_label');?></th>
						<th class="collapse"><span><?php echo lang('desc_label');?></span></th>
						<th><?php echo lang('version_label');?></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($addon_modules as $module): ?>
					<tr>
						<td class="collapse"><?php echo ($module['is_backend'] and $module['installed']) ? anchor('admin/'.$module['slug'], $module['name']) : $module['name'] ?></td>
		
						<td><?php echo $module['description'] ?></td>
						<td class="text-center"><?php echo $module['version'] ?></td>
						<td>

							<div class="pull-right">
								<?php if ($module['installed']): ?>
									<?php if ($module['enabled']): ?>
										<?php echo anchor('admin/addons/modules/disable/'.$module['slug'], lang('global:disable'), array('class'=>'confirm btn btn-small btn-danger', 'title'=>lang('addons:modules:confirm_disable'))) ?>
									<?php else: ?>
										<?php echo anchor('admin/addons/modules/enable/'.$module['slug'], lang('global:enable'), array('class'=>'confirm btn btn-small btn-success', 'title'=>lang('addons:modules:confirm_enable'))) ?>
									<?php endif ?>
									<?php if ($module['is_current']): ?>
										<?php echo anchor('admin/addons/modules/uninstall/'.$module['slug'], lang('global:uninstall'), array('class'=>'confirm btn btn-small btn-danger', 'title'=>lang('addons:modules:confirm_uninstall'))) ?>
									<?php else: ?>
										<?php echo anchor('admin/addons/modules/upgrade/'.$module['slug'], lang('global:upgrade'), array('class'=>'confirm btn btn-small btn-warning', 'title'=>lang('addons:modules:confirm_upgrade'))) ?>
									<?php endif ?>
								<?php else: ?>
									<?php echo anchor('admin/addons/modules/install/'.$module['slug'], lang('global:install'), array('class'=>'confirm btn btn-small btn-success', 'title'=>lang('addons:modules:confirm_install'))) ?>
								<?php endif ?>
								<?php echo anchor('admin/addons/modules/delete/'.$module['slug'], lang('global:delete'), array('class'=>'confirm btn btn-small btn-danger', 'title'=>lang('addons:modules:confirm_delete'))) ?>
							</div>
							
						</td>
					</tr>
				<?php endforeach ?>
				</tbody>

			</table>
			<?php else: ?>

				<div class="alert margin"><?php echo lang('streams:no_results'); ?></div>

			<?php endif; ?>

		</section>
		<!-- /Box Content -->

	</section>
	<!-- /Box -->



	<!-- Box -->
	<section class="box">

		<!-- Header -->
		<section class="box-header">
			<span class="title"><?php echo lang('addons:modules:core_list');?></span>
		</section>


		<!-- Box Content -->
		<section class="box-content">

			<p class="alert margin"><?php echo lang('addons:modules:core_introduction') ?></p>
		
			<table class="table table-hover table-striped">

				<thead>
					<tr>
						<th><?php echo lang('name_label');?></th>
						<th><span><?php echo lang('desc_label');?></span></th>
						<th><?php echo lang('version_label');?></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($core_modules as $module): ?>
				<?php if ($module['slug'] === 'addons') continue ?>
					<tr>
						<td><?php echo $module['is_backend'] ? anchor('admin/'.$module['slug'], $module['name']) : $module['name'] ?></td>
						<td><?php echo $module['description'] ?></td>
						<td class="text-center"><?php echo $module['version'] ?></td>
						<td>
						
							<div class="pull-right">
								<?php if ($module['enabled']): ?>
				 					<?php echo anchor('admin/addons/modules/disable/'.$module['slug'], lang('global:disable'), array('class'=>'confirm btn btn-small btn-danger', 'title'=>lang('addons:modules:confirm_disable'))) ?>
								<?php else: ?>
									<?php echo anchor('admin/addons/modules/enable/'.$module['slug'], lang('global:enable'), array('class'=>'confirm btn btn-small btn-success', 'title'=>lang('addons:modules:confirm_enable'))) ?>
								<?php endif ?>
							</div>

						</td>
					</tr>
				<?php endforeach ?>
				</tbody>

			</table>

		</section>
		<!-- /Box Content -->

	</section>
	<!-- /Box -->

</div>
</section>