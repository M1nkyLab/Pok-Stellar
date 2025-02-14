<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CosmoFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <!-- sidebar -->
  <div class="w-[200px] bg-black fixed left-3 top-5 bottom-5 rounded-3xl  flex flex-col place-center py-8">
    <h1 class="text-amber-200 font-bold text-center text-3xl">Cosmo<span class="text-amber-800">Flow</span></h1>
    <ul class="text-amber-50 font-bold space-y-14 flex flex-col items-center mt-24">
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="statistics.php">Statistics</a></li>
        <li><a href="team.php">Team</a></li>
        <li><a href="inbox.php">Inbox</a></li>
        <li><a href="settings.php">Settings</a></li>
      </ul>
  </div>

  <!-- cards for greetings user -->
  <main class="ml-52 p-6 grid grid-cols-6 gap-7">
    <section class="col-span-2 bg-red-500 p-6 rounded-3xl shadow">
      <h1 class="font-bold text-3xl">Welcome, User!</h1>
        <p>It's good to see you again.</p>
    </section>
  </main>
  
  <!-- cards for total works -->
  <div class="mt-4 ml-60 w-[200px] grid-cols-3 gap-7">
    <section class=" col-span-2 bg-amber-800 rounded-2xl">
      <h1 class="font-bold text-3xl p-[5px]">56</h1>
      <p class="text-center">Total Works</p>
    </section>
  </div>

  <!-- cards for pendings works -->
  <div class="mt-4 ml-60 w-[200px] grid-cols-3 gap-7">
    <section class=" col-span-2 bg-amber-800 rounded-2xl">
      <h1 class="font-bold text-3xl p-[5px]">56</h1>
      <p class="text-center">Pending Works</p>
    </section>
  </div>

  <!-- cards for completed works -->
  <div class="mt-4 ml-60 w-[200px] grid-cols-3 gap-7">
    <section class=" col-span-2 bg-amber-800 rounded-2xl">
      <h1 class="font-bold text-3xl p-[5px]">56</h1>
      <p class="text-center">completed  Works</p>
    </section>
  </div>
</div>

</body>
</html>
