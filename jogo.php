<?php
// Configurações do site
$site_config = [
    'title' => 'Jogos - PositiveSense',
    'description' => 'Jogos educativos para desenvolvimento',
    'year' => date('Y')
];

// Dados da navegação
$nav_items = [
    ['url' => 'index.php', 'label' => 'Início'],
    ['url' => 'sobre.php', 'label' => 'Sobre'],
    ['url' => 'trabalho.php', 'label' => 'Nosso trabalho'],
    ['url' => 'contato.php', 'label' => 'Contato']
];

// Dados dos jogos
$jogos = [
    [
        'title' => 'Jogos de associação e memória',
        'url' => '#'
    ],
    [
        'title' => 'Pareamento de Emoções',
        'url' => '#'
    ]
];

// Dados do footer
$footer_sections = [
    [
        'title' => 'Início',
        'links' => [
            ['label' => 'Home', 'url' => 'index.php']
        ]
    ],
    [
        'title' => 'Sobre nós',
        'links' => [
            ['label' => 'Nossos serviços', 'url' => 'sobre.php']
        ]
    ],
    [
        'title' => 'Suporte',
        'links' => [
            ['label' => 'Telefones', 'url' => '#'],
            ['label' => 'Chat', 'url' => '#']
        ]
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

// Função para renderizar o footer
function render_footer($footer_sections, $social_media, $year) {
    ?>
    <footer>
        <div class="footer-container">
            <div class="footer-column logo-column">
                <img src="img/download.png" alt="PositiveSense">
            </div>
            <?php foreach ($footer_sections as $section): ?>
                <div class="footer-column">
                    <h4><?php echo htmlspecialchars($section['title']); ?></h4>
                    <ul>
                        <?php foreach ($section['links'] as $link): ?>
                            <li>
                                <a href="<?php echo htmlspecialchars($link['url']); ?>">
                                    <?php echo htmlspecialchars($link['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
            <div class="footer-column social-column">
                <div class="social-icons">
                    <?php foreach ($social_media as $social): ?>
                        <a href="<?php echo htmlspecialchars($social['url']); ?>" 
                           title="<?php echo htmlspecialchars($social['title']); ?>">
                            <img src="<?php echo htmlspecialchars($social['icon']); ?>" 
                                 alt="<?php echo htmlspecialchars($social['title']); ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
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
            background: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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

        /* Main Content */
        main {
            flex: 1;
            margin-top: 100px;
            padding: 3rem 2rem;
            max-width: 1200px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .games-container {
            display: flex;
            gap: 2rem;
            align-items: flex-start;
            justify-content: space-between;
        }

        .games-section {
            flex: 0 0 400px;
        }

        .games-section h2 {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #1a1a1a;
        }

        .game-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .game-button {
            background: #7B9FD3;
            color: white;
            padding: 1rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: block;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .game-button:hover {
            background: #6A8EC2;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        .mascot-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .mascot-section img {
            max-width: 100%;
            height: auto;
            max-height: 400px;
        }

        /* Footer */
        footer {
            background: #E8E8E8;
            padding: 3rem 2rem 1rem;
            margin-top: auto;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 3rem;
            gap: 4rem;
        }

        .footer-column.logo-column img {
            height: 80px;
        }

        .footer-column h4 {
            margin-bottom: 1.2rem;
            color: #1a1a1a;
            font-size: 1rem;
            font-weight: 600;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column a {
            color: #666;
            text-decoration: none;
            display: block;
            margin-bottom: 0.6rem;
            transition: color 0.3s;
            font-size: 0.95rem;
        }

        .footer-column a:hover {
            color: #5B9BD5;
        }

        .social-column {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .social-icons {
            display: flex;
            gap: 1.5rem;
            margin-top: 0.5rem;
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
        }

        .social-icons img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .social-icons a:hover {
            transform: scale(1.1);
        }

        .copyright {
            text-align: center;
            padding: 1.5rem 0;
            border-top: 1px solid #ccc;
            color: #666;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .games-container {
                flex-direction: column;
                align-items: center;
            }

            .games-section {
                flex: 1;
                width: 100%;
                max-width: 500px;
            }

            .mascot-section {
                order: 2;
            }

            .footer-container {
                flex-wrap: wrap;
                gap: 2rem;
                justify-content: center;
            }
        }

        @media (max-width: 600px) {
            .nav-links {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .logo img {
                height: 60px;
            }

            main {
                padding: 2rem 1rem;
            }

            .games-section h2 {
                font-size: 1.3rem;
            }

            .footer-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .social-column {
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <?php render_header($nav_items); ?>

    <main>
        <div class="games-container">
            <div class="games-section">
                <h2>Clique para iniciar o jogo</h2>
                <div class="game-buttons">
                    <?php foreach ($jogos as $jogo): ?>
                        <a href="<?php echo htmlspecialchars($jogo['url']); ?>" class="game-button">
                            <?php echo htmlspecialchars($jogo['title']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="mascot-section">
                <img src="img/ryan.png" alt="Mascote PositiveSense">
            </div>
        </div>
    </main>

    <?php render_footer($footer_sections, $social_media, $site_config['year']); ?>
</body>
</html>