<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Laravel</title>
</head>
<body>
    <header>
        <ul>
         <li><a href="<?php echo e(route('firstPage')); ?>"></a></li>
         <li><a href="<?php echo e(route('thirdPage')); ?>"></a></li>
        </ul>
    </header>
    <section>
        <div>
            <h1><?php echo e($myText); ?></h1>
            <h2><?php echo e($mySubText); ?></h2>
        </div>
    </section>
</body>
</html><?php /**PATH /Users/utente/Desktop/laravel-primi-passi/resources/views/secondPage.blade.php ENDPATH**/ ?>