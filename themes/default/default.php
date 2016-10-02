<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Phacil :: <?=$theme_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Le styles -->
    <?=Theme::css('bootstrap')?>

    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <?=Theme::css('bootstrap-responsive')?>
  </head>

  <body>

    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Phacil</a>
          <div class="nav-collapse collapse">
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      
        <?=$content?>
    </div> <!-- /container -->

  </body>
</html>