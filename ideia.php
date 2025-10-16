<?php
// Configurações do site
$site_config = [
    'title' => 'Nosso Trabalho - PositiveSense',
    'description' => 'Tecnologia para um ambiente escolar mais inclusivo',
    'year' => date('Y')
];

// Dados da navegação
$nav_items = [
    ['url' => 'index.php', 'label' => 'Início'],
    ['url' => 'sobre.php', 'label' => 'Sobre'],
    ['url' => 'trabalho.php', 'label' => 'Nosso trabalho'],
    ['url' => '#contato', 'label' => 'Contato']
];

// Dados dos benefícios
$beneficios = [
    [
        'icon' => 'img/scar.png',
        'title' => 'Inclusão escolar',
    ],
    [
        'icon' => 'img/scar2.png',
        'title' => 'Auxílio à concentração',
    ],
    [
        'icon' => 'img/scar3.png',
        'title' => 'Sensibilização da comunidade',
    ],
    [
        'icon' => 'img/scar4.png',
        'title' => 'Uso de tecnologia acessível',
    ]
];

// Dados do footer
$footer_links = [
    'Início' => [
        ['label' => 'Home', 'url' => 'index.php']
    ],
    'Sobre nós' => [
        ['label' => 'Nossos serviços', 'url' => 'sobre.php']
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

// Função para renderizar benefícios
function render_beneficios($beneficios) {
    ?>
    <div class="beneficios-grid">
        <?php foreach ($beneficios as $beneficio): ?>
            <div class="beneficio-item">
                <div class="beneficio-icon">
                    <img src="<?php echo htmlspecialchars($beneficio['icon']); ?>" 
                         alt="<?php echo htmlspecialchars($beneficio['title']); ?>">
                </div>
                <p><?php echo htmlspecialchars($beneficio['title']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
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
                        <div class="social-icons">
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
            background: #fff;
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

        /* Hero Section */
        .hero-trabalho {
            background: linear-gradient(135deg, #D5E3F5 0%, #C5D8EE 100%);
            padding: 8rem 2rem 4rem;
            margin-top: 80px;
        }

        .hero-trabalho-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-trabalho-content h1 {
            font-size: 3rem;
            line-height: 1.3;
            margin-bottom: 1.5rem;
            color: #1a1a1a;
        }

        .hero-trabalho-content p {
            font-size: 1.05rem;
            color: #333;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .btn-primary {
            background: #5B9BD5;
            color: #fff;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(91, 155, 213, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(91, 155, 213, 0.4);
            background: #4a8ac4;
        }

        .hero-trabalho-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-trabalho-image img {
            width: 100%;
            max-width: 300px;
            height: auto;
        }

        /* Nossa Ideia Section */
        .ideia-section {
            padding: 5rem 2rem;
            background: #fff;
        }

        .ideia-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .ideia-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #1a1a1a;
        }

        .ideia-content p {
            color: #555;
            line-height: 1.8;
            font-size: 1.05rem;
        }

        .ideia-image {
            display: flex;
            justify-content: center;
        }

        .ideia-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
        }

        /* Benefícios Section */
        .beneficios-section {
            background: linear-gradient(135deg, #E8EDF5 0%, #D8E2F0 100%);
            padding: 5rem 2rem;
        }

        .beneficios-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .beneficios-header h2 {
            font-size: 2.5rem;
            color: #1a1a1a;
            margin-bottom: 1rem;
        }

        .beneficios-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
        }

        .beneficio-item {
            text-align: center;
        }

        .beneficio-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .beneficio-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .beneficio-item p {
            font-size: 1rem;
            color: #333;
            font-weight: 500;
        }

        /* Objetivo Section */
        .objetivo-section {
            background: #C5D8EE;
            padding: 3rem 2rem;
            text-align: center;
        }

        .objetivo-section p {
            max-width: 1000px;
            margin: 0 auto;
            font-size: 1.05rem;
            line-height: 1.8;
            color: #1a1a1a;
        }

        /* Footer */
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

        /* Responsive */
        @media (max-width: 968px) {
            .hero-trabalho-container,
            .ideia-container {
                grid-template-columns: 1fr;
            }

            .beneficios-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-trabalho-content h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                gap: 1rem;
            }
        }

        @media (max-width: 600px) {
            .beneficios-grid {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php render_header($nav_items); ?>

    <!-- Hero Section -->
    <section class="hero-trabalho">
        <div class="hero-trabalho-container">
            <div class="hero-trabalho-content">
                <h1>Tecnologia para um ambiente escolar mais inclusivo</h1>
                <p>Uma frase curta explicando a ideia l"Um sensor de som que ajuda estudantes com TEA a se concentrarem melhor</p>
                <button class="btn-primary">Saiba mais</button>
            </div>
            <div class="hero-trabalho-image">
                <img src="img/manu2.png" alt="Mascote PositiveSense">
            </div>
        </div>
    </section>

    <!-- Nossa Ideia Section -->
    <section class="ideia-section">
        <div class="ideia-container">
            <div class="ideia-content">
                <h2>Nossa ideia</h2>
                <p>Nosso projeto propõe instalar sensores de som que acendem luzes quando a sala está muito barulhenta, ajudando alunos com TEA a se concentrarem melhor</p>
            </div>
            <div class="ideia-image">
                <img src="img/manu.png" alt="Ilustração da nossa ideia">
            </div>
        </div>
    </section>

    <!-- Benefícios Section -->
    <section class="beneficios-section">
        <div class="beneficios-header">
            <h2>Benefícios</h2>
        </div>
        <?php render_beneficios($beneficios); ?>
    </section>

    <!-- Objetivo Section -->
    <section class="objetivo-section">
        <p>Nosso objetivo é unir tecnologia, acessibilidade e educação para transformar a sala de aula em um espaço mais acolhedor</p>
    </section>

    <?php render_footer($footer_links, $social_media, $site_config['year']); ?>
</body>
</html>