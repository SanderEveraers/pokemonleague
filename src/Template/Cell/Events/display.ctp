<div class="actions">
	<h3><?= __('Recent Events') ?></h3>
	<ul>
		<li><strong>You have <?= $total_events ?> events total </strong> </li>
		<?php
			foreach ($recent_events as $event) {
				echo "<li>".$event['eventname']."</li>";
			}
		?>
	</ul>
</div>