<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css') <!-- AQUI ATIVA O TAILWIND CSS AO PROJETO. -->
    <title>CODETATIO</title>
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
            <p class="mt-3 font-mono text-xl text-center">
              O site ainda está em desenvolvimento, mas aproveite para ver alguns dos nossos serviços que temos a oferecer:
            </p>
            
            <div class="grid grid-cols-3 mt-10 gap bg-gradient-to-r from-slate-300 via-gray-400 to-slate-300 rounded-2xl">

                <div class="border-4 border-solid border-blue-900 row-span-1 my-3 mx-3 rounded-lg text-white
                bg-gradient-to-r from-blue-900 to-emerald-500">
                    <h3 class="font-bold text-xl text-center">BooPeep</h3>
                    <img src="BooPeep.png" alt="" height="auto" width="90%" class="mx-auto my-4" />
                    <p class="font-sans mx-1">O BooPeep é um aplicação de achados e perdidos com o intuito de ajudar pessoas a retornar seus bens em uma instituição.</p>
                    <p class="font-sans mx-1 my-1">Essa previa do projeto para a Semana Tecnologica da ETEC utiliza React, MongoDB e Tailwind CSS como tecnologias de desenvolvimento.</p>
                </div>

                <div class="row-span-2 border-4 border-solid border-blue-900 my-3 mx-3 rounded-lg text-white
                bg-gradient-to-r from-blue-900 to-emerald-500">
                    <h3 class="font-bold text-xl text-center">Em breve...</h3>
                    <p class="font-sans mx-1 my-4">Esse projeto virá em breve, quando nós não sabemos mas virá.</p>
                </div>

                <div class="row-span-2 border-4 border-solid border-blue-900 my-3 mx-3 rounded-lg text-white
                bg-gradient-to-r from-blue-900 to-emerald-500">
                    <h3 class="font-bold text-xl text-center">Em breve...</h3>
                    <p class="font-sans mx-1 my-4">Esse projeto virá em breve, quando nós não sabemos mas virá.</p>
                </div>

            </div>
        <!--
        <p>IMPORTANTE: Baixe a extensão: 'Laravel Blade Snippets' do Winnie Lin para poder escrever o HTML no arquivo blade.php mais facilmente</p>
        <p>Além disso baixe a extensão 'Tailwind CSS IntelliSense' para poder ver tudo de classes que o Tailwind pode oferecer.</p>
        -->
    </main>
    
</body>
</html>