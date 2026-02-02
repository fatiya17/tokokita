<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
    @if(session('success'))
        <x-alert :message="session('success')" />
    @endif

        <div class="mt-6 flex items-center justify-between">
            <h2 class="font-semibold text-xl">List Products</h2>
            <a href="{{ route('products.create') }}"><button class="bg-gray-100 px-10 py-2 rounded-lg hover:bg-gray-200 rounded-md text-gray-800 font-semibold">
                Add
            </button>
            </a>
        </div>

    <div class="grid grid-cols-1 md:grid-cols-3 mt-4 gap-6">
        @foreach($products as $product)
        <div>
            <img class="rounded-t-lg h-96 w-full" src="{{ url('storage/' . $product->foto) }}" alt="" />
            <div class="my-2">
                <p class="mb-2 text-2l font-light tracking-tight text-gray-900">{{ $product->nama }}</p>
                <p class="mb-3 font-normal text-gray-700">{{ $product->deskripsi }}</p>
                <p class="mb-3 font-semibold text-gray-400">Rp. {{ number_format($product->harga, 2) }}</p>
            </div>
            <a href="{{ route('products.edit', $product) }}"><button class="bg-gray-100 px-10 w-full py-2 rounded-lg hover:bg-gray-200 rounded-md text-gray-800 font-semibold">
                Edit
            </button>
            </a>
        </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
    </div>
</x-app-layout>