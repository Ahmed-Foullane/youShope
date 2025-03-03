<x-sidebare-admin>
    <div class="bg-gray-50 h-screen flex flex-col items-center justify-center">
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
        <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-md">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Edit Product</h2>
            <form action="{{ url('admin/update-product/'.$product['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-600">Product Name</label>
                        <input type="text" id="name" name="name" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{$product["name"]}}">
                        @error("name")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
                        <textarea id="description" name="description" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" rows="3">{{$product["description"]}}</textarea>
                        @error("description")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="quantity" class="block text-sm font-medium text-gray-600">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{$product["quantity"]}}">
                        @error("quantity")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-600">Price</label>
                        <input type="number" id="price" name="price" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{$product["price"]}}">
                        @error("price")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-600">Product Image</label>
                        <input type="file" id="image" name="image" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{old("image")}}">
                        @error("image")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category Dropdown -->
                    <label for="category" class="block text-sm font-medium text-gray-600">Select Category</label>
                    <select id="category" name="category" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500">
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error("category")
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                    <div>
                        <button type="submit" class="w-full mt-4 bg-green-600 text-white p-3 rounded-md hover:bg-green-700 focus:ring-2 focus:ring-green-500">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-sidebare-admin>
