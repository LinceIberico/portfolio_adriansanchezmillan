<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Adrián Sánchez Millán">
    <meta name="copyright" content="© 2022 Portfolio Adrián Sánchez Millán">
    <title>Portfolio AS Millán</title>

    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
</head>

<body class="mx-auto bg-slate-300 font-mono tracking-tight">
    <header class="flex flex-wrap justify-between py-8">
        <nav class="flex flex-wrap w-full items-center justify-between ">
            
            <h1 class="flex text-4xl text-left text-zinc-700 p-4 px-8 cursor-default">Portfolio Personal</h1>
                <ul class="flex px-8">
                    <li class="mr-2">
                        <a class="text-center p-2 rounded-lg border-2 border-stone-900 bg-stone-400 text-zinc-900 shadow-lg shadow-stone-500/70 hover:shadow-lg hover:shadow-emerald-500/50 hover:ring-2 ring-emerald-500 hover:bg-emerald-300 " href="#">Descárgate mi CV</a>
                    </li>                                        
                </ul>
            
        </nav>
    </header>
    <main class="grid lg:grid-cols-2 sm:grid-cols-1 gap-6 mx-auto h-screen w-10/12">
        <div class="w-full" data-aos="fade-right" data-aos-duration="1500">
            <h1 class="text-7xl text-left text-zinc-700">Adrián</h1>
            <h1 class="text-7xl text-left text-zinc-700">Sánchez Millán</h1>
        </div>
            
        <div class="w-full" data-aos="fade-left" data-aos-duration="1500">
            <p class="text-xl text-cyan-900 py-2">Estudié Desarrollo de Aplicaciones Web, he tocado Laravel 8, React aunque poquito con ganas de meterle mano para aprender más de él y ahora me encuentro con el Big Data dado que no se le puede dejar pasar la oportunidad para seguir aprendiendo cada día. ^^</p>
            <p class="text-xl text-cyan-900 py-2">Polivalente, resolutivo, con ganas de trabajar, aprender y como no puede ser de otra manera... </p>
            <p class="text-xl text-cyan-900 py-2">¡mejorar cada día!.</p>            
        </div>

        <section class="w-full py-8 mx-auto col-span-1" data-aos="fade-up" data-aos-duration="1500">
            <h1 class="text-5xl text-left text-zinc-700">Experiencia Laboral</h1>
            <div class="py-4 px-4">
                <h3 class="text-2xl text-left text-zinc-700">2021</h3>
                <p class="text-xl text-cyan-900">Desarrollador de aplicaciones web en 10Code Software Design.</p>
                <p class="text-xl text-cyan-900">Realización de la FCT, funciones con Laravel 8 y React.</p>
            </div>
        </section>
        <section class="w-full py-8 mx-auto col-span-1" data-aos="fade-up" data-aos-duration="1500">
            <h1 class="text-5xl text-left text-zinc-700">Lenguajes de programación</h1>
            <div class="py-4 px-4">
                <h3 class="text-2xl text-left text-zinc-700">2021</h3>
                <p class="text-xl text-cyan-900">Desarrollador de aplicaciones web en 10Code Software Design.</p>
                <p class="text-xl text-cyan-900">Realización de la FCT, funciones con Laravel 8 y React.</p>
            </div>
        </section>
    


    </main>
    <!-- <footer class="w-full col-span-2 py-4 bg-slate-700">        
        <p class="text-lg text-center text-zinc-200 lg:py-8 sm:py-2">2022 © - Portfolio Adrián Sánchez Millán</p>        
    </footer> -->

    <script>        
        
    AOS.init();

    </script>
</body>

</html>
