<h1><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>User Dashboard</h1>
<div class="row">
	<div class="col-md-4">
		<table class="table table-striped table-hover">
			<tr>
				<th>Action</th>
			</tr>
		    <tr>
		    	<td><?= $this->Html->link('add user', ['controller'=>'users', 'action' => 'add']) ?></td>
		    </tr>
		    <tr>
		    	<td><?= $this->Html->link('events', ['controller'=>'events', 'action' => 'index']) ?></td>
		    </tr>
		    <tr>
		    	<td><?= $this->Html->link('hall of fame', ['pages'=>'events', 'action' => 'index']) ?></td>
		    </tr>
		</table>
	</div>
</div>