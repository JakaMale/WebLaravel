<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/phone_pic.png" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Phone Book </title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between bg-gray-700 items-center p-6">

            <ul class="flex space-x-6 mr-6 text-lg text-white">
                <li>
                    <a href="/" class="hover:text-sky-400"><i class="fa-solid fa-house"></i></a>
                </li>
                @auth

                <li>
                    <span class="font-bold fa-white fa fa-user">
                        {{auth()->user()->name}}
                    </span>
                </li>

                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid  fa-white fa-door-closed">logout</i>
                        </button>
                    </form>
                </li>
                @else
                <li >
                    <a href="/register" class="hover:text-sky-700  fa-white"
                        ><i class="fa-solid fa-user-plus  fa-white"></i> Register</a
                    >
                </li>
                <li>
                    <a href="/login" class="hover:text-sky-700">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
                </li>
                @endauth
            </ul>
        </nav>
    <main class="d:justify-center">
        
    @yield('content')
    </main>

<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-gray-700 text-white h-16 mt-16 opacity-90 md:justify-center">
    <p class="ml-2">Made in SLO</p>
    <button onclick="topFunction()" id="myBtn" title="Go to top"
    class="hidden bg-blue-900 right-30 bottom-20 fixed p-3 rounded">Top</button>
    <script>
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>

</footer>
</body>
</html>
