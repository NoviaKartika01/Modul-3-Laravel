<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>
        {{-- nanti isi ini buat web cloning --}}
        <div class="list-group mt-4">
            <a href="{{url('/cloning')}}" class="list-group-item list-group-item-action bg-body-tertiary">
            Tugas (Bootstrap Clone)
        </a>
        </div>

        <div class="list-group list-group-numbered mt-4">
            {{-- Kode anda selanjutnya letakkan di sini --}}

            {{-- code point 4.1 praktik basic routing (menu 1) --}}
            <a href="{{ url('/basic_routing') }}" class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>

            {{-- code point 4.2 praktik view route (menu 2) --}}
            <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
                View Route
            </a>

            {{-- code point 4.3 praktik controller route --}}
            <a href="{{ url('/controller_route') }}" class="list-group-item list-group-item-action">
                Controller Route
            </a>

            {{-- code point 4.4 praktik redirect route --}}
            <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                Redirect Route
            </a>

            {{-- code point 4.5 praktik route parameter (required parameter) --}}
            <a href="{{ url('/user/12345') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1
            </a>
            <a href="{{ url('/posts/01/comments/20') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 2
            </a>

            {{-- code point 4.6 praktik route parameter (optional parameter) --}}
            <a href="{{ url('/username') }}" class="list-group-item list-group-item-action">
                Route Parameter (Optional Parameter)
            </a>

            {{-- code point 4.7 praktik route with regular expression constraints --}}
            <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item list-group-item-action">
                Route With Regular Expression Constraints
            </a>

            {{-- code 4.8 praktik named route --}}
            <a href="{{ route('profileRouteName', ['profileId' => '123']) }}" class="list-group-item list-group-item-action">
                Named Route
            </a>

            {{-- code 4.9 route priorty --}}
            <a href="{{ url('/route_priority/user') }}" class="list-group-item list-group-item-action">
                Route Priority
            </a>

            {{-- code 4.10 praktik fallback routes --}}
            <a href="{{ url('/asdqwezxc') }}" class="list-group-item list-group-item-action">
                Fallback Routes
            </a>
        </div>

        {{-- Khusus kode program untuk Route Groups di sini --}}
        {{-- code 4.11 Praktik Route Groups (Route Prefixes & Route Name Prefixes) --}}
        <h6 class="mt-4">Route Groups (Route Prefixes & Route Name Prefixes)</h6>
        <div class="list-group list-group-numbered mt-4">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                Admin Dashboard
            </a>
            <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action">
                Admin Users
            </a>
            <a href="{{ route('admin.items') }}" class="list-group-item list-group-item-action">
                Admin Items
            </a>
        </div>

        <h6 class="mt-4">View Route List</h6>
        <div class="list-group mt-2">
            <a href="#" class="list-group-item list-group-item-action text-danger bg-light">
                php artisan route:list
        </a>
        </div>

        <h6 class="mt-4">Route Caching</h6>
        <div class="list-group mt-2">
            <a href="#" class="list-group-item list-group-item-action text-danger bg-light">
                php artisan route:cache
            </a>
        </div>
        <div class="list-group mt-2">
            <a href="#" class="list-group-item list-group-item-action text-danger bg-light">
                php artisan route:clear
            </a>
        </div>

    </div>
    @vite('resources/js/app.js')
</body>
</html>
