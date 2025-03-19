<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PokéStellar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
<nav class="bg-[#c21818] p-4 text-white rounded-[50px] m-4 w-[1400px] h-[60px] mx-auto fixed top-0 left-0 right-0 z-50 shadow-lg flex items-center">
    <div class="w-full flex justify-between items-center px-6">
        <!-- Logo -->
        <h1 class="text-2xl font-bold">
            <a href="index.php">PokéStellar</a>
        </h1>

        <!-- Centered Navigation Links -->
        <ul class="flex space-x-8 items-center">
            <li><a href="index.php" class="hover:underline">Home</a></li>
            <li><a href="product.php" class="hover:underline">Products</a></li>
            <li><a href="#" onclick="logout()" class="hover:underline">Logout</a></li>
        </ul>

        <!-- Profile Picture -->
        <img src="images/profile.jpg" alt="Profile" class="w-10 h-10 rounded-full border-2 border-white">
    </div>
</nav>

        <!-- Spacer to prevent content from being hidden under navbar -->
        <div class="h-20"></div>

    
    <!-- About Us Section -->
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10">
        <h1 class="text-4xl font-bold text-center text-red-600 mb-6">About Us</h1>
        
        <section class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Who We Are</h2>
            <p class="text-gray-600 mt-2">Welcome to <strong>PokéStellar</strong>, a premier Pokémon Trading Card Marketplace! We are passionate Pokémon collectors and traders, dedicated to providing the best platform for buying and selling authentic Pokémon cards.</p>
        </section>
        
        <section class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Our Mission</h2>
            <p class="text-gray-600 mt-2">At <strong>PokéStellar</strong>, our mission is to create a trusted and secure marketplace where Pokémon fans can find rare and valuable cards at competitive prices.</p>
        </section>
        
        <section class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Why Choose Us?</h2>
            <ul class="list-disc list-inside text-gray-600 mt-2 space-y-2">
                <li>✅ 100% Authentic Pokémon Cards</li>
                <li>✅ Secure Transactions</li>
                <li>✅ Wide Range of Pokémon Collections</li>
                <li>✅ Fast & Reliable Shipping</li>
            </ul>
        </section>
        
        <section>
            <h2 class="text-2xl font-semibold text-gray-800">Contact Us</h2>
            <p class="text-gray-600 mt-2">If you have any questions, feel free to <a href="contactus.php" class="text-red-600 font-semibold hover:underline">contact us</a>.</p>
        </section>
    </div>
    
    <footer class="text-center text-gray-600 mt-10 py-4">
        <p>&copy; 2025 <strong>PokéStellar</strong> - Pokémon Trading Card Marketplace. All rights reserved.</p>
    </footer>
</body>
</html>
