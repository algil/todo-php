<?php require 'partials/head.php'; ?>

<h1>Todo List</h1>

<ul class="list-reset">
  <?php foreach($tasks as $task) : ?>
    <li class="mt-3 p-2 bg-grey-lighter border border-grey-light rounded text-grey-darker shadow <?= $task->completed ? 'line-through text-grey' : '' ?>">
      <?= $task->description; ?>
    </li>
  <?php endforeach; ?>
</ul>
  
<?php require 'partials/footer.php'; ?>