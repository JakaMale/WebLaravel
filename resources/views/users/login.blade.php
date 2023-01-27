<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4  bg-gray-700  p-6">
            <ul class="flex space-x-6 mr-6 text-lg text-white">
                <li>
                    <a href="/" class="hover:text-sky-400"
                        ><i class="fa-solid fa-house"></i>
                        </a>
                </li>
                <li>
                    <a href="/register" class="hover:text-sky-800"><i class="fa-solid fa-user-plus "></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-sky-800"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
                </li>
            </ul>
        </nav>
    <main>
    @yield('content')
    <div
    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Register
        </h2>
    </header>

    <form method="POST" action="/users/authenticate">
        @csrf

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Email</label>
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"/>
            @error('email')
                <p class="text-red-500 text-xs">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2">
                Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"/>


            @error('password')
            <p class="text-red-500 text-xs">{{$message}}</p>
        @enderror
        </div>


        <div class="mb-6">
            <button
                type="submit"
                class="bg-gray-900 text-white rounded py-2 px-4 hover:bg-sky-400">
                Sign In
            </button>
        </div>

        <div class="mt-10">
            <p>
                Don't have an account?
                <a href="/register" class="text-red-800 "
                    >register</a>
            </p>
        </div>
    </form>
</div>
    </main>

<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-gray-700 text-white h-24 mt-24 opacity-80 md:justify-center">
    <p class="ml-2">Made in SLO</p>

</footer>
</body>
</html>
