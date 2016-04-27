<?php $this->assign('title', 'Edit Event'); ?>

<div class="events form">
<?= $this->Form->create($event) ?>
    <fieldset>
    <div class="row">
        <div class="col-md-4">
            <legend><?= __('Add Event') ?></legend>
            <div class="form-group">
            <?= $this->Form->input('eventname', ['class' => 'form-control']) ?>
            </div>

        </div>
        <div class="col-md-12">
            <?= $this->Form->input('description', ['class' => 'form-control']) ?>
        </div>
        
        <div class="col-md-4">
            <?= $this->Form->input('location', ['class' => 'form-control']) ?>
            <?= $this->Form->input('startdate', ['class' => 'form-control']) ?>
            <?= $this->Form->input('enddate', ['class' => 'form-control']) ?>            
        </div>
    </div>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>