<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ...existing code... -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex flex-col">
        <!-- Hero Section -->
        <header class="bg-blue-600 text-white">
            <div class="container mx-auto px-4 py-16 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Welkom bij de BPV Site</h1>
                <p class="text-lg md:text-xl mb-6">
                    Samenwerken tussen studenten, docenten en bedrijven voor een betere toekomst.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="#learn-more" class="bg-white text-blue-600 px-6 py-3 rounded-lg shadow hover:bg-gray-100">
                        Meer leren
                    </a>
                    <a href="#contact" class="bg-blue-800 px-6 py-3 rounded-lg shadow hover:bg-blue-700">
                        Neem contact op
                    </a>
                </div>
            </div>
        </header>
       {{ $slot }}
    </div>
</body>
</html>
