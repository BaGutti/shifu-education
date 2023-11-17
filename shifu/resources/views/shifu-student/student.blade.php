@extends('template')
@section('content')
<header id="header" class="z-20">
    <div>
        <p class="mb-2 text-sm leading-6 font-semibold text-indigo-500 dark:text-indigo-400">¿Deseas contactarnos?☎</p>
        <div class="flex items-center">
            <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">¡Portal del Estudiante!</h1>
        </div>
    </div>
    <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">¡Descubre el Mundo del Aprendizaje Personalizado!👋</p>
</header>
<div class="z-20 prose prose-slate mt-8 dark:prose-dark">
    
    <ul class="grid gap-6 w-full md:grid-cols-2">
        <li>
            <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required>
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>Teléfono 📞</strong></div>
                    <div class="w-full">Bienvenido al Portal del Estudiante de Shifu, tu destino central para un aprendizaje personalizado y efectivo. Aquí encontrarás recursos educativos, seguimiento académico y un espacio interactivo para explorar el fascinante mundo del conocimiento. ¡Sumérgete y descubre todo lo que el Portal del Estudiante tiene para ofrecer!</div>
                </div>                
            </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>Materias de Tutoría</strong></div>
                    <div class="w-full">En Shifu, nos enorgullece ofrecer tutorías en una amplia gama de materias para adaptarnos a las necesidades específicas de cada estudiante. Ya sea que busques fortalecer tus habilidades en matemáticas, explorar el mundo de las ciencias o perfeccionar tu comprensión del lenguaje, estamos aquí para guiarte en tu viaje educativo.</div>
                </div>                
            </label>
        </li>
    </ul>
    <div class="z-20 prose prose-slate mt-8 dark:prose-dark">
        <img class="max-w-full mb-10 h-auto bg-white dark:bg-gray-900" src="{!! asset('img/logoShifu-full-bg.png') !!}" alt="Shifu-logo full">    
    </div>
    <header id="header" class="z-20">
        <div class="mt-10">
            <p class="mb-2 text-sm leading-6 font-semibold text-indigo-500 dark:text-indigo-400">¡Empieza ahora!</p>
            <div class="flex items-center">
                <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">¿Quieres empezar tu travesía con Shifu?👊</h1>
            </div>
        </div>
        <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">¡Haz click en el botón y empieza Forjar tu camino con nosotros!</p>
    </header>
    <div class="flex flex-col items-center z-20 mb-10">
        <a href="{{ url('/contact') }}" class="text-white bg-gradient-to-br from-indigo-700 to-blue-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:focus:ring-indigo-700 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mr-3 md:mr-0">¡Comunicate con nosotros YA!💪</a>
    </div>
</div>  
@endsection