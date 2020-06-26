<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left__nav">
            <!-- <li class="left__nav-item"><a href="./plan_de_site.php" class="left__nav-link">Plan du site</a></li>
            <li class="left__nav-item"><a href="./mentions_legales.php" class="left__nav-link">Mentions légales</a></li>
            <li class="left__nav-item"><a href="./contact.php" class="left__nav-link">Contact</a></li> -->
            <?php
            /*
              Délimiation des blocs de code en "PHTML" (mélange HTML + un peu de PHP)

              for () :
                bloc de code répété
              endfor

              => le : remplace {
              endfor remplace }

              if () : 
                bloc de code si la condition est vrai
              endif
            */
            ?>
            <?php foreach ($navLinks as $label => $linkUrl) : ?>
              <li class="left__nav-item">
                <a href="<?= $linkUrl ?>" class="left__nav-link"><?= $label ?></a>
              </li>
            <?php endforeach ?>

            <?php
            /* Si on ne voulait pas faire du PHTML
              foreach ($nav as $key => $url) {
                echo '<li class="left__nav-item"> <a href="' . $url . '" class="left__nav-link">' . $key . '</a></li>';
              }
            */
            ?>
          </ul>
        </nav>
      </header>
      <main class="right">