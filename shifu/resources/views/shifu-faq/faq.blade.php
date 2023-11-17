@extends('template')
@section('content')
<header id="header" class="z-20">
    <div>
        <p class="mb-2 text-sm leading-6 font-semibold text-indigo-500 dark:text-indigo-400">¡Bienvenido al FAQ!🙌</p>
        <div class="flex items-center">
            <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">¿Tienes alguna duda?</h1>
        </div>
    </div>
    <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">¡Tal vez aquí está la respuesta!🤝</p>
</header>
<div class="z-20 prose prose-slate mt-8 dark:prose-dark">
    
    <ul class="grid gap-6 w-full md:grid-cols-2">
        <li>
            <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required>
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Cómo funciona el proceso de selección de tutores en Shifu?</strong></div>
                    <div class="w-full">En Shifu, seleccionamos cuidadosamente a nuestros tutores en función de su experiencia académica, habilidades de enseñanza y capacidad para interactuar positivamente con los niños. Todos los tutores pasan por un riguroso proceso de evaluación antes de unirse a nuestro equipo.</div>
                </div>                
            </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Cuál es la edad recomendada para que los niños participen en Shifu?</strong></div>
                    <div class="w-full">Shifu está diseñado específicamente para <strong>niños de primaria, generalmente entre las edades de 6 y 12 años.</strong> Nuestros tutores adaptan las sesiones según la edad y nivel de cada niño para garantizar una experiencia de aprendizaje efectiva.</div>
                </div>                
            </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Cómo se asegura la seguridad de los estudiantes en las sesiones de tutoría en línea?</strong></div>
                    <div class="w-full">La seguridad de los estudiantes es nuestra principal prioridad. Todas las sesiones de tutoría se llevan a cabo en un entorno seguro y encriptado. Además, los tutores pasan por verificaciones de antecedentes y reciben capacitación en seguridad en línea.</div>
                </div>                
                </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Qué materias y temas cubre Shifu?</strong></div>
                    <div class="w-full">Shifu cubre una amplia gama de materias académicas, que incluyen matemáticas, ciencias, lengua y literatura, y más. También ofrecemos tutoría en habilidades socioemocionales. Consulta nuestra lista de materias en la plataforma para obtener detalles específicos.</div>
                </div>                
                </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Puedo programar sesiones de tutoría en horarios flexibles?</strong></div>
                    <div class="w-full">Sí, ofrecemos flexibilidad en la programación de sesiones de tutoría. Puedes elegir entre una variedad de horarios para adaptarse a la agenda de tu hijo. La flexibilidad es una de nuestras características clave para hacer la educación más accesible.</div>
                </div>                
                </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Cómo puedo ponerme en contacto con el servicio de atención al cliente de Shifu?</strong></div>
                    <div class="w-full">Puedes ponerte en contacto con nuestro equipo de soporte enviando un correo electrónico a shifu.contacto1@gmail.com o utilizando el servicio de contactanos en nuestra página web.</div>
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
        <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">¡Haz click en el botón y empieza a Forjar tu camino con nosotros!</p>
    </header>
    <div class="flex flex-col items-center">
        <a href="{{ url('/contact') }}" class="text-white bg-gradient-to-br from-indigo-700 to-blue-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:focus:ring-indigo-700 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mr-3 md:mr-0">¡Comunicate con nosotros YA!💪</a>
    </div>
</div>  
@endsection