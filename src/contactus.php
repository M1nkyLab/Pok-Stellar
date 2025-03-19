<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PokéStellar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-red-600 p-4 text-white rounded-full m-4 w-[90%] max-w-[1400px] h-[60px] mx-auto fixed top-0 left-0 right-0 z-50 shadow-lg flex items-center justify-between px-6">
        <h1 class="text-2xl font-bold">
            <a href="index.php">PokéStellar</a>
        </h1>
        <ul class="flex space-x-8 items-center">
            <li><a href="index.php" class="hover:underline">Home</a></li>
            <li><a href="product.php" class="hover:underline">Products</a></li>
            <li><a href="aboutus.php" class="hover:underline">About Us</a></li>
        </ul>
        <img src="images/profile.jpg" alt="Profile" class="w-10 h-10 rounded-full border-2 border-white">
    </nav>
    
    <!-- Spacer to prevent content from being hidden under navbar -->
    <div class="h-24"></div>
    
    <!-- Contact Us Section -->
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10">
        <h1 class="text-4xl font-bold text-center text-red-600 mb-6">Contact Us</h1>
        
        <p class="text-gray-600 text-center mb-6">Have any questions? Feel free to reach out to us!</p>
        
        <form class="space-y-4">
            <div>
                <label class="block text-gray-700 font-semibold">Name</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Enter your name" required>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Email</label>
                <input type="email" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Enter your email" required>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Message</label>
                <textarea class="w-full p-2 border border-gray-300 rounded-lg" rows="5" placeholder="Write your message here..." required></textarea>
            </div>
            <button type="submit" class="w-full bg-red-600 text-white p-3 rounded-lg hover:bg-red-700 transition duration-300">Send Message</button>
        </form>
    </div>
    
    <!-- Footer -->
    <footer class="bg-[#c21818] text-white w-full p-4 mt-6 text-center">
        <p>&copy; 2025 PokéStellar. Crafted with 💜 by Haziqq.</p>
        <ul class="flex justify-center space-x-4 mt-2">
            <li><a href="aboutus.php" class="hover:underline">About Us</a></li>
            <li><a href="#" class="hover:underline">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline">Terms of Service</a></li>
        </ul>
    </footer>
</body>
</html>