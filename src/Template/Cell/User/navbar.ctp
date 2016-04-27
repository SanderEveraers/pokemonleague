<?php if ($user['id'] == false) : ?>
	<li><?= $this->Html->link('LOGIN', ['controller' => 'users', 'action' => 'login']) ?></li>
<?php else : ?>
	<li>
        <?=  $this->Html->link('DASHBOARD', ['controller' => 'users', 'action' => 'dashboard']) ?>
    </li>
	<li><?= $this->Html->link('LOGOUT', ['controller' => 'users', 'action' => 'logout']) ?></li>
<?php endif; ?>