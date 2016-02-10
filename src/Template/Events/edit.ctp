<div class="event form">
<?= $this->Form->edit($$event) ?>
    <fieldset>
    <div class="row">
        <div class="col-md-4">
            <legend><?= __('Add User') ?></legend>
            <div class="form-group">
            <?= $this->Form->input('username', ['class' => 'form-control']) ?>
            </div>
            <?= $this->Form->input('password', ['class' => 'form-control']) ?>
            <?= $this->Form->input('role', [
                'options' => ['admin' => 'Admin', 'author' => 'Author'], 'class' => 'form-control'
            ]) ?>
        </div>
    </div>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>