<div class="row-fluid">
<?php $cell = $this->cell('User::edit_event', [$user, $event]); ?>
                    <?= $cell ?>
</div>

<h1><?= $event->eventname ?></h1>
<h2>Lokatie</h2>
<?= $event->location ?>
<h2>Het event</h2>
<?php eval($event->description) ?>

<div class="row-fluid">
<?php $cell = $this->cell('User::edit_event', [$user, $event]); ?>
                    <?= $cell ?>
</div>