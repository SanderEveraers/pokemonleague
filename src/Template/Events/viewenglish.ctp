<div class="row-fluid">
<?php $cell = $this->cell('Events::edit_event_en', [$user, $event]); ?>
                    <?= $cell ?>
</div>

<h1><?= $event->eventname ?></h1>

<?= $this->Html->link('view dutch version', ['controller' => 'events', 'action' => 'view', $event['id']]) ?>
<h2>Location</h2>
<?= $event->location ?>
<h2>The event</h2>
<?php eval($event->description_en) ?>
<div class="row-fluid">
<?php $cell = $this->cell('Events::edit_event_en', [$user, $event]); ?>
                    <?= $cell ?>
</div>