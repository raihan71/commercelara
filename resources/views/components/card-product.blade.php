<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @foreach ($products as $product)
        <div class="bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden rounded-lg group">
            <div class="relative overflow-hidden">
                <span class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-semibold px-2 py-1 rounded">Diskon 20%</span>
                <img src="{{ asset('images/urban-jacket.jpeg') }}" alt="Product Image" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <a href="{{route('product.show', $product)}}" class="bg-white text-gray-900 px-4 py-2 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-gray-100">Lihat Detail</a>
                </div>
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-gray-900 mb-1">Urban Jacket</h3>
                <p class="text-gray-600 text-sm mb-2">Fashion</p>
                <div class="flex items-center mb-2">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star-half-alt text-yellow-400"></i>
                    <span class="text-gray-500 text-sm ml-1">(4.5)</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-blue-600">Rp150.000</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">+ Keranjang</button>
                </div>
            </div>
        </div>
    @endforeach
</div>