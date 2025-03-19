<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pokémon Card Login</title>
    <script>
        function handleFormSubmit(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    // Simulate a successful login
    const username = document.querySelector('input[name="username"]').value;
    const password = document.querySelector('input[name="password"]').value;

    // Basic validation (you should replace this with actual authentication logic)
    if (username && password) {
        // Set login status in localStorage
        localStorage.setItem('isLoggedIn', 'true');
        // Redirect to the index page
        window.location.href = 'index.html';
    } else {
        alert('Please enter both username and password.');
    }
}

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', handleFormSubmit);
        });
    </script>
</head>
<body class="bg-yellow-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96 ml-auto">
        <h2 class="text-xl font-bold text-center mb-4">Pokémon Card Login / Register</h2>
        <form method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username" class="w-full p-2 border rounded" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded" required>
            <button type="submit" name="action" value="login" class="w-full p-2 bg-blue-500 text-white rounded">Login</button>
            <button type="submit" name="action" value="register" class="w-full p-2 bg-green-500 text-white rounded">Register</button>
        </form>
    </div>
</body>
</html>