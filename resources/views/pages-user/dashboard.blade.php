@extends('layouts.topbar')

@section('content')
<!-- banner -->
<div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('<?= url("assets/user/images/banner.png") ?>');">
    <div class="container">
        <h1 class="text-6xl text-gray font-medium mb-4 capitalize">
            best collection for <br> home decoration
        </h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
            accusantium perspiciatis, sapiente
            magni eos dolorum ex quos dolores odio</p>
        <div class="mt-12">
            <a href="{{route('katalog_produk')}}" class="bg-red-600 border border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-red-400  hover:text-white">Beli Sekarang</a>
        </div>
    </div>
</div>
<!-- ./banner -->

<!-- categories -->
<div class="container py-16">
    <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Kategori Produk</h2>
    <div class="grid grid-cols-2 gap-3">
        <div class="relative rounded-sm overflow-hidden group">
            <img src="{{ url('assets/user/images/category/kategori6.jpg')}}" alt="category 1" class="w-full">
            <a href="#" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Makanan</a>
        </div>
        <div class="relative rounded-sm overflow-hidden group">
            <img src="{{ url('assets/user/images/category/kategori7.jpg')}}" alt="category 1" class="w-full">
            <a href="#" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Minuman</a>
        </div>
    </div>
</div>
<!-- ./categories -->

<!-- new arrival -->
<div class="container pb-16">
    <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Top Seller</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan1.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                    <a href="{{route('detail_produk',1)}}" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="{{route('favorit-create',1)}}" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer
                        Chair</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="{{route('pesanan-create',1)}}" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke Pesanan</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan2.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Bed
                        King Size</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan3.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                        Couple Sofa</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan4.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                        Mattrass X</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
    </div>
</div>
<!-- ./new arrival -->

<!-- ads -->
<div class="container pb-16">
    <a href="#">
        <img src="{{ url('assets/user/images/offer2.jpg')}}" alt="ads" class="w-full">
    </a>
</div>
<!-- ./ads -->

<!-- product -->
<div class="container pb-16">
    <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Rekomendasi Untuk Kamu</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan1.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer
                        Chair</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan2.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Bed
                        King Size</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan3.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                        Couple Sofa</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan4.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                        Mattrass X</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan5.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer
                        Chair</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan6.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Bed
                        King Size</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan7.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                        Couple Sofa</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
            <div class="relative">
                <img src="{{ url('assets/user/images/products/makanan8.jpeg')}}" alt="product 1" style="height: 170px; width: 100%;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">

                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product"><i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="pt-4 pb-3 px-4">
                <a href="#">
                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                        Mattrass X</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">Rp. 15.000</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
            </div>
            <a href="#" class="block w-full py-1 text-center text-white bg-red-600 border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah
                ke keranjang</a>
        </div>
    </div>
</div>
<!-- ./product -->
@endsection