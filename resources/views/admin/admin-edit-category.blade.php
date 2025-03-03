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
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Edit Category</h2>
            <form action="{{ url('admin/update-category/'.$category['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-600">Category Name</label>
                        <input type="text" id="name" name="name" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-purple-500" value="{{$category["name"]}}">
                        @error("name")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="w-full mt-4 bg-purple-600 text-white p-3 rounded-md hover:bg-purple-700 focus:ring-2 focus:ring-purple-500">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-sidebare-admin>
