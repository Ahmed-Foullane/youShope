<x-sidebare-admin>
    <main class="p-8 bg-gray-100 min-h-screen">
        <h1 class="text-4xl font-semibold text-gray-800">Dashboard</h1>

        <div class="mt-6">
{{--            @if (session('success'))--}}
{{--                <div class="bg-green-500 text-white p-4 rounded-lg flex justify-between items-center shadow-md">--}}
{{--                    <span>{{ session('success') }}</span>--}}
{{--                    <button class="text-xl font-bold" onclick="this.parentElement.style.display='none'">&times;</button>--}}
{{--                </div>--}}
{{--            @endif--}}
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mt-8">
            <h2 class="text-2xl font-semibold text-gray-700">All Categories</h2>
            <div class="overflow-x-auto mt-4">
                <table class="w-full border-collapse text-left shadow-sm">
                    <thead>
                    <tr class="bg-purple-600 text-white text-sm uppercase">
                        <th class="p-3">ID</th>
                        <th class="p-3">Category Name</th>
                        <th class="p-3 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr class="border-b hover:bg-gray-200 transition">
                            <td class="p-3">{{$category["id"]}}</td>
                            <td class="p-3 font-medium text-gray-800">{{$category["name"]}}</td>
                            <td class="p-3 text-center">
                                <a href="{{url('admin/category/'.$category['id'].'/edit')}}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                |
                                <a href="{{url('admin/category/'.$category['id'].'/delete')}}" class="text-red-500 hover:text-red-700">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-sidebare-admin>
