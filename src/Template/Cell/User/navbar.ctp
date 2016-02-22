<?php if ($user['id'] == false) : ?>
	<li><?= $this->Html->link('login', ['controller' => 'users', 'action' => 'login']) ?></li>
<?php else : ?>
	<li>
        <?=  $this->Html->link('Dashboard', ['controller' => 'users', 'action' => 'dashboard']) ?>
    </li>
	<li><?= $this->Html->link('logout', ['controller' => 'users', 'action' => 'logout']) ?></li>
<?php endif; ?>