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
        <h1 class="bg-gradient-to-br from-blue-300 to-blue-500 text-transparent bg-clip-text font-roboto 
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
    
    <main class="mx-3 my-3">
        <h1>Nós da Codetatio somos H A C K E R M A N S ! ! !</h1>
    </main>
</body>
</html>
