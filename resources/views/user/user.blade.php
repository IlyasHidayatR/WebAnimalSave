<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard User</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css">
        <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script> -->
    </head>
    <body class="bg-gray-200">
        <!-- Navbar -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-4">
                        <a href="#" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                            <i class="fas fa-home"></i>
                            <span class="font-medium">Beranda</span>
                        </a>
                        <a href="#" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                            <i class="fas fa-paw"></i>
                            <span class="font-medium">Adopsi Hewan</span>
                        </a>
                        <a href="#" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                            <i class="fas fa-donate"></i>
                            <span class="font-medium">Donasi</span>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">
                            <i class="fas fa-bell"></i>
                        </a>
                        <div class="relative">
                            <button class="relative z-10 w-10 h-10 rounded-full overflow-hidden focus:outline-none focus:shadow-outline-purple" aria-label="Account" aria-haspopup="true">
                                <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/12.jpg" alt="Your avatar">
                            </button>
                            <div class="fixed inset-0 z-10 bg-black opacity-50" hidden></div>
                            <div class="absolute right-0 z-20 w-48 mt-2 py-2 bg-white rounded-md shadow-xl" hidden>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <h1 class="text-2xl font-semibold text-gray-900 mb-4">Dashboard User</h1>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-purple-500 rounded-md p-3">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 truncate">
                                            Profil Saya
                                        </dt>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <a href="#" class="text-sm font-medium text-purple-600 hover:text-purple-500">Lihat detail</a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                                    <i class="fas fa-paw text-white"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 truncate">
                                            Adopsi Hewan
                                        </dt>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <a href="#" class="text-sm font-medium text-purple-600 hover:text-purple-500">Lihat detail</a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 truncate">
                                            Donasi
                                        </dt>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <a href="#" class="text-sm font-medium text-purple-600 hover:text-purple-500">Lihat detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">LinkedIn</span>
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    </body>
</html>
