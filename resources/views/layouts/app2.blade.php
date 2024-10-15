<html>
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.tailwindcss.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FIRSTCYCLING</title>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <div class="navbar bg-white fixed inset-x-0 top-0 z-30 shadow-lg backdrop-blur-lg">
        <div class="flex-1">
            <a href="/riders" class="btn btn-ghost normal-case text-xl">
                <i class="fa-solid fa-person-biking mr-2"></i> FIRSTCYCLING
            </a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 space-x-4">
                <li><a href="/riders" class="text-gray-700 hover:text-blue-600">Cyklisti</a></li>
                <li><a href="/race" class="text-gray-700 hover:text-blue-600">Závody</a></li>
                @auth
                <li><a href="/dashboard-create" class="text-gray-700 hover:text-blue-600">Přidávání Závodů</a></li>
                @endauth
                <li><a href="/download-pdf" class="text-gray-700 hover:text-blue-600">PDF na stáhnutí</a></li>
                @guest
                <li>
                    <a href="/login" class="btn btn-primary">
                        Přihlášení
                    </a>
                </li>
                @endguest
                @auth
                <li>
                    <a href="/dashboard" class="btn btn-primary">
                        Dashboard
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</header>

<div class="mt-20"></div>

@vite('resources/js/app.js')
@vite('resources/css/app.css')
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.tailwindcss.js"></script>
<script src="https://cdn.tailwindcss.com/3.4.5"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>
</html>
@yield('content')
