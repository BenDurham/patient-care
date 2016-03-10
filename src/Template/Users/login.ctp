<div class="index medium-4 medium-offset-4 large-4 large-offset-4 columns content">
	<div class="panel">
		<h3 class="text-center">Patientcare Admin Login</h3>
		<?= $this->Form->create(); ?>
		<?= $this->Form->input('email'); ?>
		<?= $this->Form->input('password', array('type' => 'password')); ?>		
		<?= $this->Form->submit('Login', array('class' => 'button')); ?>
	</div> <!-- ends panel -->
</div> <!-- ends columns -->
