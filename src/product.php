<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokéStellar</title>
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


    <!-- Product Grid -->
<div class="container mx-auto p-6">
    <h2 class="text-4xl font-bold text-gray-800 text-center">Pokémon Cards Collection</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 mt-6">
        <!-- Pikachu Illustrator -->
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="images/pikachu-illustrator.jpg" alt="Pikachu Illustrator" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">Pikachu Illustrator ⚡</h3>
            <p class="text-gray-500 mt-1">Ultra rare collector’s card.</p>
            <p class="text-xl font-bold text-red-600 mt-3">$5,000,000</p>
            <button class="mt-4 w-full bg-gradient-to-r from-yellow-500 to-yellow-700 text-white px-4 py-2 rounded-lg hover:opacity-90 transition duration-300">
                Add to Cart 🛒
            </button>
        </div>

        <!-- Shadowless Charizard -->
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="images/shadowless-charizard.jpg" alt="Shadowless Charizard" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">Charizard - Shadowless 🔥</h3>
            <p class="text-gray-500 mt-1">Rare 1st edition card.</p>
            <p class="text-xl font-bold text-red-600 mt-3">$420,000</p>
            <button class="mt-4 w-full bg-gradient-to-r from-orange-500 to-orange-700 text-white px-4 py-2 rounded-lg hover:opacity-90 transition duration-300">
                Add to Cart 🛒
            </button>
        </div>

        <!-- Master's Key -->
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="images/masters-key.jpg" alt="Master's Key" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">Master's Key 🏆</h3>
            <p class="text-gray-500 mt-1">Exclusive World Championship card.</p>
            <p class="text-xl font-bold text-red-600 mt-3">$25,000</p>
            <button class="mt-4 w-full bg-gradient-to-r from-gray-500 to-gray-700 text-white px-4 py-2 rounded-lg hover:opacity-90 transition duration-300">
                Add to Cart 🛒
            </button>
        </div>

        <!-- Trophy Pikachu -->
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="images/trophy-pikachu.jpg" alt="Trophy Pikachu" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">Trophy Pikachu 🏅</h3>
            <p class="text-gray-500 mt-1">Given to top tournament winners.</p>
            <p class="text-xl font-bold text-red-600 mt-3">$200,000</p>
            <button class="mt-4 w-full bg-gradient-to-r from-yellow-500 to-yellow-700 text-white px-4 py-2 rounded-lg hover:opacity-90 transition duration-300">
                Add to Cart 🛒
            </button>
        </div>

        <!-- Blastoise Prototype -->
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="images/blastoise-prototype.jpg" alt="Blastoise Prototype" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">Blastoise Prototype 💧</h3>
            <p class="text-gray-500 mt-1">Ultra-rare test print.</p>
            <p class="text-xl font-bold text-red-600 mt-3">$360,000</p>
            <button class="mt-4 w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white px-4 py-2 rounded-lg hover:opacity-90 transition duration-300">
                Add to Cart 🛒
            </button>
        </div>

        <!-- Mewtwo GX Secret Rare -->
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="images/mewtwo-gx.jpg" alt="Mewtwo GX" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">Mewtwo GX 🔮</h3>
            <p class="text-gray-500 mt-1">Powerful psychic-type card.</p>
            <p class="text-xl font-bold text-red-600 mt-3">$3,500</p>
            <button class="mt-4 w-full bg-gradient-to-r from-purple-500 to-purple-700 text-white px-4 py-2 rounded-lg hover:opacity-90 transition duration-300">
                Add to Cart 🛒
            </button>
        </div>
    </div>
</div>


</body>
</html>
