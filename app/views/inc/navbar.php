<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <a href="<?php echo URLROOT; ?>" class="navbar-brand"><?php echo SITENAME;?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnavbar" aria-controls="mainnavbar" aria-expanded="false" aria-label="navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainnavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="<?php echo URLROOT; ?>" class="nav-link">HOME</a>
                </li>
            </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                         <a href="<?php echo URLROOT; ?>/users/login" class="nav-link">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/users/register" class="nav-link">REGISTER</a>
                    </li>
                </ul>
        </div>
    </div>
</nav>