<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Laraplus' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full" dir="rtl">

    <div class="min-h-full">

        @include('layouts._nav')

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $title ?></h1>
            </div>
        </header>


        @yield('content')


    </div>

</body>

</html>
