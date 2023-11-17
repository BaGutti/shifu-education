@extends('template')
@section('content')
<header id="header" class="z-20">
    <div>
        <p class="mb-2 text-sm leading-6 font-semibold text-indigo-500 dark:text-indigo-400">¡Hola!🖐</p>
        <div class="flex items-center">
            <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">¡Bienvenido a Shifu!</h1>
        </div>
    </div>
    <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">¡La herramienta que te ayuda ser el estudiante Dragón!🐉</p>
</header>
<div class="z-20 prose prose-slate mt-8 dark:prose-dark">
    
    <img class="max-w-full mb-10 h-auto bg-white dark:bg-gray-900" src="{!! asset('img/logoShifu-full-bg.png') !!}" alt="Shifu-logo full">    
    <ul class="grid gap-6 w-full md:grid-cols-2">
        <li>
            <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required>
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Para qué sirve esta herramienta?</strong></div>
                    <div class="w-full">La herramienta Shifu sirve como una plataforma en línea dedicada a ofrecer servicios de tutoría interactiva y personalizada para niños de primaria. Su propósito es proporcionar un ambiente educativo y amigable que facilite la conexión entre tutores y niños que necesitan apoyo en sus estudios. La plataforma permite a los niños mejorar sus habilidades académicas, a través de sesiones de tutoría adaptadas a sus necesidades individuales.</div>
                </div>                
            </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Cúal es la meta de este proyecto?</strong></div>
                    <div class="w-full">La meta principal de Shifu es <strong> mejorar el rendimiento académico de los niños de primaria al proporcionar acceso fácil a tutores especializados en línea.</strong> La plataforma busca crear un entorno de aprendizaje interactivo y atractivo que no solo aborde las necesidades académicas de los niños, sino que también fomente una actitud positiva hacia el aprendizaje.</div>
                </div>                
            </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Por qué nació esta herramienta?</strong></div>
                    <div class="w-full">Shifu nació para abordar la creciente necesidad de un servicio de tutoría en línea diseñado específicamente para niños de primaria. La herramienta se originó con la idea de proporcionar a los niños acceso a tutores calificados desde la comodidad de sus hogares, eliminando las barreras geográficas y brindando flexibilidad en los horarios de tutoría.</div>
                </div>                
                </label>
        </li>
    </ul>
    <header id="header" class="z-20">
        <div class="mt-10">
            <p class="mb-2 text-sm leading-6 font-semibold text-indigo-500 dark:text-indigo-400">¡Empieza ahora!</p>
            <div class="flex items-center">
                <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">¿Quieres empezar tu travesía con Shifu?👊</h1>
            </div>
        </div>
        <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">¡Haz click en el botón y empieza Forjar tu camino con nosotros!</p>
    </header>
    <div class="flex flex-col items-center">
        <a href="{{ url('/contact') }}" class="text-white bg-gradient-to-br from-indigo-700 to-blue-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:focus:ring-indigo-700 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mr-3 md:mr-0">¡Comunicate con nosotros YA!💪</a>
    </div>
</div>  
@endsection