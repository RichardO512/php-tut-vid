<?php
$names = ['Clark Kent', 'Bruce Wayne', 'Barry Allen', 'Hal Jordan'];

$users = [
  ['name' => 'John', 'email' => 'john@email.com'],
  ['name' => 'Jane', 'email' => 'jane@email.com'],
  ['name' => 'Joe', 'email' => 'joe@email.com'],
  ['name' => 'Mary', 'email' => 'mary@email.com']
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
      <ul class="mb-6">
      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
      <ul class="mb-6">
        <!-- using foreach to loop arrays
        it always best to use foreach for looping arrays 
        -->
        <?php foreach ($names as $name): ?>
          <li><?= $name ?></li>
        <?php endforeach; ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
      <ul class="mb-6">
        <!-- getting the index using foreach
         by using the arrow or associative arrow -->
        <?php foreach ($names as $i => $name): ?>
          <li><?= $i . ' ' . $name ?></li>
        <?php endforeach; ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
      <ul class="mb-6">
        <?php foreach ($users as $user): ?>
          <!-- using foreach to loop associative array by using as-->
          <!--  we only use the [] if we have a multiple arrays or
            were using a 3d arrays or multideminsional array 
            and remember to write the keyname to display the value
            -->
          <li><?= $user['name']; ?></li>
        <?php endforeach; ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
      <ul class="mb-6">
        <!-- it is best to use the as $var=> $key if we have one
         demisonal associative array if we dont have
         we must nested loop -->
        <!-- < ?php foreach ($users as $user => $key): ?>
          <li>< ?= $user . ' ' . $key['name'] . ' ' . $key['email'] ?></li>
        < ?php endforeach; ?> -->
        <!--  -->
        <!-- In most cases we dont do or really need to get the key 
         in a associative array.
         we just only need the value so the
         foreach($user as $user) - is always or mostly used
      -->
        <?php foreach ($users as $user): ?>
          <?php foreach ($user as $key => $value): ?>
            <li><?= $key . ':' . $value ?></li>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</body>

</html>