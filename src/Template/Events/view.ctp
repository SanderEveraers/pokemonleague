<div class="row-fluid">
<?php $cell = $this->cell('Events::edit_event', [$user, $event]); ?>
                    <?= $cell ?>
</div>

<h1><?= $event->eventname ?></h1>

<?= $this->Html->link('view english version', ['controller' => 'events', 'action' => 'viewenglish', $event['id']]) ?>
<h2>Locatie</h2>
<?= $event->location ?>
<h2>Het event</h2>
<?php eval($event->description) ?>

<div class="row-fluid">
<?php $cell = $this->cell('Events::edit_event', [$user, $event]); ?>
                    <?= $cell ?>
</div>