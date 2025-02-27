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
        <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-md ">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Add New Product</h2>
            <form action="{{ url('admin/store-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-600">Product Name</label>
                        <input type="text" id="name" name="name" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{old("name")}}">
                        @error("name") 
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
                        <textarea id="description" name="description" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" rows="3">{{ old('description') }}</textarea>
                        @error("description") 
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="quantity" class="block text-sm font-medium text-gray-600">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{old("quantity")}}">
                        @error("quantity") 
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
    
                   
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-600">Price</label>
                        <input type="number" id="price" name="price" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500" value="{{old("price")}}">
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
    
                   
                    <div>
                        <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500">Add Product</button>
                    </div>
                </div>
            </form>
        </div>
    
    </div>
    
    </x-sidebare-admin>