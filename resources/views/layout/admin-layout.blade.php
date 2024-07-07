<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>

    {{-- font inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- remix icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    @vite('resources/css/app.css')
    <title>Admin Dashboard</title>
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100" style="font-family: poppins">
    <div class="flex relative">
        <!-- Sidebar -->
        @include('partials.admin-sidebar')

        <!-- Main content -->
        <div class="flex-1 flex flex-col min-h-screen">
            <!-- Header -->
            @include('partials.admin-header')

            <!-- Content -->
            <main class="flex-1 p-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
<script src="./js/admin.js"></script>

</html>
