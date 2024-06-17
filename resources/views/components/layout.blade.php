<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Portal Site</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" bg-black text-white ">
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
            <div>
                <a href="/">Post a Job</a>
            </div>
        </nav>
    </div>

    <main class=" max-w-[970px] mx-auto">
        {{ $slot }}
    </main>
</body>
</html>
