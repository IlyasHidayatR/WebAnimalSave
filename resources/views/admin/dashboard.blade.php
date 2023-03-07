@extends('layouts.admin')
@section('content')              
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
                        <p class="text-gray-600 max-desc">Dog - Male - 2 years old</p>
                        <p class="text-gray-600 max-desc">Adopted on: Jan 12, 2023</p>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-md p-4">
                    <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1557474784-4d210dbfe604" alt="Cat">
                    <div class="pt-4">
                        <h3 class="text-gray-700 text-lg font-bold">Whiskers</h3>
                        <p class="text-gray-600 max-desc">Cat - Female - 1 year old</p>
                        <p class="text-gray-600 max-desc">Adopted on: Jan 10, 2023</p>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-md p-4">
                    <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1600861043644-d98af16c984e" alt="Rabbit">
                    <div class="pt-4">
                        <h3 class="text-gray-700 text-lg font-bold">Benny</h3>
                        <p class="text-gray-600 max-desc">Rabbit - Male - 6 months old</p>
                        <p class="text-gray-600 max-desc">Adopted on: Jan 9, 2023</p>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-md p-4">
                    <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1591761199313-f9461f4d4e4d" alt="Fish">
                    <div class="pt-4">
                        <h3 class="text-gray-700 text-lg font-bold">Nemo</h3>
                        <p class="text-gray-600 max-desc">Fish - Male - 1 year old</p>
                        <p class="text-gray-600 max-desc">Adopted on: Jan 8, 2023</p>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-md p-4">
                    <img class="h-40 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1573871123051-79570a6a4a6e" alt="Guinea Pig">
                    <div class="pt-4">
                        <h3 class="text-gray-700 text-lg font-bold">Piggles</h3>
                        <p class="text-gray-600 max-desc">Guinea Pig - Male - 1 year old</p>
                        <p class="text-gray-600 max-desc">Adopted on: Jan 5, 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
