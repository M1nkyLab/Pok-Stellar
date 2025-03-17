<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CosmoFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Enable dark mode in Tailwind
    tailwind.config = {
      darkMode: 'class',
    };
  </script>
  <style>
    /* Custom hover effect for sidebar links */
    .sidebar-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 0.5rem;
    }
  </style>
</head>

<body class="bg-gray-100 font-sans dark:bg-gray-900 dark:text-white">

  <!-- Sidebar -->
  <div class="w-56 bg-[#13D8C7] fixed left-4 top-5 bottom-5 rounded-3xl flex flex-col items-center py-10 shadow-lg dark:bg-teal-900">
    <h1 class="font-bold text-3xl bg-gradient-to-r from-teal-900 to-green-600 bg-clip-text text-transparent">CosmoFlow</h1>
    <ul class="text-amber-50 font-semibold space-y-6 mt-20 text-lg w-full">
      <li class="sidebar-link hover:bg-opacity-10 transition duration-300">
        <a href="index.php" class="flex items-center space-x-3 px-6 py-3">
          <img src="../asset/dashboard_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" class="w-6 h-6" alt="Dashboard">
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sidebar-link hover:bg-opacity-10 transition duration-300">
        <a href="statistics.php" class="flex items-center space-x-3 px-6 py-3">
          <img src="../asset/monitoring_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" class="w-6 h-6" alt="Statistics">
          <span>Statistics</span>
        </a>
      </li>
      <li class="sidebar-link hover:bg-opacity-10 transition duration-300">
        <a href="team.php" class="flex items-center space-x-3 px-6 py-3">
          <img src="../asset/groups_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" class="w-6 h-6" alt="Team">
          <span>Team</span>
        </a>
      </li>
      <li class="sidebar-link hover:bg-opacity-10 transition duration-300">
        <a href="inbox.php" class="flex items-center space-x-3 px-6 py-3">
          <img src="../asset/inbox_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" class="w-6 h-6" alt="Inbox">
          <span>Inbox</span>
        </a>
      </li>
      <li class="sidebar-link hover:bg-opacity-10 transition duration-300">
        <a href="settings.php" class="flex items-center space-x-3 px-6 py-3">
          <img src="../asset/settings_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" class="w-6 h-6" alt="Settings">
          <span>Settings</span>
        </a>
      </li>
    </ul>
  </div>

  <!-- Main Content -->
  <main class="ml-[240px] p-10">

    <!-- Header Section -->
    <div class="flex justify-between items-center mb-8">
      <!-- Welcome Card -->
      <section class="bg-[#13D8C7] text-black p-8 rounded-3xl shadow-md flex-1 dark:bg-teal-800 dark:text-white">
        <h1 class="font-bold text-3xl">Welcome, <span id="user-name">User</span>!</h1>
        <p class="text-lg mt-2">It's good to see you again.</p>
      </section>

      <!-- Dark Mode Toggle and User Profile -->
      <div class="flex items-center space-x-4">
      <!-- Dark Mode Toggle -->
      <button id="dark-mode-toggle" class="bg-gray-200 p-2 rounded-full dark:bg-gray-700">
        <img id="mode-icon" src="../asset/dark_mode_24dp_13D8C7_FILL0_wght400_GRAD0_opsz24.svg" class="w-6 h-6" alt="Mode Icon">
      </button>

        <!-- User Profile -->
        <div class="relative">
          <button class="flex items-center space-x-2">
            <img src="../asset/group_24dp_13D8C7_FILL0_wght400_GRAD0_opsz24.svg" class="w-8 h-8 rounded-full" alt="User Avatar">
            <span class="font-semibold dark:text-white">John Doe</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Work Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Total Works -->
      <div class="bg-teal-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 dark:bg-teal-700">
        <p class="text-2xl font-bold">56</p>
        <p class="text-sm mt-2">Total Works</p>
        <img src="../asset/work_icon.svg" class="w-8 h-8 mt-4" alt="Total Works">
      </div>

      <!-- Pending Works -->
      <div class="bg-teal-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 dark:bg-teal-700">
        <p class="text-2xl font-bold">12</p>
        <p class="text-sm mt-2">Pending Works</p>
        <img src="../asset/work_history_24dp_13D8C7_FILL0_wght400_GRAD0_opsz24.svg" class="w-8 h-8 mt-4" alt="Pending Works">
      </div>

      <!-- Completed Works -->
      <div class="bg-teal-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 dark:bg-teal-700">
        <p class="text-2xl font-bold">44</p>
        <p class="text-sm mt-2">Completed Works</p>
        <img src="../asset/completed_icon.svg" class="w-8 h-8 mt-4" alt="Completed Works">
      </div>
    </div>

    <!-- Ongoing Tasks Section -->
<section class="mt-10">
  <h1 class="font-bold text-3xl mb-6">Ongoing Tasks</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Task Card 1 -->
    <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800">
      <h2 class="font-bold text-xl mb-2">Design New Dashboard</h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">Create a new dashboard layout for the admin panel.</p>
      <div class="mt-4">
        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-sm dark:bg-yellow-800 dark:text-yellow-100">In Progress</span>
      </div>
      <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
        <span class="font-semibold">Due Date:</span> 2023-12-15
      </div>
      <div class="mt-4">
        <div class="bg-gray-200 rounded-full h-2 dark:bg-gray-700">
          <div class="bg-yellow-500 h-2 rounded-full" style="width: 60%;"></div>
        </div>
        <p class="text-sm mt-2 text-gray-600 dark:text-gray-400">60% completed</p>
      </div>
    </div>

    <!-- Task Card 2 -->
    <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800">
      <h2 class="font-bold text-xl mb-2">Develop API Integration</h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">Integrate the backend API with the frontend application.</p>
      <div class="mt-4">
        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-sm dark:bg-blue-800 dark:text-blue-100">Pending</span>
      </div>
      <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
        <span class="font-semibold">Due Date:</span> 2023-12-20
      </div>
      <div class="mt-4">
        <div class="bg-gray-200 rounded-full h-2 dark:bg-gray-700">
          <div class="bg-blue-500 h-2 rounded-full" style="width: 30%;"></div>
        </div>
        <p class="text-sm mt-2 text-gray-600 dark:text-gray-400">30% completed</p>
      </div>
    </div>

    <!-- Task Card 3 -->
    <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800">
      <h2 class="font-bold text-xl mb-2">Test New Features</h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">Perform QA testing for the newly developed features.</p>
      <div class="mt-4">
        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm dark:bg-green-800 dark:text-green-100">Completed</span>
      </div>
      <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
        <span class="font-semibold">Due Date:</span> 2023-12-10
      </div>
      <div class="mt-4">
        <div class="bg-gray-200 rounded-full h-2 dark:bg-gray-700">
          <div class="bg-green-500 h-2 rounded-full" style="width: 100%;"></div>
        </div>
        <p class="text-sm mt-2 text-gray-600 dark:text-gray-400">100% completed</p>
      </div>
    </div>
  </div>
</section>

  <script>
    // Dark Mode Toggle Logic
  const toggle = document.getElementById('dark-mode-toggle');
  const modeIcon = document.getElementById('mode-icon');

  // Function to update mode and logo
  function updateMode(isDark) {
    if (isDark) {
      document.documentElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
      modeIcon.src = "../asset/dark_mode_24dp_13D8C7_FILL0_wght400_GRAD0_opsz24.svg"; // Dark mode logo
    } else {
      document.documentElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
      modeIcon.src = "../asset/dark_mode_24dp_13D8C7_FILL0_wght400_GRAD0_opsz24.svg"; // Light mode logo
    }
  }

  // Check stored theme on load
  document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme');
    updateMode(savedTheme === 'dark');
  });

  // Toggle dark mode on button click
  toggle.addEventListener('click', () => {
    const isDark = !document.documentElement.classList.contains('dark');
    updateMode(isDark);
  });

    // Username from Local Storage
    document.addEventListener("DOMContentLoaded", function() {
      const username = localStorage.getItem("username") || "User";
      document.getElementById("user-name").textContent = username;
    });
  </script>

</body>

</html>