<!-- File: src/Template/Events/index.ctp -->

<h1>Events</h1>
<table class="table table-striped table-hover">
    <tr>
        <th>Title</th>
        <th>Start Date</th>
        <th>End Date Date</th>
        <th>Options</th>
    </tr>

    <!-- Here is where we iterate through our $events query object, printing out event info -->

    <?php foreach ($events as $event): ?>
    <tr>
        <td>
            <?= $this->Html->link($event->eventname, ['action' => 'view', $event->id]) ?>
        </td>
        <td>
            <?= $event->startdate ?>
        </td>
        <td>
            <?= $event->enddate ?>
        </td>
        <td>
            <!-- Indicates caution should be taken with this action -->
            <button type="button" class="btn btn-warning btn-sm">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Edit
            </button>


            <?= $this->Html->link(
                $this->Html->tag('span','',['class' => 'glyphicon glyphicon-remove']).
                    ' Delete',['action' => 'delete', $event->id],['class' => 'btn btn-danger btn-sm', 'role' => 'button' , 'confirm' => 'Are you sure you wish to delete this event?', 'escape' => false]);?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->Html->link(
                $this->Html->tag('span','',['class' => 'glyphicon glyphicon-plus']).
                    'New Event',['action' => 'add'],['class' => 'btn btn-success btn-sm', 'role' => 'button' ,  'escape' => false]);?>