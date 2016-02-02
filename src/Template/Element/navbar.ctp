<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Pok&eacutemon League</a>
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
            <li><a href="#">Login</a></li>
        </ul>
    </div>
</div>
