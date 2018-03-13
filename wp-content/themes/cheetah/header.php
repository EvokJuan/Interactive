<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php bloginfo('name'); ?> <?php wp_title('&laquo', true, 'right'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">

<?php wp_head(); ?>

</head>

<body>

<header id="mainHeader" class="container-fluid">
  <div class="container">
      <section class="row">
          <div id="menu" class="col-md-9">
            <nav>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php wp_nav_menu(array('menu'=>'Primary Menu', 'menu_class' => 'nav navbar-nav' )); ?>
                  </div>
              </nav>
          </div>
      </section>
  </div>
</header>
