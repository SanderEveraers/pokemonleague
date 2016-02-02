<!-- File: src/Template/Events/index.ctp -->

<h1>Events</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Start Date</th>
        <th>End Date Date</th>
        <th>Description</th>
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
            <?= $event->description ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>