<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adoption Dashboard</title>
        <!-- Import Tailwind CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="bg-blue-500 p-6 flex justify-between mb-6">
            <div class="flex items-center">
                <img class="h-8 w-8 mr-2" src="https://img.icons8.com/color/48/000000/paw.png" alt="Logo">
                <h1 class="text-white font-bold">Adoption Dashboard</h1>
            </div>
            <div class="flex items-center">
                <!-- Search box -->
                <input type="text" class="bg-white rounded-full border-2 border-gray-300 p-2 w-64 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Search">
                <!-- User Profile -->
                <div class="ml-4">
                    <button class="flex items-center text-white text-sm font-semibold focus:outline-none">
                        <img class="h-8 w-8 rounded-full mr-2" src="https://img.icons8.com/color/48/000000/paw.png" alt="Logo">
                        <span>John Doe</span>
                    </button>
                </div>
            </div>
        </nav>
        
        <!-- Menu Content -->
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-6">
                <!-- Sidebar -->
                <div class="col-span-3">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-gray-700 text-xl font-bold mb-4">Menu</h2>
                        <ul class="list-inside text-gray-600">
                        <li class="my-2"><a href="#" class="hover:text-blue-500">Dashboard</a></li>
                        <li class="my-2"><a href="#" class="hover:text-blue-500">Pets</a></li>
                        <li class="my-2"><a href="#" class="hover:text-blue-500">Adoptions</a></li>
                        <li class="my-2"><a href="#" class="hover:text-blue-500">Settings</a></li>
                        <li class="my-2"><a href="#" class="hover:text-blue-500">Logout</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->
                @yield('content')
            </div>
        </div>
    </body>
</html>
    