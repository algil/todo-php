<?php require 'partials/head.php'; ?>

<h1>Users</h1>

<form class="w-full mx-auto max-w-sm mt-4" method="POST" action="/users">
  <div class="flex items-center border-b border-b-2 border-blue py-2">
    <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Jane Doe" aria-label="Full name" name="name">
    <button class="flex-no-shrink bg-blue hover:bg-blue-dark border-blue hover:border-blue-dark text-sm border-4 text-white py-1 px-2 rounded" type="submit">
      Add name
    </button>
  </div>
</form>

<ul class="list-reset mt-4">
  <?php foreach($users as $user) : ?>
    <li class="mt-3 p-2 bg-grey-lighter border border-grey-light rounded text-grey-darker shadow">
      <?= $user->name; ?>
    </li>
  <?php endforeach; ?>
</ul>

<?php require 'partials/footer.php'; ?>