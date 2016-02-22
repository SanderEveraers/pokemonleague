<?php if ($user['id'] != false) : ?>
	<?= $this->Html->link(
                $this->Html->tag('span','',['class' => 'glyphicon glyphicon-pencil']).
                    ' Edit',['action' => 'edit', $event->id],['class' => 'btn btn-warning btn-sm', 'role' => 'button' , 'escape' => false]);?>


    <?= $this->Html->link(
        $this->Html->tag('span','',['class' => 'glyphicon glyphicon-remove']).
            ' Delete',['action' => 'delete', $event->id],['class' => 'btn btn-danger btn-sm', 'role' => 'button' , 'confirm' => 'Are you sure you wish to delete this event?', 'escape' => false]);?>
<?php endif; ?>