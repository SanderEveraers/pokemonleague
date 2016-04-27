<div class="navbar navbar-custom navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">TOGGLE NAVIGATION</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?= $this->Html->link('Pokémon League', ['controller' => 'pages', 'action' => 'display'], ['class' => 'navbar-brand']) ?>
    </div>
    <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENTS <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php $cell = $this->cell('Events::navbar'); ?>
                        <?= $cell ?>                  
                    </ul>
                  </li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">HALL OF FAME</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
            <!-- Login/logout button
            <ul class="nav navbar-nav">
                <?php $cell = $this->cell('User::navbar', [$user]); ?>
                        <?= $cell ?>
            </ul> -->
        </div>
    </div>
</div>

