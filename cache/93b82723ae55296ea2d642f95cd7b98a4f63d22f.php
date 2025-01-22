<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?php echo $__env->yieldContent('title'); ?>
    Hola mundo
  </h1>
  <main>
    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>
</body>
</html>