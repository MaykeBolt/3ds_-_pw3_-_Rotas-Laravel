<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css') <!-- AQUI ATIVA O TAILWIND CSS AO PROJETO. -->
</head>
<body class="bg-slate-200">
    <header class="flex flex-row bg-gradient-to-r from-blue-900 to-cyan-600 py-6">
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
        <h1 class="text-center text-2xl border-solid border-b-4 mx-32 font-bold">
            Somos a equipe de desenvolvimento <span class="text-cyan-300">Codetatio</span>
        </h1>

        <p class="my-2 px-9 pt-3 text-lg">
            Formada por 6 integrantes, a Codetatio busca trazer soluções tecnológicas para mundo. Abstraindo da nossa realidade tudo aquilo que precisa de uma solução, 
            seja atráves de problemas contidianos ou até mesmo uma busca aprofundada no mercado de tecnologia. 
        </p>

        <p class="my-2 px-9 pt-3 text-lg" >
            A Boopeep é um exemplo do nosso propósito como equipe, uma plataforma capaz de ajudas as pessoas a encontrar objetos perdidos. 
            A principio a plataforma se encaixa no conceito de ser um software de aplicabilidade interna, ou seja, seu uso deverá ser dentro um determinado local, 
            no qual se compreender ser uma escola, instituição ou empresa.  
        </p>

        <div class="">

            <h1>Integrantes</h1>
            <div class="grid grid-cols-3 gap">
                <div>
                    <h1>Front-End</h1>
                    <img src="" alt="">
                    <h1>Mayke Souza</h1>
                    <p></p>
                    
                    <img src="" alt="">
                    <h1>Luís Felipe</h1>
                    <p></p>
                    
                    <img src="" alt="">
                    <h1>Igor Rocha</h1>
                    <p></p>
                </div>
                
                <div>
                    <h1>Back-End</h1>
                    <img src="" alt="">
                    <h1>Jonathan Dias</h1>
                    <p></p>
                    
                    <img src="" alt="">
                    <h1>João Victor</h1>
                    <p></p>
                    
                    <img src="" alt="">
                    <h1>Jhonas Rodrigues</h1>
                    <p></p>
                </div>
            </div>
        
        </div>
        </main>
    </body>
</html>
