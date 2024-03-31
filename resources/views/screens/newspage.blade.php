<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ETEC Zona Leste</title>
    @vite('resources/css/app.css') <!-- AQUI ATIVA O TAILWIND CSS AO PROJETO. -->
</head>
<body class="bg-cover bg-blend-color" style="background-image: url('etec/8115dc6b-d87e-4827-8788-99beab8ec8c6.jpeg'); background-color: rgba(8, 8, 8, 0.459)">
    <header class="flex flex-row bg-gradient-to-r from-red-100 via-yellow-50 to-blue-100 py-6 items-center">
        <h1 class="bg-gradient-to-br from-blue-300 to-blue-500 text-transparent bg-clip-text font-mono 
        text-2xl font-bold pl-3
        hover:from-red-600 hover:via-red-700 hover:to-red-800"><a href="/home">
            <img src="etec/logo-etec.png" alt="" class="w-20 h-auto">
        </a></h1>
        <div class="ml-5">
            <button class="rounded-md p-1 font-mono mr-3">
                <a class="hover:text-red-700 text-black" 
                href="/aboutus">Sobre Nós</a>
            </button>
            <button class="rounded-md p-1 font-mono mr-3">
                <a class="hover:text-red-700 text-black" 
                href="/contact">Contato</a>
            </button>
            <button class="rounded-md p-1 font-mono">
                <a class="hover:text-red-700 text-black" 
                href="/news">Noticias</a>
            </button>
        </div>
        <div class="absolute right-0 pr-3">
            <Button class="bg-gradient-to-r from-red-700 via-red-800 to-red-700 rounded-md p-1 font-mono
             hover:text-white text-black"> 
                <a href="/register">Cadastrar</a> </Button>
            <Button class="bg-gradient-to-r from-red-700 via-red-800 to-red-700
            rounded-md p-1 font-mono hover:text-white text-black"> 
                <a href="/login">Logar</a> </Button>
        </div>
    </header>

    <main>
        <h1 class="text-3xl mt-2 text-white font-bold font-mono text-center
        border-b-4 border-white mx-40 rounded"> NOTÍCIAS </h1>

        <div class="grid grid-cols-4 align-middle">
        <a href="" class="bg-blue-300 mx-2 my-4 pt-3 px-3 py-3 rounded-lg">
            <img src="placeholder.png" alt="" width="95%" height="auto" class="mx-auto my-2">
            <p class="text-base font-bold my-1">Texto que é um placeholder. Isso ainda não possui uma API para ter vários dados.</p>
            <p class="bg-blue-500 rounded-md mx-10 text-center font-bold text-white">Seu curso</p>
        </a>

        <a href="" class="bg-blue-300 mx-2 my-4 pt-3 px-3 py-3 rounded-lg">
            <img src="placeholder.png" alt="" width="95%" height="auto" class="mx-auto my-2">
            <p class="text-base font-bold my-1">Texto que é um placeholder. Isso ainda não possui uma API para ter vários dados.</p>
            <p class="bg-blue-500 rounded-md mx-10 text-center font-bold text-white">Seu curso</p>
        </a>

        <a href="" class="bg-blue-300 mx-2 my-4 pt-3 px-3 py-3 rounded-lg">
            <img src="placeholder.png" alt="" width="95%" height="auto" class="mx-auto my-2">
            <p class="text-base font-bold my-1">Texto que é um placeholder. Isso ainda não possui uma API para ter vários dados.</p>
            <p class="bg-blue-500 rounded-md mx-10 text-center font-bold text-white">Seu curso</p>
        </a>

        <a href="" class="bg-blue-300 mx-2 my-4 pt-3 px-3 py-3 rounded-lg">
            <img src="placeholder.png" alt="" width="95%" height="auto" class="mx-auto my-2">
            <p class="text-base font-bold my-1">Texto que é um placeholder. Isso ainda não possui uma API para ter vários dados.</p>
            <p class="bg-blue-500 rounded-md mx-10 text-center font-bold text-white">Seu curso</p>
        </a>

        <a href="" class="bg-blue-300 mx-2 my-4 pt-3 px-3 py-3 rounded-lg">
            <img src="placeholder.png" alt="" width="95%" height="auto" class="mx-auto my-2">
            <p class="text-base font-bold my-1">Texto que é um placeholder. Isso ainda não possui uma API para ter vários dados.</p>
            <p class="bg-blue-500 rounded-md mx-10 text-center font-bold text-white">Seu curso</p>
        </a>

        <a href="" class="bg-blue-300 mx-2 my-4 pt-3 px-3 py-3 rounded-lg">
            <img src="placeholder.png" alt="" width="95%" height="auto" class="mx-auto my-2">
            <p class="text-base font-bold my-1">Texto que é um placeholder. Isso ainda não possui uma API para ter vários dados.</p>
            <p class="bg-blue-500 rounded-md mx-10 text-center font-bold text-white">Seu curso</p>
        </a>

        <a href="" class="bg-blue-300 mx-2 my-4 pt-3 px-3 py-3 rounded-lg">
            <img src="placeholder.png" alt="" width="95%" height="auto" class="mx-auto my-2">
            <p class="text-base font-bold my-1">Texto que é um placeholder. Isso ainda não possui uma API para ter vários dados.</p>
            <p class="bg-blue-500 rounded-md mx-10 text-center font-bold text-white">Seu curso</p>
        </a>

        <a href="" class="bg-blue-300 mx-2 my-4 pt-3 px-3 py-3 rounded-lg">
            <img src="placeholder.png" alt="" width="95%" height="auto" class="mx-auto my-2">
            <p class="text-base font-bold my-1">Texto que é um placeholder. Isso ainda não possui uma API para ter vários dados.</p>
            <p class="bg-blue-500 rounded-md mx-10 text-center font-bold text-white">Seu curso</p>
        </a>

        <a href="" class="bg-blue-300 mx-2 my-4 pt-3 px-3 py-3 rounded-lg">
            <img src="placeholder.png" alt="" width="95%" height="auto" class="mx-auto my-2">
            <p class="text-base font-bold my-1">Texto que é um placeholder. Isso ainda não possui uma API para ter vários dados.</p>
            <p class="bg-blue-500 rounded-md mx-10 text-center font-bold text-white">Seu curso</p>
        </a>
        </div>
    </main>
</body>
</html>