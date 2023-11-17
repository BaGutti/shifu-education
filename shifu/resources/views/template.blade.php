<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shifu</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/x-icon" href="{!! asset('img/logo-sm.ico') !!}">
        <style>
            body {
                background-image: url("{!! asset('img/shifu-bg-1.png') !!}")
            }
        </style>
    </head>
    <body class="text-slate-500 dark:text-slate-400 bg-indigo-100 dark:bg-gray-900">
        <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b-4 border-indigo-500 dark:border-indigo-400">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{!! asset('img/LogoShifu-small.png') !!}" class="mr-3 h-6 sm:h-9" alt="Shifu Logo">
                    <span class="self-center text-xl font-sans font-semibold whitespace-nowrap dark:text-white">Shifu</span>
                </a>
                <div class="flex md:order-2">
                    <a href="{{ url('/contact') }}" class="text-white bg-gradient-to-br from-indigo-700 to-blue-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:focus:ring-indigo-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">¡Empieza ya!</a>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ url('/') }}" class="block py-2 pr-4 pl-3 text-white bg-indigo-700 rounded md:bg-transparent md:text-indigo-700 md:p-0 dark:text-white" aria-current="page">Inicio</a>
                    </li>
                    <li>
                        <strong><a href="{{ url('/faq') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Preguntas frecuentes</a></strong>
                    </li>
                    <li>
                        <strong><a href="{{ url('/student') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Portal del estudiante</a></strong>
                    </li>
                    <li>
                        <strong><a href="{{ url('/contact') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contactanos</a></strong>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="max-w-8xl pt-20 mx-auto px-4 sm:px-6 md:px-8">
                <div class="xl:pl-[19.5rem]">
                    <div class="max-w-3xl mx-auto pt-10 p-20 m-10 xl:max-w-none xl:ml-0 xl:mr-[15.5rem] xl:pr-16 bg-white dark:bg-gray-900 rounded-lg">
                        @yield('content')
                        <footer class="text-sm leading-6 mt-12 bg-white dark:bg-gray-900">
                                <div class="pt-10 pb-28 border-t border-slate-200 sm:flex justify-between text-slate-500 dark:border-slate-200/5">
                                    <div class="mb-6 sm:mb-0 sm:flex">
                                        <p>Copyright © 2023 Brian Gutiérrez/Andrés Moros.</p>
                                        <p class="sm:ml-4 sm:pl-4 sm:border-l sm:border-slate-200 dark:sm:border-slate-200/5">
                                            <a class="hover:text-slate-900 dark:hover:text-slate-400" href="/brand">Trademark Policy</a>
                                        </p>
                                    </div>
                                    <a class="hover:text-slate-900 dark:hover:text-slate-400" href="https://github.com/tailwindlabs/tailwindcss.com/edit/master/src/pages/docs/margin.mdx">Codigo fuente en GitHub</a>
                                </div>
                        </footer>
                    </div>
                </div>
            </div>

        </main>
    </body>
</html>
