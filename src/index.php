<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokéStellar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        
    </script>
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
        <img src="..//asset/person_24dp_BB271A_FILL0_wght400_GRAD0_opsz24.svg" alt="Profile" class="w-10 h-10 rounded-full border-2 border-white">
    </div>
</nav>

        <!-- Spacer to prevent content from being hidden under navbar -->
        <div class="h-20"></div>

        <!-- Banner Section (Auto-Slideshow) -->
<section class="relative w-full h-[450px] overflow-hidden">
    <div class="relative w-full h-full">
        <!-- Slide 1 -->
        <img src="../asset/eng_top_banner_SV06.png" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700">
        <!-- Slide 2 -->
        <img src="../asset/eng_top_banner_SV07.png" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700">
        <!-- Slide 3 -->
        <img src="../asset/eng_top_banner_SV08_1.png" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700">
        <!-- Slide 4 -->
        <img src="../asset/eng_top_banner_SV8.5.png" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700">
    </div>
</section>

        <!-- JavaScript for Auto-Slideshow -->
        <script>
            let slides = document.querySelectorAll("section img");
            let index = 0;

            function showSlide() {
                slides.forEach(slide => slide.classList.add("opacity-0"));
                slides[index].classList.remove("opacity-0");
                index = (index + 1) % slides.length;
            }

            setInterval(showSlide, 3000);
            showSlide();
        </script>
       <!-- Products Section -->
        <section class="container mx-auto p-8">
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-8">
                Our Most <span class="text-red-600">Rare Pokémon</span> Cards
            </h2>
        </section>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Product Card -->
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="/images/vanilla-cookie.jpg" alt="Vanilla Cookie" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">Pikachu Illustrator (1998)</h3>
            <p class="text-gray-500 mt-1">Rarest Pokémon card, only 39 exist.</p>
            <p class="text-xl font-bold text-[#ff0000] mt-3">$5,000,000</p>
            <button class="mt-4 w-full bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition duration-300">Add to Cart ⚡</button>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="/images/choco-cookie.jpg" alt="Choco Cookie" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">1999 First Edition Shadowless Holographic Charizard</h3>
            <p class="text-gray-500 mt-1">Iconic card with a rare printing error.</p>
            <p class="text-xl font-bold text-[#ff0000] mt-3">$420,000</p>
            <button class="mt-4 w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-300">Add to Cart 🔥</button>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="/images/choco-cookie.jpg" alt="Choco Cookie" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">Master's Key (2010 Pokémon World Championships)</h3>
            <p class="text-gray-500 mt-1">Prize card from the 2010 Pokémon World Championships.</p>
            <p class="text-xl font-bold text-[#ff0000] mt-3">$250,000</p>
            <button class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">Add to Cart 💙</button>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 transform transition hover:scale-105 hover:shadow-2xl">
            <img src="/images/matcha-cookie.jpg" alt="Matcha Cookie" class="w-full h-52 object-cover rounded-lg">
            <h3 class="text-xl font-semibold mt-4 text-gray-800">1998 Japanese Promo Trophy Pikachu No. 1 Trainer</h3>
            <p class="text-gray-500 mt-1">Given to winners of Japan’s first Pokémon tournament.</p>
            <p class="text-xl font-bold text-[#ff0000] mt-3">$200,000</p>
            <button class="mt-4 w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition duration-300">Add to Cart 🍀</button>
        </div>
    </div>
</section>

    <!-- button for click more  -->
    <div class="flex justify-center mt-4">
        <a href="product.php">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                Click More
            </button>
        </a>
    </div>

    <!-- Footer -->
<footer class="bg-[#c21818] text-white w-full p-4 mt-6">
    <div class="container mx-auto text-center">
        <p>&copy; 2025 PokéStellar. Crafted with 💜 by Haziqq.</p>
        <ul class="flex justify-center space-x-4 mt-2">
            <li><a href="aboutus.php" class="hover:underline">About Us</a></li>
            <li><a href="contactus.php" class="hover:underline">Contact Us</a></li>
            <li><a href="#" class="hover:underline">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline">Terms of Service</a></li>
        </ul>
    </div>
</footer>

</body>
</html>