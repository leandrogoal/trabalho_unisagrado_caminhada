<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Caminhada PCD e Pet PCD: inclusão, acessibilidade e convivência em movimento.">
    <title>Caminhada PCD e Pet PCD</title>
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-content">
            <a class="brand" href="#inicio" aria-label="Caminhada PCD e Pet PCD - início">
                <img src="assets/images/logo-caminhada-pcd.png" alt="Caminhada PCD e Pet PCD">
            </a>

            <nav id="site-nav" class="site-nav" aria-label="Navegação principal">
                <div class="desktop-links">
                    <a href="#sobre">Conheça</a>
                    <a href="#programacao">Programação</a>
                    <a href="#apoio">Apoiadores</a>
                    <a class="nav-cta" href="#inscricao">Quero participar</a>
                </div>
                <details class="mobile-menu">
                    <summary><span class="menu-icon" aria-hidden="true">☰</span> Menu</summary>
                    <div class="mobile-links">
                        <a href="#sobre">Conheça</a>
                        <a href="#programacao">Programação</a>
                        <a href="#apoio">Apoiadores</a>
                        <a class="nav-cta" href="#inscricao">Quero participar</a>
                    </div>
                </details>
            </nav>
        </div>
    </header>

    <main>
        <section id="inicio" class="hero" aria-labelledby="hero-title">
            <div class="hero-media" aria-label="Imagens da Caminhada PCD e Pet PCD">
                <picture class="hero-slide hero-slide-active">
                    <source media="(max-width: 640px)" srcset="assets/images/hero-banner-mobile.png">
                    <img src="assets/images/hero-banner.png" alt="Pessoas e pets participando da Caminhada PCD">
                </picture>
            </div>
            <div class="container hero-content">
                <p class="eyebrow">Inclusão em movimento</p>
                <h1 id="hero-title">Caminhar junto transforma o caminho.</h1>
                <p class="hero-text">Um encontro para celebrar pessoas, pets e o direito de ocupar todos os espaços com respeito e acessibilidade.</p>
                <a class="button button-primary" href="#inscricao">Faça parte</a>
            </div>
        </section>

        <section id="sobre" class="section section-light" aria-labelledby="sobre-title">
            <div class="container split-layout">
                <div>
                    <p class="eyebrow">Sobre o evento</p>
                    <h2 id="sobre-title">Um percurso pensado para todo mundo.</h2>
                    <p>A Caminhada PCD e Pet PCD aproxima famílias, pessoas com deficiência e seus animais em uma experiência de convivência, saúde e cidadania.</p>
                    <p>Mais do que chegar ao final, queremos construir um trajeto onde cada pessoa se sinta acolhida, segura e representada.</p>
                </div>
                <div class="feature-list" aria-label="Valores do evento">
                    <article class="feature-item">
                        <span class="feature-number">01</span>
                        <div><h3>Acessibilidade</h3><p>Um ambiente preparado para diferentes corpos, ritmos e necessidades.</p></div>
                    </article>
                    <article class="feature-item">
                        <span class="feature-number">02</span>
                        <div><h3>Convivência</h3><p>Encontros que fortalecem vínculos entre pessoas, comunidades e pets.</p></div>
                    </article>
                    <article class="feature-item">
                        <span class="feature-number">03</span>
                        <div><h3>Respeito</h3><p>Uma caminhada feita com cuidado, empatia e responsabilidade.</p></div>
                    </article>
                </div>
            </div>
        </section>

        <section id="programacao" class="section section-coral" aria-labelledby="programacao-title">
            <div class="container">
                <div class="section-heading">
                    <div><p class="eyebrow">Programe-se</p><h2 id="programacao-title">O dia da caminhada</h2></div>
                    <p class="section-intro">Reserve este momento para se movimentar, encontrar pessoas e viver uma manhã especial com seu pet.</p>
                </div>
                <div class="schedule-grid">
                    <article class="schedule-item"><span class="schedule-time">08:00</span><h3>Concentração</h3><p>Recepção dos participantes e orientação inicial.</p></article>
                    <article class="schedule-item"><span class="schedule-time">09:00</span><h3>Alongamento</h3><p>Preparação coletiva antes de começar o percurso.</p></article>
                    <article class="schedule-item"><span class="schedule-time">09:30</span><h3>Caminhada</h3><p>Um trajeto leve, acessível e feito em conjunto.</p></article>
                    <article class="schedule-item"><span class="schedule-time">11:00</span><h3>Convivência</h3><p>Encerramento com atividades e registros do encontro.</p></article>
                </div>
            </div>
        </section>

        <section id="apoio" class="section section-dark" aria-labelledby="apoio-title">
            <div class="container support-layout">
                <div><p class="eyebrow">Construção coletiva</p><h2 id="apoio-title">Quando a cidade caminha junto, a inclusão avança.</h2></div>
                <div><p>Este projeto acontece com a participação de pessoas, iniciativas e negócios que acreditam em uma cidade mais acessível.</p><a class="text-link" href="#inscricao">Quero apoiar <span aria-hidden="true">↗</span></a></div>
            </div>
        </section>

        <section id="inscricao" class="section section-light" aria-labelledby="inscricao-title">
            <div class="container registration-panel">
                <div><p class="eyebrow">Próximo passo</p><h2 id="inscricao-title">Venha caminhar com a gente.</h2><p>As inscrições serão divulgadas em breve. Deixe seu contato para receber as novidades sobre a próxima edição.</p></div>
                <form class="interest-form" action="#inscricao" method="post">
                    <label for="nome">Seu nome</label>
                    <input id="nome" name="nome" type="text" placeholder="Como podemos chamar você?" required>
                    <label for="email">Seu e-mail</label>
                    <input id="email" name="email" type="email" placeholder="voce@exemplo.com" required>
                    <button class="button button-secondary" type="submit">Quero receber notícias</button>
                    <p class="form-note">Ao enviar, você demonstra interesse no evento. Esta versão inicial não armazena dados.</p>
                </form>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-content">
            <p><strong>Caminhada PCD e Pet PCD</strong><br>Inclusão, cuidado e movimento.</p>
            <p>Projeto acadêmico de Desenvolvimento Web Responsivo<br><span>© 2026</span></p>
        </div>
    </footer>
</body>
</html>