<?php
// Configurações do site
$site_config = [
    'title' => 'Sobre - PositiveSense',
    'description' => 'Conheça os desafios e possibilidades do TEA',
    'year' => date('Y')
];

// Dados da navegação
$nav_items = [
    ['url' => 'index.php', 'label' => 'Início'],
    ['url' => 'sobre.php', 'label' => 'Sobre'],
    ['url' => '#trabalho', 'label' => 'Nosso trabalho'],
    ['url' => '#contato', 'label' => 'Contato']
];

// Dados dos desafios
$desafios = [
    [
        'title' => 'Diagnóstico Precoce',
        'description' => 'O diagnóstico precoce do Transtorno do Espectro Autista (TEA) é fundamental para garantir o desenvolvimento e a qualidade de vida da criança. Quanto antes o autismo for identificado, maiores são as chances de iniciar intervenções adequadas, favorecendo a aquisição de habilidades sociais, cognitivas e de comunicação.',
        'image' => 'img/ryan2.png',
        'image_position' => 'left'
    ],
    [
        'title' => 'Educação Inclusiva',
        'description' => 'A educação inclusiva no autismo é um direito fundamental que garante às pessoas dentro do espectro o acesso a ambientes escolares adaptados, que respeitem suas particularidades e necessidades. Ela não significa apenas que a criança seja da mesma sala de aula, mas sim oferecer condições para que o estudante participe ativamente do processo educacional.',
        'image' => 'img/ryan3.png',
        'image_position' => 'right'
    ],
    [
        'title' => 'Preconceito e Estigma',
        'description' => 'A educação inclusiva no autismo é um elemento fundamental que garante às pessoas dentro do espectro o acesso à aprendizagem em ambientes escolares regulares, com respeito às suas particularidades e necessidades. Ela não significa apenas que a mesma sala de aula, mas sim oferecer condições para que o estudante participe ativamente do processo educacional.',
        'image' => 'img/ryan4.png',
        'image_position' => 'left'
    ],
    [
        'title' => 'Mercado de trabalho',
        'description' => 'A inclusão de pessoas com Transtorno do Espectro Autista (TEA) no mercado de trabalho é um desafio, mas também uma grande oportunidade para empresas e para a sociedade. Muitas vezes, o preconceito ou a falta de informações fazem com que pessoas autistas sejam subestimadas ou até excluídas de processos seletivos.',
        'image' => 'img/ryan5.png',
        'image_position' => 'right'
    ],
    [
        'title' => 'Apoio familiar',
        'description' => 'O apoio familiar é essencial para o desenvolvimento e o bem-estar da pessoa com Transtorno do Espectro Autista (TEA). A família é o primeiro núcleo de acolhimento e desempenha um papel fundamental na socialização e na construção da autoestima e autonomia do indivíduo.',
        'image' => 'img/ryan6.png',
        'image_position' => 'left'
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

// Função para renderizar os desafios
function render_desafios($desafios) {
    foreach ($desafios as $desafio):
        $flex_direction = $desafio['image_position'] === 'left' ? 'row' : 'row-reverse';
    ?>
        <div class="desafio-item" style="flex-direction: <?php echo $flex_direction; ?>;">
            <div class="desafio-image">
                <img src="<?php echo htmlspecialchars($desafio['image']); ?>" 
                     alt="<?php echo htmlspecialchars($desafio['title']); ?>">
            </div>
            <div class="desafio-content">
                <h3><?php echo htmlspecialchars($desafio['title']); ?></h3>
                <p><?php echo htmlspecialchars($desafio['description']); ?></p>
            </div>
        </div>
    <?php
    endforeach;
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
        .hero-sobre {
            background: linear-gradient(135deg, #B8C5E0 0%, #A0B3D8 100%);
            padding: 8rem 2rem 4rem;
            margin-top: 80px;
        }

        .hero-sobre-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-sobre-content h1 {
            font-size: 3rem;
            line-height: 1.3;
            margin-bottom: 1rem;
            color: #1a1a1a;
        }

        .hero-sobre-content p {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.7;
        }

        .hero-sobre-image img {
            width: 100%;
            max-width: 350px;
            height: auto;
            margin-left: auto;
            display: block;
        }

        /* Info Section */
        .info-section {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 2rem;
        }

        .info-section p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #555;
            text-align: justify;
        }

        /* Desafios Section */
        .desafios-section {
            background: #f5f5f5;
            padding: 3rem 2rem;
        }

        .desafios-header {
            background: #B8C5E0;
            text-align: center;
            padding: 1.5rem;
            margin-bottom: 3rem;
        }

        .desafios-header h2 {
            font-size: 2rem;
            color: #1a1a1a;
        }

        .desafios-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .desafio-item {
            display: flex;
            gap: 3rem;
            align-items: center;
            margin-bottom: 4rem;
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .desafio-image {
            flex: 0 0 250px;
        }

        .desafio-image img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .desafio-content {
            flex: 1;
        }

        .desafio-content h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #1a1a1a;
        }

        .desafio-content p {
            color: #555;
            line-height: 1.8;
            font-size: 1rem;
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
            .hero-sobre-container {
                grid-template-columns: 1fr;
            }

            .desafio-item {
                flex-direction: column !important;
            }

            .desafio-image {
                flex: 0 0 auto;
                width: 100%;
            }

            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .nav-links {
                gap: 1rem;
            }
        }

        @media (max-width: 600px) {
            .footer-container {
                grid-template-columns: 1fr;
            }

            .hero-sobre-content h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <?php render_header($nav_items); ?>

    <!-- Hero Section -->
    <section class="hero-sobre">
        <div class="hero-sobre-container">
            <div class="hero-sobre-content">
                <h1>Autismo: Compreensão e inclusão</h1>
                <p>Conheça os desafios e a possibilidades de um futuro mais acessível</p>
            </div>
            <div class="hero-sobre-image">
                <img src="img/ryan.png" alt="Mascote PositiveSense">
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <p>O Transtorno do Espectro Autista (TEA) é uma condição neurológica que afeta comunicação, interação social e comportamento, manifestando-se em diferentes graus de intensidade. Pode envolver dificuldades de linguagem, compreensão social, comportamentos repetitivos e interesses restritos, mas cada pessoa com TEA é única e pode apresentar habilidades especiais que devem ser valorizadas.</p>
    </section>

    <!-- Desafios Section -->
    <section class="desafios-section">
        <div class="desafios-header">
            <h2>Principais Desafios</h2>
        </div>
        <div class="desafios-container">
            <?php render_desafios($desafios); ?>
        </div>
    </section>

    <?php render_footer($footer_links, $social_media, $site_config['year']); ?>
</body>
</html>