<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="apple-touch-icon" href="<?php echo u('assets/images/apple-touch-icon.png') ?>" />

  <?php echo css('assets/styles/style.css') ?>

</head>

<body>

  <div class="container">
    <header>
      <a href="/"><img src="../assets/images/logo.png" alt="logo" /><br/>
      <h1>RIGEL ST. PIERRE IS A DEVELOPER <br /> FROM KELOWNA, BRITISH COLUMBIA.</h1></a>
      <nav>
        <ul>
          <?php foreach($pages->visible() AS $p): ?>
          <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a><br /><?php echo html($p->subtitle()) ?></li>
          <?php endforeach ?>
        </ul>
      </nav>
    </header>
