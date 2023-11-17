@extends('template')
@section('content')
<header id="header" class="z-20">
    <div>
        <p class="mb-2 text-sm leading-6 font-semibold text-indigo-500 dark:text-indigo-400">¿Deseas contactarnos?☎</p>
        <div class="flex items-center">
            <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">¡Aquí estamos para ti!</h1>
        </div>
    </div>
    <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">¡Estos son nuestros medios de contacto!👋</p>
</header>
<div class="z-20 prose prose-slate mt-8 dark:prose-dark">
    
    <ul class="grid gap-6 w-full md:grid-cols-2">
        <li>
            <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required>
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>Teléfono 📞</strong></div>
                    <div class="w-full">Llámanos al <strong>+57 301-518-6647</strong> o <strong>+57 321-276-3665</strong> para hablar directamente con nuestro equipo. Estamos disponibles para atender tus consultas. 🫶</div>
                </div>                
            </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>Correo Electrónico ✉️</strong></div>
                    <div class="w-full">Envíanos un correo electrónico a <strong>shifu.contacto1@gmail.com</strong> y nuestro equipo de soporte estará encantado de ayudarte.</div>
                </div>                
            </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿No tienes tiempo para contactarnos vía teléfono?</strong></div>
                    <div class="w-full">¡No te preocupes! En shifu estamos siempre para ti. Puedes escribirnos por telegram whatsapp al <strong>+57 301-518-6647</strong> o <strong>+57 321-276-3665</strong></div>
                </div>                
                </label>
        </li>
    </ul>
</div>  
@endsection