<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css') <!-- AQUI ATIVA O TAILWIND CSS AO PROJETO. -->
    <title>Teste 123</title>
</head>
<body class="bg-slate-200">
    <header class="flex flex-row bg-gradient-to-r from-blue-900 to-cyan-600 py-6">
        <h1 class="bg-gradient-to-br from-blue-300 to-blue-500 text-transparent bg-clip-text font-roboto 
        text-2xl font-bold pl-3
        hover:from-cyan-300 hover:via-cyan-300 hover:to-cyan-300"><a href="/home">CODETATIO</a></h1>
        <div class="ml-5">
            <button class="rounded-md p-1 font-mono mr-3">
                <a class="bg-gradient-to-r from-cyan-400 via-sky-400 to-cyan-400 text-transparent bg-clip-text
                hover:from-cyan-300 hover:via-cyan-300 hover:to-cyan-300" 
                href="/aboutus">Sobre Nós</a>
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
            <h1 class="text-3xl text-center">Bem vindo a CODETATIO!</h1>
            <p class="mt-3 font-roboto">
              Nós da CODETATIO temos o objetivo de desenvolver Softwares de alta qualidade e dar aos nossos usuários
              uma experiência satifastória em todos os nossos objetivos
            </p>
        
        <!--
        <p>IMPORTANTE: Baixe a extensão: 'Laravel Blade Snippets' do Winnie Lin para poder escrever o HTML no arquivo blade.php mais facilmente</p>
        <p>Além disso baixe a extensão 'Tailwind CSS IntelliSense' para poder ver tudo de classes que o Tailwind pode oferecer.</p>
        -->
    </main>
    
</body>
</html>