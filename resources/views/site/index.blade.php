{{-- Front-end começa aqui! --}}
    <!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Generator</title>

    <link rel="stylesheet" href="{{  asset('site/css/style.css') }}" type="text/css">
    <script src="{{  asset('site/JavaScript/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="..." crossorigin="anonymous">
</head>

<body>
<header id="cabeçalho">
    <a href="/"><img src="{{  asset('imagens_site/logo.png')}}" alt="Logo da Career Generator"></a>
    <nav>
        <ul>
            <li><a href="#sobre_nos"><i class="fas fa-book-open"></i> Sobre nós</a></li>
            <li><a href="#contatos"><i class="fas fa-phone"></i> Contatos</a></li>
            <li><a href="dashboard"><i class="fas fa-door-open"></i> Entrar</a></li>
        </ul>
    </nav>
</header>

<main id="principal">
    <!-- Barra de Nossos Alunos -->
    <div class="nossos_alunos">
        <p>NOSSOS ALUNOS</p>
    </div>
    <!-- Barra de Pesquisa -->
    <form action="{{ url('/search') }}" method="get" class="barra_pesquisa">
        <input type="text" placeholder="Digite um curso..." name="search">
        <button type="submit" onclick="search()">Pesquisar</button>
    </form>
    <div id="container-cards">

        @foreach ($alunos as $aluno)
        <div id="card-principal" class="card">
            <div class="imagem_aluno"><img src="{{ asset($aluno->imagem) }}" alt="{{ $aluno->nome }}"></div>

            <div class="informacoes-card">
                <ul>

                    <li><i class="fas fa-file-signature"></i> NOME: <span>{{ $aluno->nome }}</span></li>
                    <li><i class="fas fa-quote-left"></i> DESCRIÇÃO: <span>{{ $aluno->descricao }}</span></li>
                    <li><i class="fas fa-graduation-cap"></i> CURSO DE GRADUAÇÃO: <span>{{ $aluno->curso->curso }}</li>
                </ul>
            </div>

            <div class="botoes_card">
                @if($aluno->contratado)
                    <button class="botao_contratar1"><p class="event-type">CONTRATADO!</p></button>
                @else
                    <form action="{{ route('aluno.contratar', $aluno) }}" method="post">
                        @csrf
                        <button class="botao_contratar2" type="submit"><p class="event-type">CONTRATAR</p></button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    @endforeach
    <button onclick="scrollToTop()" id="botao_volta_topo" title="Voltar para o topo"><i class="fas fa-arrow-up"></i></button>
</main>
<footer id="rodape">
    <div id="sobre_nos">
        <h1>Sobre nós</h1>
        <p>
            A Carrer Generator é uma plataforma inovadora que visa estreitar a lacuna entre estudantes recém-formados e empresas em busca de talentos promissores. Nosso objetivo é proporcionar visibilidade e oportunidades para os graduandos, permitindo que eles apresentem suas habilidades e experiências de forma impactante às empresas interessadas.
        </p>
    </div>
    <div id="contatos">
        <h1>Contatos</h1>
        <ul>
            <li><p>Telefone: +55 11 98765-4321</p></li>
            <li><p>Email: contato@carrergenerator.com</p></li>
        </ul>
    </div>
</footer>
</body>
</html>
