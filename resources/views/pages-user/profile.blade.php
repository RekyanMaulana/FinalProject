@extends('layouts.topbar')

@section('content')

<!-- breadcrumb -->
<div class="container py-4 flex items-center gap-3">
    <span class="text-sm text-gray-400">
        <i class="fas fa-chevron-right"></i>
    </span>
    <p class="text-gray-600 font-medium">Profile</p>
</div>
<!-- ./breadcrumb -->

<!-- wrapper -->
<div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16">

    <!-- sidebar -->
    <div class="col-span-3">
        <div class="px-4 py-3 shadow flex items-center gap-4">
            <div class="flex-shrink-0">
                <img src="{{url('assets/user/images/avatar.png')}}" alt="profile" class="rounded-full w-14 h-14 border border-gray-200 p-1 object-cover">
            </div>
            <div class="flex-grow">
                <p class="text-gray-600">Hello,</p>
                <h4 class="text-gray-800 font-medium">John Doe</h4>
            </div>
        </div>

        <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600">
            <div class="space-y-1 pl-8">
                <a href="#" class="relative hover:text-red-600 block capitalize transition">
                    Manage account
                </a>
                <a href="#" class="relative hover:text-red-600 block capitalize transition">
                    Profile information
                </a>
                <a href="#" class="relative hover:text-red-600 block capitalize transition">
                    Manage addresses
                </a>
                <a href="#" class="relative hover:text-red-600 block capitalize transition">
                    Change password
                </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
                <a href="#" class="relative hover:text-red-600 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                        <i class="fas fa-archive"></i>
                    </span>
                    My order history
                </a>
                <a href="#" class="relative hover:text-red-600 block capitalize transition">
                    My Cancellations
                </a>
                <a href="#" class="relative hover:text-red-600 block capitalize transition">
                    My reviews
                </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
                <a href="#" class="relative text-red-600 font-medium block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                        <i class="fas fa-heart"></i>
                    </span>
                    My wishlist
                </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
                <a href="#" class="relative hover:text-red-600 block font-medium capitalize transition" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="absolute -left-8 top-0 text-base">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </div>
    </div>
    <!-- ./sidebar -->

    <!-- wishlist -->
    <div class="col-span-9 space-y-4">
        <div class="flex items-center justify-between border gap-6 p-4 border-gray-200 rounded">
            <div class="w-28">
                <img src="{{url('assets/user/images/products/makanan1.jpeg')}}" alt="product 6" style="height: 80px;" class="w-full">
            </div>
            <div class="w-1/3">
                <h2 class="text-gray-800 text-xl font-medium uppercase">Italian L shape</h2>
                <p class="text-gray-500 text-sm">Availability: <span class="text-green-600">In Stock</span></p>
            </div>
            <div class="text-primary text-lg font-semibold">Rp. 15.000</div>
            <a href="#" class="px-6 py-2 text-center text-sm text-white bg-red-600 border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">add
                to cart</a>

            <div class="text-gray-600 cursor-pointer hover:text-primary">
                <i class="fas fa-trash-alt"></i>
            </div>
        </div>

        <div class="flex items-center justify-between border gap-6 p-4 border-gray-200 rounded">
            <div class="w-28">
                <img src="{{url('assets/user/images/products/makanan2.jpeg')}}" alt="product 6" style="height: 80px;" class="w-full">
            </div>
            <div class="w-1/3">
                <h2 class="text-gray-800 text-xl font-medium uppercase">Dining Table</h2>
                <p class="text-gray-500 text-sm">Availability: <span class="text-green-600">In Stock</span></p>
            </div>
            <div class="text-primary text-lg font-semibold">Rp. 15.000</div>
            <a href="#" class="px-6 py-2 text-center text-sm text-white bg-red-600 border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">add
                to cart</a>

            <div class="text-gray-600 cursor-pointer hover:text-primary">
                <i class="fas fa-trash-alt"></i>
            </div>
        </div>

        <div class="flex items-center justify-between border gap-6 p-4 border-gray-200 rounded">
            <div class="w-28">
                <img src="{{url('assets/user/images/products/makanan3.jpeg')}}" alt="product 6" style="height: 80px;" class="w-full">
            </div>
            <div class="w-1/3">
                <h2 class="text-gray-800 text-xl font-medium uppercase">Sofa</h2>
                <p class="text-gray-500 text-sm">Availability: <span class="text-red-600">Out of Stock</span></p>
            </div>
            <div class="text-primary text-lg font-semibold">Rp. 15.000</div>
            <a href="#" class="cursor-not-allowed px-6 py-2 text-center texred-600 text-white bg-red-400 border border-red-400 rounded transition uppercase font-roboto font-medium">add
                to cart</a>

            <div class="text-gray-600 cursor-pointer hover:text-primary">
                <i class="fas fa-trash-alt"></i>
            </div>
        </div>
    </div>
    <!-- ./wishlist -->

</div>
<!-- ./wrapper -->
@endsection