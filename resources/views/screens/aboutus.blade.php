<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CODETATIO</title>
    @vite('resources/css/app.css') <!-- AQUI ATIVA O TAILWIND CSS AO PROJETO. -->
</head>
<body class="bg-slate-200">
    <header class="flex flex-row bg-gradient-to-r from-blue-900 to-emerald-400 py-6">
        <h1 class="bg-gradient-to-br from-blue-300 to-blue-500 text-transparent bg-clip-text font-mono 
        text-2xl font-bold pl-3
        hover:from-cyan-300 hover:via-cyan-300 hover:to-cyan-300"><a href="/home">CODETATIO</a></h1>
        <div class="ml-5">
            <button class="rounded-md p-1 font-mono mr-3">
                <p class="bg-gradient-to-r from-cyan-300 via-cyan-300 to-cyan-300 text-transparent bg-clip-text
                ">Sobre Nós</p>
            </button>
            <button class="rounded-md p-1 font-mono">
                <a class="bg-gradient-to-r from-sky-400 via-cyan-400 to-sky-400 text-transparent bg-clip-text
                hover:from-cyan-300 hover:via-cyan-300 hover:to-cyan-300" 
                href="/contact">Contato</a>
            </button>
        </div>
        <div class="absolute right-0 pr-3">
            <Button class="bg-white rounded-md p-1 font-mono"> <a href="/register">Cadastrar</a> </Button>
            <Button class="bg-white rounded-md p-1 font-mono"> <a href="/login">Logar</a> </Button>
        </div>
    </header>
    
    <main class="mx-3 my-3 py-3 bg-gradient-to-r from-blue-900 via-cyan-600 to-blue-900 rounded-2xl text-white">
        <h1 class="text-center text-2xl border-solid border-b-4 mx-32 font-bold rounded-md">
            Somos a equipe de desenvolvimento <span class="text-cyan-300 font-mono">Codetatio</span>
        </h1>

        <p class="my-2 px-9 pt-3 text-lg">
            "Formada por 6 integrantes, a Codetatio busca trazer soluções tecnológicas para mundo. Abstraindo da nossa realidade tudo aquilo que precisa de uma solução, 
            seja atráves de problemas contidianos ou até mesmo uma busca aprofundada no mercado de tecnologia." - Jonathan Dias
        </p>

        <div class="text-center my-5">

            <h1 class="font-bold text-3xl border-b-4 mx-32 rounded-md">Integrantes</h1>
            <div class="grid grid-cols-2 gap-3 mx-10 mt-3">
                
                <div class="bg-sky-800 border-2 border-sky-600 rounded-md">
                    <h1 class="font-bold text-2xl text-sky-200">Front-End</h1>

                    <div class="border border-sky-400 mx-4 my-3 p-3 bg-sky-600">
                        <h1 class="text-xl font-mono mb-1">- Mayke Souza -</h1>
                        <div class="flex flex-row">
                        <img src="riff.jpg" alt="" height="auto" width="30%" class="rounded-3xl">
                        <p class="mx-3 text-left">Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text.
                        </p>
                        </div>
                    </div>
                    
                    <div class="border border-sky-400 mx-4 my-3 p-3 bg-sky-600">
                        <h1 class="text-xl font-mono mb-1">- Luís Fellipe -</h1>
                        <div class="flex flex-row">
                        <img src="riff.jpg" alt="" height="auto" width="30%" class="rounded-3xl">
                        <p class="mx-3 text-left">Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text.
                        </p>
                        </div>
                    </div>
                    
                    <div class="border border-sky-400 mx-4 my-3 p-3 bg-sky-600">
                        <h1 class="text-xl font-mono mb-1">- Igor Rocha -</h1>
                        <div class="flex flex-row">
                        <img src="riff.jpg" alt="" height="auto" width="30%" class="rounded-3xl">
                        <p class="mx-3 text-left">Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text.
                        </p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-red-800 border-2 border-red-600 rounded-md">
                    <h1 class="font-bold text-2xl text-red-200">Back-End</h1>

                    <div class="border border-red-400 mx-4 my-3 p-3 bg-red-700">
                        <h1 class="text-xl font-mono mb-1">- Jhonas Rodrigues -</h1>
                        <div class="flex flex-row">
                        <p class="mx-3 text-left">Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text.
                        </p>
                        <img src="riff.jpg" alt="" height="auto" width="30%" class="rounded-3xl">
                        </div>
                    </div>
                        
                    <div class="border border-red-400 mx-4 my-3 p-3 bg-red-700">
                        <h1 class="text-xl font-mono mb-1">- Jonathan Dias -</h1>
                        <div class="flex flex-row">
                        <p class="mx-3 text-left">Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text.
                        </p>
                        <img src="riff.jpg" alt="" height="auto" width="30%" class="rounded-3xl">
                        </div>
                    </div>

                    <div class="border border-red-400 mx-4 my-3 p-3 bg-red-700">
                        <h1 class="text-xl font-mono mb-1">- João Victor -</h1>
                        <div class="flex flex-row">
                        <p class="mx-3 text-left">Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text Bottom text
                            Bottom text.
                        </p>
                        <img src="riff.jpg" alt="" height="auto" width="30%" class="rounded-3xl">
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        </main>
    </body>
</html>
