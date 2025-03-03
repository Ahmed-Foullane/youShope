<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UI/UX</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
      <aside>

         <div class="top">
           <div class="logo">
             <h2>C <span class="danger">BABAR</span> </h2>
           </div>
           <div class="close" id="close_btn">
            <span class="material-symbols-sharp">
              close
              </span>
           </div>
         </div>
         <!-- end top -->
          <div class="sidebar">


           <x-navLink href="/admin/users" :active="request()->is('admin/users')">
              <span class="material-symbols-sharp">person_outline </span>
              <h3>Users</h3>
           </x-navLink>
           <x-navLink href="/home" :active="request()->is('analytics')">
              <span class="material-symbols-sharp">insights </span>
              <h3>Analytics</h3>
           </x-navLink>
           <x-navLink href="/home" :active="request()->is('messages')">
              <span class="material-symbols-sharp">mail_outline </span>
              <h3>Messages</h3>
           </x-navLink>
           <x-navLink href="/admin/dashboard" :active="request()->is('admin/dashboard')">
              <span class="material-symbols-sharp">receipt_long </span>
              <h3>Products</h3>
           </x-navLink>
           <x-navLink href="/admin/categories" :active="request()->is('admin/categories')">
              <span class="material-symbols-sharp">report_gmailerrorred </span>
              <h3>Categories</h3>
           </x-navLink>
           <x-navLink href="/home" :active="request()->is('settings')">
              <span class="material-symbols-sharp">settings </span>
              <h3>settings</h3>
           </x-navLink>

           <x-navLink href="/admin/create-product" :active="request()->is('admin/create-product')">
              <span class="material-symbols-sharp">add </span>
              <h3>Add Product</h3>
           </x-navLink>
              <x-navLink href="/admin/create-category" :active="request()->is('admin/create-category')">
              <span class="material-symbols-sharp">add </span>
              <h3>Add Cateogry</h3>
           </x-navLink>

           <a href="{{route('logout')}}">
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                  <span class="material-symbols-sharp">logout </span>
                  <h3>logout</h3>
                </x-dropdown-link>
            </form>
           </a>



          </div>

      </aside>


      {{ $slot}}


   </div>
   <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
