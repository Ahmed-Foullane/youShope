<x-sidebare-admin>


    <main>

    
      <div  class="bg-gray-50  flex flex-col items-center justify-center">
        @if (session('success'))
        <div class="bg-green-400 text-white p-3 rounded-md flex items-center justify-between mb-4">
            <div class="flex items-center space-x-2">
                <h4 class="text-white">{{ session('success') }}</h4>
                {{-- <h4 class="text-white">deleted succesfuly</h4>   --}}
            </div>
            <button class="text-white text-[2em] border-[1px] hover:opacity-100 focus:outline-none ml-4 px-1" onclick="this.parentElement.style.display='none'">
                X
            </button>
        </div>
       @endif
     <!-- end insights -->
     <div class="p-6 bg-white shadow-xl rounded-xl border border-gray-200">
        <h2 class="text-3xl font-bold text-black mb-6">All Users</h2>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-left rounded-lg">
                <thead>
                    <tr class="bg-blue-500 text-white uppercase text-sm font-semibold">
                        <th class="p-4">User ID</th>
                        <th class="p-4">User Name</th>
                        <th class="p-4">User Email</th>
                        <th class="p-4">User Role</th>
                        <th class="p-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @if ($user["role"] !== "admin")
                        <tr class="border-b border-gray-300 hover:bg-blue-100 transition">
                            <td class="p-4 text-black">{{$user["id"]}}</td>
                            <td class="p-4 text-black">{{$user["name"]}}</td>
                            <td class="p-4 text-black">{{$user["email"]}}</td>
                            <td class="p-4 text-black">{{$user["role"]}}</td>
                            <td class="p-4 text-center">
                                <a href="{{url('admin/user/'.$user['id'].'/delete')}}" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    
    </main>
    
  <div class="right">

<div class="top">
 <button id="menu_bar">
   <span class="material-symbols-sharp">menu</span>
 </button>

 <div class="theme-toggler">
   <span class="material-symbols-sharp active">light_mode</span>
   <span class="material-symbols-sharp">dark_mode</span>
 </div>
  <div class="profile">
     <div class="info">
         <p><b></b></p>
         <p>Admin</p>
         <small class="text-muted"></small>
     </div>
     <div class="profile-photo">
       <img src="./images/profile-1.jpg" alt=""/>
     </div>
  </div>
</div>

</div> 
</div>
 </div>
</x-sidebare-admin>