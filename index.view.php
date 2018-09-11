<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todos app</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mx-auto mt-4">
    <h1>Todo List</h1>

    <ul class="list-reset">
      <?php foreach($tasks as $task) : ?>
        <li class="mt-3 p-2 bg-grey-lighter border border-grey-light rounded text-grey-darker shadow <?= $task->completed ? 'line-through text-grey' : '' ?>">
          <?= $task->description; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  
</body>
</html>