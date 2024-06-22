<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Portal Site</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-black text-white  font-hanken-grotesk">
    <div>
        <nav class=" flex justify-between p-3 ">
            <div>
                <img src="{{ Vite::asset('resources/image/logo.svg') }}" alt="">
            </div>
            <div class=" space-x-4 font-bold">
                <a href="/">Jobs</a>
                <a href="/">Carrer</a>
                <a href="/">Salaries</a>
                <a href="/">Companies</a>
            </div>
            @auth
                <div>
                    <a href="" class=" hover:text-blue-400 transition-all duration-300">Post a job </a>
                <a href="/logout">
                    <x-forms.button class=" ms-4 bg-red-700 hover:bg-red-900 transition-all duration-300 ">
                        Log Out
                    </x-forms.button>
                </a>
                </div>
            @endauth
            @guest
            <div class=" mr-2"> <a href="/register">Register</a>
                <a href="/login">Log In</a>
            </div>
            @endguest
        </nav>
    </div>

    <main class=" max-w-[1000px] mx-auto mb-10">
        {{ $slot }}
    </main>
</body>

</html>
