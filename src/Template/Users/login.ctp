<!-- File: src/Template/Users/login.ctp -->

<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>

	    <div class="form-group">
        	<div class="row">
	         	<div class="col-md-4">
	         	<?= $this->Form->input('username', ['class' => 'form-control']) ?>
	         	</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4">
	            	<?= $this->Form->input('password', ['class' => 'form-control']) ?>
	            </div>
	        </div>
        </div>


    </fieldset>
<?= $this->Form->button('Login', ['class' => 'btn btn-primary']); ?>
<?= $this->Form->end() ?>
</div>