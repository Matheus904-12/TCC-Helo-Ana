<?php
// Configurações do site
$site_config = [
    'title' => 'PositiveSense - Inovação a serviço da educação',
    'description' => 'Projeto voltado à inclusão escolar por meio de tecnologia assistiva',
    'year' => date('Y')
];

// Dados da navegação
$nav_items = [
    ['url' => '#inicio', 'label' => 'Início'],
    ['url' => '#sobre', 'label' => 'Sobre'],
    ['url' => '#trabalho', 'label' => 'Nosso trabalho'],
    ['url' => '#contato', 'label' => 'Contato']
];

// Dados dos cards
$cards = [
    [
        'title' => 'Sobre',
        'description' => 'Projeto voltado à inclusão escolar por meio de tecnologia assistiva.',
        'link' => '#sobre'
    ],
    [
        'title' => 'Nosso trabalho',
        'description' => 'Desenvolvimento de sensor de som, site informativo e aplicativo interativo.',
        'link' => '#trabalho'
    ],
    [
        'title' => 'Origem',
        'description' => 'Iniciativa criada para apoiar estudantes com TEA e promover ambientes mais acolhedores.',
        'link' => '#origem'
    ]
];

// Dados do footer
$footer_links = [
    'Início' => [
        ['label' => 'Home', 'url' => '#']
    ],
    'Sobre nós' => [
        ['label' => 'Nossos serviços', 'url' => '#']
    ],
    'Suporte' => [
        ['label' => 'Telefones', 'url' => '#'],
        ['label' => 'Chat', 'url' => '#']
    ]
];

$social_media = [
    ['icon' => 'img/whatsapp.png', 'url' => '#', 'title' => 'WhatsApp'],
    ['icon' => 'img/email.png', 'url' => '#', 'title' => 'Email'],
    ['icon' => 'img/spotify.png', 'url' => '#', 'title' => 'Spotify']
];

// Função para renderizar o header
function render_header($nav_items) {
    ?>
    <header>
        <nav>
            <div class="logo">
                <img src="img/download.png" alt="PositiveSense">
            </div>
            <ul class="nav-links">
                <?php foreach ($nav_items as $item): ?>
                    <li><a href="<?php echo htmlspecialchars($item['url']); ?>">
                        <?php echo htmlspecialchars($item['label']); ?>
                    </a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <?php
}

// Função para renderizar cards
function render_cards($cards) {
    ?>
    <section class="cards-section">
        <div class="cards-container">
            <?php foreach ($cards as $card): ?>
                <div class="card">
                    <h3><?php echo htmlspecialchars($card['title']); ?></h3>
                    <p><?php echo htmlspecialchars($card['description']); ?></p>
                    <a href="<?php echo htmlspecialchars($card['link']); ?>" class="card-link">
                        Saiba mais →
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php
}

// Função para renderizar o footer
function render_footer($footer_links, $social_media, $year) {
    ?>
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <img src="img/download.png" alt="PositiveSense" style="height: 100px; margin-bottom: 1rem;">
            </div>
            <?php foreach ($footer_links as $section => $links): ?>
                <div class="footer-column">
                    <h4><?php echo htmlspecialchars($section); ?></h4>
                    <ul>
                        <?php foreach ($links as $link): ?>
                            <li>
                                <a href="<?php echo htmlspecialchars($link['url']); ?>">
                                    <?php echo htmlspecialchars($link['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php if ($section === 'Suporte'): ?>
                        <div class="social-icons" style="margin-top: 1rem;">
                            <?php foreach ($social_media as $social): ?>
                                <a href="<?php echo htmlspecialchars($social['url']); ?>" 
                                   title="<?php echo htmlspecialchars($social['title']); ?>">
                                    <img src="<?php echo htmlspecialchars($social['icon']); ?>" 
                                         alt="<?php echo htmlspecialchars($social['title']); ?>">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="copyright">
            Copyright <?php echo $year; ?> Todos os direitos reservados.
        </div>
    </footer>
    <?php
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($site_config['description']); ?>">
    <title><?php echo htmlspecialchars($site_config['title']); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        header {
            background: #fff;
            padding: 0.5rem 2rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo img {
            height: 80px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #5B9BD5;
        }

        .hero {
            background: linear-gradient(135deg, #E8E4D9 0%, #D9D4C8 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 6rem 2rem 2rem;
            margin-top: 80px;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            color: #1a1a1a;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #555;
        }

        .btn-primary {
            background: #fff;
            color: #333;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .hero-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .cards-section {
            padding: 5rem 2rem;
            background: #fff;
        }

        .cards-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .card {
            background: #fff;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: #1a1a1a;
        }

        .card p {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .card-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #333;
            text-decoration: none;
            font-weight: 600;
            transition: gap 0.3s;
        }

        .card-link:hover {
            gap: 1rem;
        }

        .mission-section {
            padding: 5rem 2rem;
            background: #f8f8f8;
        }

        .mission-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .mission-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #1a1a1a;
        }

        .mission-content p {
            color: #555;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .mission-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        footer {
            background: #f0f0f0;
            padding: 3rem 2rem 1rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-column h4 {
            margin-bottom: 1rem;
            color: #1a1a1a;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column a {
            color: #555;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .footer-column a:hover {
            color: #5B9BD5;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-icons a {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border-radius: 50%;
            text-decoration: none;
            transition: transform 0.3s;
            padding: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .social-icons a:hover {
            transform: scale(1.15);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        .social-icons img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .copyright {
            text-align: center;
            padding: 1.5rem 0;
            border-top: 1px solid #ddd;
            color: #666;
        }

        @media (max-width: 968px) {
            .hero-container,
            .mission-container {
                grid-template-columns: 1fr;
            }

            .cards-container {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                gap: 1rem;
            }
        }

        @media (max-width: 600px) {
            .footer-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php render_header($nav_items); ?>

    <section class="hero" id="inicio">
        <div class="hero-container">
            <div class="hero-content">
                <h1>Mais concentração, mais inclusão:</h1>
                <p>Inovação a serviço da educação.</p>
                <button class="btn-primary">Jogos</button>
            </div>
            <div class="hero-image">
                <img src="img/n.png" alt="Mãe e filho jogando">
            </div>
        </div>
    </section>

    <?php render_cards($cards); ?>

    <section class="mission-section">
        <div class="mission-container">
            <div class="mission-content">
                <h2>Nos preocupamos com a causa</h2>
                <p>Nos preocupamos porque inclusão é essencial. Cada criança com TEA tem o direito de frequentar a escola sem sobrecarga sensorial. Nossa missão é tornar as salas de aula mais conscientes, preparadas e acolhedoras.</p>
            </div>
            <div class="mission-image">
                <img src="img/p.png" alt="Equipe PositiveSense">
            </div>
        </div>
    </section>

    <?php render_footer($footer_links, $social_media, $site_config['year']); ?>
</body>
</html>