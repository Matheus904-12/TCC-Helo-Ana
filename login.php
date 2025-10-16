<?php
// Configurações do site
$site_config = [
    'title' => 'Login - PositiveSense',
    'description' => 'Faça login no PositiveSense',
    'year' => date('Y')
];

// Dados da navegação
$nav_items = [
    ['url' => 'index.php', 'label' => 'Início'],
    ['url' => 'sobre.php', 'label' => 'Sobre'],
    ['url' => 'trabalho.php', 'label' => 'Nosso trabalho'],
    ['url' => 'login.php', 'label' => 'Conta']
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

        /* Login Section */
        .login-section {
            min-height: calc(100vh - 80px);
            margin-top: 80px;
            display: flex;
            position: relative;
            overflow: hidden;
        }

        .login-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .login-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.85);
        }

        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .login-form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(10px);
        }

        .login-form-container h2 {
            font-size: 1rem;
            color: #666;
            margin-bottom: 0.5rem;
            font-weight: 400;
        }

        .login-form {
            margin-top: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #5B9BD5;
        }

        .btn-submit {
            width: 100%;
            background: #5B73A8;
            color: #fff;
            padding: 1rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .btn-submit:hover {
            background: #4a5f8a;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(91, 115, 168, 0.3);
        }

        .form-divider {
            text-align: center;
            margin: 1.5rem 0;
            color: #666;
            position: relative;
        }

        .form-divider::before,
        .form-divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #ddd;
        }

        .form-divider::before {
            left: 0;
        }

        .form-divider::after {
            right: 0;
        }

        .btn-google {
            width: 100%;
            background: #fff;
            color: #333;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .btn-google:hover {
            background: #f8f8f8;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .google-icon {
            width: 20px;
            height: 20px;
        }

        .form-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .form-link a {
            color: #5B9BD5;
            text-decoration: none;
            font-weight: 500;
        }

        .form-link a:hover {
            text-decoration: underline;
        }

        .login-message {
            color: #fff;
            text-align: right;
        }

        .login-message h1 {
            font-size: 2.5rem;
            line-height: 1.3;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        /* Footer */
        footer {
            background: #f0f0f0;
            padding: 3rem 2rem 1rem;
            position: relative;
            z-index: 1;
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
            .login-container {
                grid-template-columns: 1fr;
            }

            .login-message {
                text-align: center;
                order: 2;
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

            .login-message h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <?php render_header($nav_items); ?>

    <!-- Login Section -->
    <section class="login-section">
        <div class="login-background">
            <img src="img/login-background.jpg" alt="Crianças brincando">
        </div>
        
        <div class="login-container">
            <div class="login-form-container">
                <h2>E-mail, telefone ou usuário</h2>
                
                <form class="login-form" method="POST" action="processar_login.php">
                    <div class="form-group">
                        <input type="text" name="usuario" placeholder="" required>
                    </div>

                    <button type="submit" class="btn-submit">Continuar</button>

                    <div class="form-link">
                        <a href="#">Criar conta</a>
                    </div>

                    <div class="form-divider">ou</div>

                    <button type="button" class="btn-google">
                        <svg class="google-icon" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Fazer login com o Google
                    </button>
                </form>
            </div>

            <div class="login-message">
                <h1>Digite seu e-mail, telefone ou usuário para iniciar sessão</h1>
            </div>
        </div>
    </section>

    <?php render_footer($footer_links, $social_media, $site_config['year']); ?>
</body>
</html>