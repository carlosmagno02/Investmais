<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="h-screen bg-cover bg-center" style="background-image:url({{ asset('assets/images/capa.png') }})">
        <div class="container relative h-full">
            <div class="absolute" style="top:50%;left:50%;transform:translate(-50%,-50%)">
                <h1 class="text-center text-white text-6xl">
                    A melhor maneira de ter <br>
                    dinheiro não é poupando, é <br>
                    investindo com a Investmais.
                </h1>
                <a href=""
                    class="bg-orange p-3 mt-7 text-white font-bold rounded-lg block text-center w-3/12 mx-auto">QUERO
                    INVESTIR</a>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="flex">
                <div class="bg-[#068fe1] text-center text-white">
                    <img src="" alt="">
                    <h3>PLANEJAMENTO</h3>
                    <p>Especialistas, através de critérios técnicos, escolhem os projetos que tenham maior
                        probabilidade de
                        retorno.</p>
                </div>
                <div class="text-center text-white bg-[#0d74b2]">
                    <img src="" alt="">
                    <h3>ANÁLISE E APLICAÇÃO</h3>
                    <p>Invista 100% online com toda a facilidade e segurança, garantida pela regulamentação CRM. Sua
                        análise de investimento é feita de forma rápida por nós.</p>
                </div>
                <div class="text-center text-white bg-[#225574]">
                    <img src="" alt="">
                    <h3>ACOMPANHAMENTO</h3>
                    <p>De forma muito transparente, você poderá acompanhar o desempenho do seu investimento e tirar
                        dúvidas com nossos especialistas.</p>
                </div>
                <div class="text-center text-white bg-[#042c44]">
                    <img src="" alt="">
                    <h3>RECEBA O RETORNO</h3>
                    <h3>Ao longo ou ao final do
                        projeto, você recebe automaticamente em sua conta bancária cadastrada os juros, principal ou
                        dividendos.</h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="text-center">CONFIRA AS OPORTUNIDADES DE INVESTIMENTOS</h2>
            <p class="text-center">Nunca foi tão fácil e seguro investir. Confira abaixo nossos projetos que estão
                abertos para
                investimentos. Veja muitos outros, clicando aqui.</p>
            <div class="flex">
                <div class="bg-orange w-2/6">
                    <img src="" alt="">
                    <h3 class="text-white text-center">Projeto Modelo 1</h3>
                    <p class="text-white">Adquirir lotes para a construção e venda de casas é atividade amplamente
                        desenvolvida por
                        empreendedores em todo o Brasil...</p>
                    <a class="text-white" href="">Siba mais ></a>
                </div>
                <div class="bg-orange w-2/6">
                    <img src="" alt="">
                    <h3 class="text-white text-center">Projeto Modelo 1</h3>
                    <p class="text-white">Adquirir lotes para a construção e venda de casas é atividade amplamente
                        desenvolvida por
                        empreendedores em todo o Brasil...</p>
                    <a class="text-white" href="">Siba mais ></a>
                </div>
                <div class="bg-orange w-2/6">
                    <img src="" alt="">
                    <h3 class="text-white text-center">Projeto Modelo 1</h3>
                    <p class="text-white">Adquirir lotes para a construção e venda de casas é atividade amplamente
                        desenvolvida por
                        empreendedores em todo o Brasil...</p>
                    <a class="text-white" href="">Siba mais ></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Facilidade e segurança para <br> investir é com a Investmais</h2>
            <a href="">CONHEÇA NOSSOS DIFERENCIAIS</a>
        </div>
    </section>
    <section>
        <div class="container">
            <img src="" alt="">
            <div>
                <h2>Vamos começar juntos a <br>sua jornada de investimentos?</h2>
                <p>Realize seu cadastro agora mesmo. Depois de uma análise e
                    estando tudo certo, você poderá se tornar um investidor
                    parceiro da Investmais. </p>
                <div>
                    <a href="">QUERO SER UM INVESTIDOR</a>
                    <a href="">DÚVIDAS FREQUENTES</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="flex">
                <div class="w-2/5">
                    <img src="" alt="">
                    <p>Somos uma Fintech com profissionais capacitados, especializados e treinados para fornecer acesso
                        facilitado a investimentos alternativos de alta qualidade para todo mundo que deseja investir.
                    </p>
                    <h4>NEWSLETTER</h4>
                    <form action="">
                        <input type="text" required name="nome">
                        <input type="email" required name='email'>
                        <button type="submit">RECEBER NEWSLETTER</button>
                    </form>
                </div>
                <div class="w-3/5 flex">
                    <div class="w-1/3">
                        <h3>A INVESTMAIS</h3>
                        <ul>
                            <li>Quem somos</li>
                            <li>Produtos</li>
                            <li>Investimentos</li>
                            <li>Capitação</li>
                            <li>Materiais</li>
                            <li>Seja um Investidor</li>
                        </ul>
                    </div>
                    <div class="w-1/3">
                        <h3>POLÍTICAS E TERMOS</h3>
                        <ul>
                            <li>Políticas de Privacidade</li>
                            <li>Termos de Serviço</li>
                            <li>Autorização</li>
                        </ul>
                    </div>
                    <div class="w-1/3">
                        <p>(11)91111-1111</p>
                        <p>(11)91111-1111</p>
                        <p>(11)91111-1111</p>
                        <p>(11)91111-1111</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
