<div id="actions-main">
	<ul class="actions">
		<li><a href="<?php echo base_url(); ?>folders"><i class="icon icon-step-backward"></i><?php echo $this->lang->line('back'); ?></a></li>
	</ul>
</div>
<main>
	<section>
		<section>
	<?php echo validation_errors(); ?>

	<?php echo form_open(current_url()); ?>

	<article class="cell title">
		<h2><i class="icon icon-folder-close"></i><?php echo $this->lang->line('folders'); ?></h2>
	</article>

	<h2><i class="icon icon-plus"></i><?php echo $this->lang->line('add'); ?></h2>

	<p>
	<?php echo form_label($this->lang->line('title'), 'flr_title'); ?>
	<?php echo form_input('flr_title', set_value('flr_title'), 'id="flr_title" class="input-xlarge required"'); ?>
	</p>

	<p>
	<button type="submit"><?php echo $this->lang->line('send'); ?></button>
	</p>
	<?php echo form_close(); ?>
		</section>
	</section>
</main>
