<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | CosmoFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
  
  <div class="bg-white p-10 rounded-3xl shadow-lg w-96 text-center">
    <h1 class="font-bold text-3xl bg-gradient-to-r from-teal-900 to-green-600 bg-clip-text text-transparent">CosmoFlow</h1>
    <p class="text-gray-600 mt-2">Please enter your name to continue</p>
    
    <input type="text" id="username" placeholder="Enter your name" class="w-full mt-4 p-2 border rounded-lg text-center focus:outline-none focus:ring-2 focus:ring-teal-500">
    
    <button onclick="saveUsername()" class="mt-4 bg-teal-500 text-white px-6 py-2 rounded-lg hover:bg-teal-600">Login</button>
  </div>
  
  <script>
    function saveUsername() {
      const username = document.getElementById("username").value.trim();
      if (username) {
        localStorage.setItem("username", username);
        window.location.href = "index.php";
      } else {
        alert("Please enter your name");
      }
    }
  </script>

</body>

</html>
