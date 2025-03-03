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
        <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Add New Product</h2>
            <form action="{{ url('admin/store-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <!-- Product Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-600">Product Name</label>
                        <input type="text" id="name" name="name" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{ old('name') }}">
                        @error("name")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category Selection -->
                    <div>
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

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
                        <textarea id="description" name="description" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" rows="3">{{ old('description') }}</textarea>
                        @error("description")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Quantity -->
                    <div>
                        <label for="quantity" class="block text-sm font-medium text-gray-600">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{ old('quantity') }}">
                        @error("quantity")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price -->
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-600">Price</label>
                        <input type="number" id="price" name="price" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{ old('price') }}">
                        @error("price")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div class="col-span-2">
                        <label for="image" class="block text-sm font-medium text-gray-600">Product Image</label>
                        <input type="file" id="image" name="image" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500">
                        @error("image")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="col-span-2 mt-6">
                        <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500">Add Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-sidebare-admin>
