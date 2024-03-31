<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css') <!-- AQUI ATIVA O TAILWIND CSS AO PROJETO. -->
    <title>ETEC Zona Leste</title>
</head>
<body class="bg-cover bg-blend-color" style="background-color: rgba(8, 8, 8, 0.459); background-image: url('etec/image-21-1.jpg')">
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

    <main class="mx-3 my-3">
            <h1 class="text-3xl text-center font-bold bg-red-700 rounded-lg text-red-200 py-1">ETEC Zona Leste</h1>
            <p class="mt-3 font-mono text-xl text-center text-white">
                Conheça a Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo
            </p>
            
            <div class="grid grid-cols-3 mt-10 gap bg-gradient-to-r from-slate-300 via-gray-400 to-slate-300 rounded-2xl">

                <div class="border-4 border-solid border-red-900 row-span-1 my-3 mx-3 rounded-lg text-white
                bg-red-800">
                    <h3 class="font-bold text-xl text-center text-red-200">Descubra um futuro brilhante na ETEC Zona Leste</h3>
                    <img src="etec/895d682d-b2b3-458e-a9a8-30cae4d3e38c-1.png" alt="" height="auto" width="70%" class="mx-auto my-4 rounded-md" />
                    <p class="mx-1 font-roboto">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima.</p>
                    <p class="font-roboto mx-1 my-1">Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
                </div>

                <div class="row-span-2 border-4 border-solid border-yellow-900 my-3 mx-3 rounded-lg text-white
                bg-yellow-700">
                    <h3 class="font-bold text-xl text-center text-yellow-100">Aprendizados para além da sala de aula</h3>
                    <img src="etec/6aa4a7b4-0afa-4cf9-aba9-268decc1c8bc.jpeg" alt="" height="auto" width="70%" class="mx-auto my-4 rounded-md" />
                    <p class="font-roboto mx-1">Buscamos levar o conhecimento para além da sala de aula tradicional.</p>
                    <p class="font-roboto mx-1 my-1">Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
                </div>

                <div class="row-span-2 border-4 border-solid border-blue-900 my-3 mx-3 rounded-lg text-white
                bg-blue-800">
                    <h3 class="font-bold text-xl text-center text-blue-200">Infraestrutura Moderna</h3>
                    <img src="etec/8115dc6b-d87e-4827-8788-99beab8ec8c6.jpeg" alt="" height="auto" width="70%" class="mx-auto my-4 rounded-md" />
                    <p class="font-roboto mx-1">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes.</p>
                    <p class="font-roboto mx-1 my-1">Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
                </div>

            </div>
        <!--
        <p>IMPORTANTE: Baixe a extensão: 'Laravel Blade Snippets' do Winnie Lin para poder escrever o HTML no arquivo blade.php mais facilmente</p>
        <p>Além disso baixe a extensão 'Tailwind CSS IntelliSense' para poder ver tudo de classes que o Tailwind pode oferecer.</p>
        -->
    </main>
    
</body>
</html>