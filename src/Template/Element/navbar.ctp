<div class="navbar navbar-custom navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?= $this->Html->link('Pokémon League', ['controller' => 'pages', 'action' => 'display'], ['class' => 'navbar-brand']) ?>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php $cell = $this->cell('Events::navbar'); ?>
                    <?= $cell ?>                  
                </ul>
              </li>
            <li><a href="#">About</a></li>
            <li><a href="#">Hall of Fame</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav">
            <?php $cell = $this->cell('User::navbar', [$user]); ?>
                    <?= $cell ?>
        </ul>
    </div>
</div>

