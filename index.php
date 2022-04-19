<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Adrián Sánchez Millán">
    <meta name="copyright" content="© 2022 Portfolio Adrián Sánchez Millán">
    <title>Portfolio AS Millán</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/scrips.js"></script>

    
    
</head>

<body class="mx-auto bg-slate-300 font-mono tracking-tight">
    <!-- <div class="grid grid-cols-1"> -->

    <header class="flex flex-wrap justify-between py-8">
        <nav class="flex flex-wrap w-full items-center justify-between ">
            
            <h1 class="flex text-4xl text-left text-zinc-700 p-4 px-8 cursor-default">Portfolio Personal</h1>
                <ul class="flex px-8">
                    <li class="mr-2">
                        <a id="download_cv" href="donwload/CV_adrian.pdf" download="CV_Adrián Sánchez Millán" target="_blank" class="text-center p-2 rounded-lg border-2 border-stone-900 bg-stone-400 text-zinc-900 shadow-lg shadow-stone-500/70 hover:shadow-lg hover:shadow-emerald-500/50 hover:ring-2 ring-emerald-500 hover:bg-emerald-300 " href="#">Descárgate mi CV</a>                        
                    </li>                                        
                </ul>
            
        </nav>
    </header>

    <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-8">
            <div class="px-4" data-aos="fade-right" data-aos-duration="1500">
                <h1 class="text-7xl text-left text-zinc-700">Adrián</h1>
                <h1 class="text-7xl text-left text-zinc-700">Sánchez Millán</h1>
            </div>
            <div class="px-4" data-aos="fade-left" data-aos-duration="1500">
                <p class="text-xl text-cyan-900 py-2">Tras varios años trabajando en el mundo audiovisual donde adquirí y mejoré diversas competencias, como el trabajo en equipo, luchar por un objetivo común, e improvisar soluciones. Decidí dar otro paso y cambié de sector profesional formándome en desarrollo web, quedándome atrapado en el mundo digital.</p>
                <p class="text-xl text-cyan-900 py-2">Soy una persona proactiva y autodidacta, me encuentro desarrollando mi propia plataforma web destinada al sector servicios, a la misma vez que busco empleo activamente como desarrollador web.</p>
            </div>
            <div class="px-4" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="text-5xl text-left text-zinc-700">Experiencia Laboral</h1>
                <div class="py-4 px-4">
                    <h3 class="text-2xl text-left text-zinc-700">2022 - Actualidad</h3>
                    <p class="text-xl text-cyan-900 underline font-bold">Desarrollador de aplicaciones web - Profesional independiente.</p>
                    <p class="text-xl text-cyan-900">Actualmente desarrollando una plataforma web B2C para el sector servicios, implementando las herramientas Laravel y JavaScript principalmente con base de datos MySQL.</p>
                </div>
                <div class="py-4 px-4">
                    <h3 class="text-2xl text-left text-zinc-700">2021</h3>
                    <p class="text-xl text-cyan-900 underline font-bold">Desarrollador de aplicaciones web en 10Code Software Design.</p>
                    <p class="text-xl text-cyan-900">Realización de la FCT, funciones con Laravel 8 y React.</p>
                    <p class="text-xl text-cyan-900">Dos Hermanas, Sevilla.</p>
                </div>
            </div>
            <div class="px-4" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="text-5xl text-left text-zinc-700">Lenguajes que más uso</h1>
                <div class="py-4 px-4">                    
                    <canvas id="myChart" width="360" height="220"></canvas>       
                </div>
            </div>
        </div>                   
    </div>
    
    <footer class="bg-slate-700 mt-6">
        <div class="flex flex-wrap justify-around">
            <div class="text-zinc-200 lg:py-4 sm:py-6">
                <p class="text-2xl underline font-bold">Contacto</p>
                <p>Tlno: 665 37 94 11</p>
                <p>Email: asmillanwebdeveloper@gmail.com</p>
            </div>
            <div class="grid grid-cols-2 gap-6 py-6">
                    <a href="https://www.linkedin.com/in/adriansanchezmillan/">
                        <img src="donwload/qr-code_AdrianSanchezMillan.png" width="100px"/>
                    </a>
                    <a href="https://github.com/LinceIberico/">
                        <img src="donwload/qr-code_GitHub_AdrianSanchezMillan.png" width="100px"/>
                    </a>    
                </div>            
        </div>
        <div class="text-center lg:py-4 sm:py-6">
            <p class="text-lg text-zinc-200">2022 © - Portfolio Adrián Sánchez Millán</p>
        </div>
    </footer>

    <!-- <footer class="bg-slate-700 mt-6">
        <div class="flex">
            <div class="mx-auto text-lg text-left text-zinc-200 lg:py-4 sm:py-2">
                <p class="text-2xl underline font-bold">Contacto</p>
                <p>Tlno: 665 37 94 11</p>
                <p>Email: asmillanwebdeveloper@gmail.com</p>
            </div>
            <div class="mx-auto text-lg text-zinc-200 pt-4 lg:py-4 sm:py-2">
                <div class="flex flex-wrap justify-evenly">
                    <a href="https://www.linkedin.com/in/adriansanchezmillan/">
                        <img src="donwload/qr-code_AdrianSanchezMillan.png" width="100px"/>
                    </a>
                    <a href="https://github.com/LinceIberico/">
                        <img src="donwload/qr-code_GitHub_AdrianSanchezMillan.png" width="100px"/>
                    </a>    
                </div>            
            </div>
        </div>
            <p class="text-lg">2022 © - Portfolio Adrián Sánchez Millán</p>
    </footer> -->

    <!-- </div> -->
    <script>        
        
    AOS.init();

    </script>
</body>

</html>
