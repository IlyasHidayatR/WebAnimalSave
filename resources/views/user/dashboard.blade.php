@extends('layouts.user')
@section('content')
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
            <br>
            <!-- Card for Popular Adoption -->
            <h1 class="text-2xl font-semibold text-gray-900 mb-4">Popular Adoption</h1>
            <div class="p-4 rounded-lg mt-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                    <div class="bg-gray-100 rounded-lg shadow-md p-4">
                        <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1533729784815-5a810fda9660" alt="Dog">
                        <div class="pt-4">
                            <h3 class="text-gray-700 text-lg font-bold">Max</h3>
                            <p class="text-gray-600 max-desc">Dog - Male - 2 years old</p>
                            <!-- Button for Adoption with style rounded, primary color and shodow-->
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-2 px-4 rounded-full shadow-lg">Adopt</button>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-lg shadow-md p-4">
                        <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1557474784-4d210dbfe604" alt="Cat">
                        <div class="pt-4">
                            <h3 class="text-gray-700 text-lg font-bold">Whiskers</h3>
                            <p class="text-gray-600 max-desc">Cat - Female - 1 year old</p>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-2 px-4 rounded-full shadow-lg">Adopt</button>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-lg shadow-md p-4">
                        <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1600861043644-d98af16c984e" alt="Rabbit">
                        <div class="pt-4">
                            <h3 class="text-gray-700 text-lg font-bold">Benny</h3>
                            <p class="text-gray-600 max-desc">Rabbit - Male - 6 months old</p>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-2 px-4 rounded-full shadow-lg">Adopt</button>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-lg shadow-md p-4">
                        <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1591761199313-f9461f4d4e4d" alt="Fish">
                        <div class="pt-4">
                            <h3 class="text-gray-700 text-lg font-bold">Nemo</h3>
                            <p class="text-gray-600 max-desc">Fish - Male - 1 year old</p>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-2 px-4 rounded-full shadow-lg">Adopt</button>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-lg shadow-md p-4">
                        <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1573871123051-79570a6a4a6e" alt="Guinea Pig">
                        <div class="pt-4">
                            <h3 class="text-gray-700 text-lg font-bold">Piggles</h3>
                            <p class="text-gray-600 max-desc">Guinea Pig - Male - 1 year old</p>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-2 px-4 rounded-full shadow-lg">Adopt</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection