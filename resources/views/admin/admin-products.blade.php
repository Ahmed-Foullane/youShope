<x-sidebare-admin>

    <main>
        <h1>Dashboard</h1>

        <div class="bg-gray-50 flex flex-col items-center justify-center">
            @if (session('success'))
                <div class="bg-green-400 text-white p-3 rounded-md flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <h4 class="text-white">{{ session('success') }}</h4>
                    </div>
                    <button class="text-white text-[2em] border-[1px] hover:opacity-100 focus:outline-none ml-4 px-1" onclick="this.parentElement.style.display='none'">
                        X
                    </button>
                </div>
            @endif

            <div class="p-6 bg-white shadow-xl rounded-xl border border-gray-200">
                <h2 class="text-3xl font-bold text-black mb-6">All products</h2>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse text-left rounded-lg">
                        <thead>
                        <tr class="bg-blue-500 text-white uppercase text-sm font-semibold">
                            <th class="p-4">Product ID</th>
                            <th class="p-4">Product Name</th>
                            <th class="p-4">Product Price</th>
                            <th class="p-4">Product Quantity</th>
                            <th class="p-4">Product Description</th>
                            <th class="p-4">Category</th> <!-- New column for category -->
                            <th class="p-4 text-center">Image</th>
                            <th class="p-4 text-center">Delete</th>
                            <th class="p-4 text-center">Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr class="border-b border-gray-300 hover:bg-blue-100 transition">
                                <td class="p-4 text-black">{{$product["id"]}}</td>
                                <td class="p-4 text-black">{{$product["name"]}}</td>
                                <td class="p-4 text-black">{{$product["price"]}}</td>
                                <td class="p-4 text-black">{{$product["quantity"]}}</td>
                                <td class="p-4 text-black">{{$product["description"]}}</td>
                                <td class="p-4 text-black">{{$product->category->name ?? 'No Category'}}</td> <!-- Display category name -->
                                <td class="p-4 text-black"><img src="{{$product["image"]}}" alt=""></td>
                                <td class="p-4 text-center">
                                    <a href="{{url('admin/product/'.$product['id'].'/delete')}}" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition">
                                        Delete
                                    </a>
                                </td>
                                <td class="p-4 text-center">
                                    <a href="{{url('admin/product/'.$product['id'].'/edit')}}" class="bg-green-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-600 transition">
                                        Update
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

    </main>

</x-sidebare-admin>
