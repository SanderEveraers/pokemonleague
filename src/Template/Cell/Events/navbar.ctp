<?php $sep=false; ?>

<?php if(count($ongoing_events)>0) : ?>
	<?php $sep=true; ?>
	<li class="dropdown-header">Ongoing Events</li>
	<?php foreach($coming_events as $event) : ?>
		<li><?= $this->Html->link($event->eventname, ['controller' => 'events', 'action' => 'view', $event['id']]) ?></li>
	<?php endforeach; ?>
<?php endif; ?>

<?php if(count($coming_events)>0) : ?>
	<?php if($sep) : ?>
		<li role="separator" class="divider"></li>
	<?php endif; ?>
	<?php $sep=true; ?>
	<li class="dropdown-header">Coming Events</li>
	<?php foreach($coming_events as $event) : ?>
		<li><?= $this->Html->link($event->eventname, ['controller' => 'events', 'action' => 'view', $event['id']]) ?></li>
	<?php endforeach; ?>
<?php endif; ?>


<?php if(count($past_events)>0) : ?>
	<?php if($sep) : ?>
    	<li role="separator" class="divider"></li>
    <?php endif; ?>
	<li class="dropdown-header">Past Events</li>
	<?php foreach($past_events as $event) : ?>
		<li><?= $this->Html->link($event->eventname, ['controller' => 'events', 'action' => 'view', $event['id']]) ?></li>
	<?php endforeach; ?>
<?php endif; ?>