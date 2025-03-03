<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <!-- FontAwesome for icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>

<header class="main-header">
    <nav class="main-nav">
        <div class="logo">
            <a href="#" class="logo-text">ShopHub</a>
        </div>

        <!-- Mobile menu toggle -->
        <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Navigation links -->
        <div class="nav-links" id="navLinks">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">Products</a>
            <a href="#" class="nav-link">Categories</a>
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">Contact</a>
        </div>

        <!-- Authentication/Cart buttons -->
        <div class="auth-buttons">
            <!-- Cart button (visible when logged in) -->
            @auth
                <a href="#" class="nav-link cart-badge">
                    <i class="fas fa-shopping-cart"></i>
                    <span>3</span>
                </a>

                <!-- User Profile Dropdown -->
                <div class="user-dropdown">
                    <button class="btn btn-outline">
                        <i class="fas fa-user"></i>
                        {{ Auth::user()->name }}

                        <span class="role-badge customer">Customer</span>

                    </button>

                    <div class="user-dropdown-content">

                        <a href="{{ url('/profile') }}" class="dropdown-item">
                            <i class="fas fa-user-circle"></i> My Profile
                        </a>


                        <a href="#" class="dropdown-item">
                            <i class="fas fa-shopping-bag"></i> My Orders
                        </a>

                        <a href="#" class="dropdown-item">
                            <i class="fas fa-heart"></i> Wishlist
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <!-- Login/Register buttons -->
                <a href="{{ route('login') }}" class="btn btn-outline">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                @endif
            @endauth
        </div>
    </nav>
</header>
{{ $slot}}
<style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}

    /* E-commerce Custom Styles */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8fafc;
        color: #333;
    }

    .brand-color {
        color: #ff6b6b;
    }

    .bg-brand {
        background-color: #ff6b6b;
    }

    /* Header Styles */
    .main-header {
        background-color: #ffffff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        position: sticky;
        top: 0;
        z-index: 100;
        padding: 0.75rem 0;
    }

    .logo-text {
        font-size: 1.75rem;
        font-weight: 700;
        color: #ff6b6b;
    }

    /* Navigation */
    .main-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1.5rem;
        max-width: 1280px;
        margin: 0 auto;
    }

    .nav-links {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    .nav-link {
        color: #4b5563;
        font-weight: 500;
        transition: color 0.2s ease;
        position: relative;
        padding: 0.5rem 0;
    }

    .nav-link:hover {
        color: #ff6b6b;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #ff6b6b;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    /* Auth Buttons */
    .auth-buttons {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .btn {
        padding: 0.5rem 1.25rem;
        border-radius: 0.375rem;
        font-weight: 500;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-outline {
        border: 1px solid #ff6b6b;
        color: #ff6b6b;
        background-color: transparent;
    }

    .btn-outline:hover {
        background-color: #ff6b6b;
        color: white;
    }

    .btn-primary {
        background-color: #ff6b6b;
        color: white;
        border: 1px solid #ff6b6b;
    }

    .btn-primary:hover {
        background-color: #ff5252;
        border-color: #ff5252;
    }

    /* Hero Section */
    .hero-section {
        background-color: #f3f4f6;
        padding: 4rem 1.5rem;
        text-align: center;
    }

    .hero-content {
        max-width: 800px;
        margin: 0 auto;
    }

    .hero-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1rem;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: #4b5563;
        margin-bottom: 2rem;
    }

    /* Featured Categories */
    .category-section {
        padding: 4rem 1.5rem;
    }

    .section-title {
        font-size: 1.75rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 2.5rem;
        color: #1f2937;
    }

    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        max-width: 1280px;
        margin: 0 auto;
    }

    .category-card {
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: white;
    }

    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    }

    .category-img {
        height: 180px;
        width: 100%;
        background-color: #f3f4f6;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #9ca3af;
        font-size: 1.5rem;
    }

    .category-info {
        padding: 1rem;
        text-align: center;
    }

    .category-name {
        font-weight: 600;
        font-size: 1.125rem;
        color: #1f2937;
        margin-bottom: 0.5rem;
    }

    .category-count {
        color: #6b7280;
        font-size: 0.875rem;
    }

    /* Featured Products */
    .products-section {
        padding: 4rem 1.5rem;
        background-color: #f9fafb;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
        max-width: 1280px;
        margin: 0 auto;
    }

    .product-card {
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: white;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    }

    .product-img {
        height: 200px;
        width: 100%;
        background-color: #f3f4f6;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #9ca3af;
        font-size: 1.5rem;
    }

    .product-info {
        padding: 1rem;
    }

    .product-name {
        font-weight: 600;
        font-size: 1.125rem;
        color: #1f2937;
        margin-bottom: 0.5rem;
    }

    .product-price {
        color: #ff6b6b;
        font-weight: 700;
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }

    .product-actions {
        display: flex;
        justify-content: space-between;
    }

    /* Footer */
    .main-footer {
        background-color: #1f2937;
        color: white;
        padding: 3rem 1.5rem;
    }

    .footer-content {
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .footer-section h3 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        color: #f9fafb;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 0.75rem;
    }

    .footer-links a {
        color: #d1d5db;
        transition: color 0.2s ease;
    }

    .footer-links a:hover {
        color: #ff6b6b;
    }

    .social-links {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
    }

    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        background-color: #374151;
        color: white;
        transition: background-color 0.2s ease;
    }

    .social-link:hover {
        background-color: #ff6b6b;
    }

    .copyright {
        text-align: center;
        padding-top: 2rem;
        margin-top: 2rem;
        border-top: 1px solid #374151;
        color: #9ca3af;
    }

    /* Responsive Menu */
    .menu-toggle {
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 2rem;
        height: 1.5rem;
        cursor: pointer;
    }

    .menu-toggle span {
        display: block;
        height: 2px;
        width: 100%;
        background-color: #4b5563;
        transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
        .menu-toggle {
            display: flex;
        }

        .nav-links {
            position: fixed;
            top: 60px;
            left: 0;
            width: 100%;
            flex-direction: column;
            background-color: white;
            padding: 1rem 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transform: translateY(-100%);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 50;
        }

        .nav-links.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }
    }

    /* Badge for cart item count */
    .cart-badge {
        position: relative;
        display: inline-flex;
    }

    .cart-badge span {
        position: absolute;
        top: -8px;
        right: -8px;
        background-color: #ff6b6b;
        color: white;
        font-size: 0.75rem;
        min-width: 1.25rem;
        height: 1.25rem;
        border-radius: 999px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 0.25rem;
    }

    /* User dropdown menu */
    .user-dropdown {
        position: relative;
    }

    .user-dropdown-content {
        position: absolute;
        top: 100%;
        right: 0;
        margin-top: 0.5rem;
        width: 200px;
        background-color: white;
        border-radius: 0.375rem;
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        padding: 0.5rem 0;
        z-index: 50;
        display: none;
    }

    .user-dropdown:hover .user-dropdown-content {
        display: block;
    }

    .dropdown-item {
        padding: 0.75rem 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #4b5563;
        transition: background-color 0.2s ease;
    }

    .dropdown-item:hover {
        background-color: #f3f4f6;
        color: #ff6b6b;
    }

    /* Role badge */
    .role-badge {
        display: inline-block;
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        border-radius: 999px;
        font-weight: 500;
        margin-left: 0.5rem;
    }

    .role-badge.admin {
        background-color: #3b82f6;
        color: white;
    }

    .role-badge.customer {
        background-color: #10b981;
        color: white;
    }
</style>
</body>
</html>
