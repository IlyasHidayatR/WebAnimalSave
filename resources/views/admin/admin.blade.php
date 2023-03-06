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
        
        <!-- Main Content -->
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
                
                <!-- Main Content Area -->
                <div class="col-span-9">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-gray-700 text-xl font-bold mb-4">Adoption Overview</h2>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                                <h3 class="text-blue-500 font-bold text-lg mb-2">Total Adoptions</h3>
                                <p class="text-gray-700 text-xl font-bold">25</p>
                            </div>
                            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                                <h3 class="text-green-500 font-bold text-lg mb-2">Successful Adoptions</h3>
                                <p class="text-gray-700 text-xl font-bold">20</p>
                            </div>
                            <div class="bg-red-100 p-4 rounded-lg shadow-md">
                                <h3 class="text-red-500 font-bold text-lg mb-2">Failed Adoptions</h3>
                                <p class="text-gray-700 text-xl font-bold">5</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md mt-6">
                        <h2 class="text-gray-700 text-xl font-bold mb-4">Recently Adopted Pets</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                            <div class="bg-gray-100 rounded-lg shadow-md p-4">
                                <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1533729784815-5a810fda9660" alt="Dog">
                                <div class="pt-4">
                                    <h3 class="text-gray-700 text-lg font-bold">Max</h3>
                                    <p class="text-gray-600">Dog - Male - 2 years old</p>
                                    <p class="text-gray-600">Adopted on: Jan 12, 2023</p>
                                </div>
                            </div>
                            <div class="bg-gray-100 rounded-lg shadow-md p-4">
                                <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1557474784-4d210dbfe604" alt="Cat">
                                <div class="pt-4">
                                    <h3 class="text-gray-700 text-lg font-bold">Whiskers</h3>
                                    <p class="text-gray-600">Cat - Female - 1 year old</p>
                                    <p class="text-gray-600">Adopted on: Jan 10, 2023</p>
                                </div>
                            </div>
                            <div class="bg-gray-100 rounded-lg shadow-md p-4">
                                <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1600861043644-d98af16c984e" alt="Rabbit">
                                <div class="pt-4">
                                    <h3 class="text-gray-700 text-lg font-bold">Benny</h3>
                                    <p class="text-gray-600">Rabbit - Male - 6 months old</p>
                                    <p class="text-gray-600">Adopted on: Jan 9, 2023</p>
                                </div>
                            </div>
                            <div class="bg-gray-100 rounded-lg shadow-md p-4">
                                <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1591761199313-f9461f4d4e4d" alt="Fish">
                                <div class="pt-4">
                                    <h3 class="text-gray-700 text-lg font-bold">Nemo</h3>
                                    <p class="text-gray-600">Fish - Male - 1 year old</p>
                                    <p class="text-gray-600">Adopted on: Jan 8, 2023</p>
                                </div>
                            </div>
                            <div class="bg-gray-100 rounded-lg shadow-md p-4">
                                <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1573871123051-79570a6a4a6e" alt="Guinea Pig">
                                <div class="pt-4">
                                    <h3 class="text-gray-700 text-lg font-bold">Piggles</h3>
                                    <p class="text-gray-600">Guinea Pig - Male - 1 year old</p>
                                    <p class="text-gray-600">Adopted on: Jan 5, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
