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
                <a class="bg-gradient-to-r from-cyan-400 via-sky-400 to-cyan-400 text-transparent bg-clip-text
                hover:from-cyan-300 hover:via-cyan-300 hover:to-cyan-300" 
                href="/aboutus">Sobre Nós</a>
            </button>
            <button class="rounded-md p-1 font-mono">
                <p class="bg-gradient-to-r from-sky-300 via-cyan-300 to-sky-300 text-transparent bg-clip-text" 
                >Contato</p>
            </button>
        </div>
        <div class="absolute right-0 pr-3">
            <Button class="bg-white rounded-md p-1 font-mono"> <a href="/register">Cadastrar</a> </Button>
            <Button class="bg-white rounded-md p-1 font-mono"> <a href="/login">Logar</a> </Button>
        </div>
    </header>    

    <main class="mx-3 my-3">
        <div class="bg-gradient-to-br from-blue-700 to-emerald-400 rounded-lg px-3 py-3">
            <h3 class="text-center text-white text-2xl font-bold
            border-b-4 mx-32 rounded">Encontre-nos nas nossas Redes Sociais</h3>
            
                <h1 class="text-white text-xl">Instagram:</h1>
                <a href="https://www.instagram.com/codetatio/"
                class="text-cyan-300 hover:text-emerald-200">https://www.instagram.com/codetatio/</a>
            
        </div>
    </main>
</body>
</html>
