<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ETEC Zona Leste</title>
    @vite('resources/css/app.css') <!-- AQUI ATIVA O TAILWIND CSS AO PROJETO. -->
</head>
<body class="bg-cover bg-blend-color" style="background-image: url('etec/6aa4a7b4-0afa-4cf9-aba9-268decc1c8bc.jpeg'); background-color: rgba(8, 8, 8, 0.459)">
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
    
    <main class="mx-3 my-3 py-3 bg-gradient-to-r from-red-950 via-red-800 to-red-950 rounded-2xl text-white">
        <h1 class="text-center text-2xl mx-32 font-bold rounded-md">
            Conheça Nossa Instituição: </h1>
        <h1 class="text-center text-2xl border-solid border-b-4 mx-32 font-bold rounded-md font-mono text-red-200">
            Tradição, Inovação e Compromisso com a Excelência Educacional</h1>

        <div class="bg-gradient-to-tr from-red-900 via-red-950 to-red-900 rounded-md border-white border-2 m-10">
            <p class="my-2 px-9 py-3 text-lg font-mono">
                Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como 
                um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o 
                desenvolvimento profissional dos estudantes.
            </p>
            
            <p class="my-2 px-9 py-3 text-lg font-mono">
                Fundada em [insira o ano de fundação], a Etec Zona Leste rapidamente se estabeleceu como uma instituição de 
                referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de 
                aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar 
                a excelência acadêmica.
            </p>
            
            <p class="my-2 px-9 py-3 text-lg font-mono">
                Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta 
                de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste 
                oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, 
                proporcionando aos alunos uma formação sólida e atualizada.
            </p>
            
            <p class="my-2 px-9 py-3 text-lg font-mono">
                Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem 
                projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo 
                escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a 
                criatividade.
            </p>
        </div>
        </main>
    </body>
    </html>
