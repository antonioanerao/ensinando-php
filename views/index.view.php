<?php include 'template-parts/header.php'; ?>

<h4>New Task</h4>

<form method="POST" action="submit-new-task">
    <label form="description">Description</label>
    <input name="description">

    <button type="submit">Create</button>
</form>

<?php foreach($tasks as $task) : ?>
    <?php if($task->completed) :  ?>
        <li style="text-decoration: line-through;">
            <?php  echo $task->description; ?>
        </li>
    <?php else : ?>
        <li> <?php echo $task->description; ?></li>
    <?php endif; ?>
<?php endforeach; ?>



<?php include 'template-parts/footer.php'; ?>