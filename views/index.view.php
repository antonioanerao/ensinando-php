<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
        <nav>
            <ul>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
        <?php foreach($tasks as $task) : ?>
            <?php if($task->completed) :  ?>
                <li><strike><?php  echo$task->description; ?></strike></li>
            <?php else : ?>
                <li> <?php echo $task->description; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </body>
</html>