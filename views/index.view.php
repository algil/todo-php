<?php require 'partials/head.php'; ?>

<h1>Todo List</h1>

<ul class="list-reset">
  <?php foreach($tasks as $task) : ?>
    <li class="mt-3 p-2 bg-grey-lighter border border-grey-light rounded text-grey-darker shadow <?= $task->completed ? 'line-through text-grey' : '' ?>">
      <?= $task->description; ?>
    </li>
  <?php endforeach; ?>
</ul>

<form class="w-full mx-auto max-w-sm mt-4" method="POST" action="/names">
  <div class="flex items-center border-b border-b-2 border-blue py-2">
    <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Jane Doe" aria-label="Full name" name="name">
    <button class="flex-no-shrink bg-blue hover:bg-blue-dark border-blue hover:border-blue-dark text-sm border-4 text-white py-1 px-2 rounded" type="submit">
      Add name
    </button>
  </div>
</form>
  
<?php require 'partials/footer.php'; ?>