<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<header>
  <?php $this->theme->header(); ?>
</header>
<section>
  <h1>Index Template</h1>
    <?= $name; ?>
</section>
<footer>
    <?php $this->theme->footer(); ?>
</footer>
</body>
</html>