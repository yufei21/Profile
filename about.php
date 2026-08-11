<?php

$profile = [
    'name' => 'Ôn Ngọc Phi',
    'title' => 'Sinh viên Toán - Công nghệ thông tin | Định hướng Web Developer',
    'education' => 'Sinh viên năm 3',
    'major' => 'Toán - CNTT',
    'class' => 'CNTT D2024B',
    'student_id' => '224001822',
    'school' => 'Đại học Thủ đô Hà Nội',
    'email' => 'phion714@gmail.com',
    'github' => 'https://github.com/yufei21/Profile.git',
    'hobbies' => [
    ['name' => 'Lập trình web', 'icon' => 'fa-laptop-code'],
    ['name' => 'Nghe nhạc', 'icon' => 'fa-headphones'],
    ['name' => 'Xem phim', 'icon' => 'fa-film'],
    ['name' => 'Chơi game', 'icon' => 'fa-gamepad'],
]
];

$skills = [
    ['name' => 'HTML5', 'icon' => 'fa-brands fa-html5'],
    ['name' => 'CSS3', 'icon' => 'fa-brands fa-css3-alt'],
    ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js'],
    ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
    ['name' => 'MySQL', 'icon' => 'fa-solid fa-database'],
    ['name' => 'C++', 'icon' => 'fa-solid fa-code']
];

$projects = [
    [
        'id' => '01',
        'title' => 'Website Dịch vụ Du lịch Phú Quốc',
        'description' => 'Trang web đặt tour du lịch, thuê xe tự lái và tìm kiếm các điểm đến nổi tiếng tại Phú Quốc.',
        'tags' => ['HTML5', 'CSS3', 'JavaScript', 'PHP']
    ],
    [
        'id' => '02',
        'title' => 'Ứng dụng Quản lý Kho Hàng',
        'description' => 'Hệ thống quản lý hàng tồn kho, nhập/xuất kho và phân quyền người dùng.',
        'tags' => ['Java', 'MySQL', 'JSP/Servlet', 'MVC Architecture']
    ]
];

$nameParts = explode(' ', trim($profile['name']));
$monogram = mb_substr(end($nameParts), 0, 1, 'UTF-8');
$firstPart = reset($nameParts);
$monogram = mb_strtoupper(mb_substr($firstPart, 0, 1, 'UTF-8') . mb_substr(end($nameParts), 0, 1, 'UTF-8'), 'UTF-8');
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ sơ cá nhân - <?php echo htmlspecialchars($profile['name']); ?></title>

    <!-- Google Fonts & Font Awesome Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght…;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>

        :root {
            --bg: #14241c;
            --bg-soft: #1b3226;
            --card-bg: rgba(233, 238, 227, 0.045);
            --card-border: rgba(244, 239, 225, 0.16);
            --ink: #f5f1e4;
            --ink-dim: #a9bcae;
            --chalk-yellow: #e7b64f;
--chalk-blue: #86b3d1;
            --grid-line: rgba(244, 239, 225, 0.055);

            --font-display: 'Fraunces', serif;
            --font-body: 'Be Vietnam Pro', sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            * { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
        }

        body {
            font-family: var(--font-body);
            background-color: var(--bg);
            color: var(--ink);
            line-height: 1.7;
            overflow-x: hidden;
            background-image:
                linear-gradient(var(--grid-line) 1px, transparent 1px),
                linear-gradient(90deg, var(--grid-line) 1px, transparent 1px);
            background-size: 44px 44px;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        a { color: inherit; }

        ::selection {
            background: var(--chalk-yellow);
            color: #1b2a1e;
        }


        header {
            padding: 130px 0 90px;
            text-align: center;
            position: relative;
        }

        header::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 60% 50% at 50% 0%, rgba(134, 179, 209, 0.16), transparent 70%);
            pointer-events: none;
        }

        .hero-eyebrow {
            font-family: var(--font-mono);
            font-size: 0.85rem;
            color: var(--chalk-blue);
            letter-spacing: 0.02em;
            margin-bottom: 28px;
        }

        .hero-eyebrow .cursor {
            display: inline-block;
            width: 8px;
            height: 1em;
            background: var(--chalk-yellow);
            vertical-align: text-bottom;
            margin-left: 3px;
            animation: blink 1.1s steps(1) infinite;
        }

        @keyframes blink {
            50% { opacity: 0; }
        }

        .hero-avatar {
            width: 108px;
            height: 108px;
            margin: 0 auto 28px;
            border-radius: 50%;
            border: 1.5px dashed var(--chalk-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-display);
            font-size: 2.2rem;
            font-weight: 600;
            color: var(--ink);
            position: relative;
        }

        .hero-avatar::after {
            content: "ƒ(x)";
            position: absolute;
            bottom: -12px;
            right: -8px;
            font-family: var(--font-mono);
font-size: 0.7rem;
            color: var(--chalk-yellow);
            background: var(--bg);
            padding: 1px 6px;
            border: 1px solid var(--card-border);
            border-radius: 20px;
        }

        header h1 {
            font-family: var(--font-display);
            font-size: 3.2rem;
            font-weight: 600;
            letter-spacing: -0.01em;
            margin-bottom: 18px;
            color: var(--ink);
        }

        header p {
            font-size: 1.1rem;
            color: var(--ink-dim);
            max-width: 560px;
            margin: auto;
        }


        nav {
            background: rgba(20, 36, 28, 0.82);
            backdrop-filter: blur(10px);
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--card-border);
        }

        .nav-container {
            display: flex;
            justify-content: center;
            gap: 6px;
        }

        nav a {
            text-decoration: none;
            color: var(--ink-dim);
            font-family: var(--font-mono);
            font-weight: 500;
            font-size: 0.82rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            padding: 18px 22px;
            border-bottom: 2px solid transparent;
            transition: color 0.25s ease, border-color 0.25s ease;
        }

        nav a:hover {
            color: var(--ink);
            border-bottom-color: var(--chalk-yellow);
        }

        section {
            padding: 84px 0;
        }

        .section-title {
            margin-bottom: 46px;
            display: flex;
            align-items: baseline;
            gap: 14px;
        }

        .section-title .tag-symbol {
            font-family: var(--font-mono);
            font-size: 0.95rem;
            color: var(--chalk-blue);
            border: 1px dashed var(--card-border);
            padding: 3px 10px;
            border-radius: 20px;
        }

        .section-title h2 {
            font-family: var(--font-display);
            font-size: 1.9rem;
            font-weight: 600;
            color: var(--ink);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 26px;
        }

        .about-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            padding: 34px;
            border-radius: 6px;
        }

        .about-card h3 {
            font-family: var(--font-mono);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--chalk-yellow);
            margin-bottom: 20px;
        }
.about-info-item {
            margin-bottom: 16px;
            display: flex;
            align-items: baseline;
            gap: 12px;
            border-bottom: 1px dashed var(--grid-line);
            padding-bottom: 12px;
        }

        .about-info-item:last-child {
            margin-bottom: 0;
            border-bottom: none;
            padding-bottom: 0;
        }

        .about-info-item i {
            color: var(--chalk-blue);
            width: 18px;
            font-size: 0.9rem;
        }

        .about-info-item strong {
            font-family: var(--font-mono);
            font-weight: 500;
            font-size: 0.82rem;
            color: var(--ink-dim);
            min-width: 128px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        .hobbies {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 4px;
        }

        .hobby {
            background: transparent;
            color: var(--ink);
            border: 1.5px dashed var(--chalk-blue);
            padding: 7px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .hobby i {
            color: var(--chalk-yellow);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 18px;
        }

        .skill-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            padding: 28px 20px;
            border-radius: 6px;
            text-align: center;
            transition: border-color 0.25s ease, transform 0.25s ease;
        }

        .skill-card i {
            font-size: 2.1rem;
            margin-bottom: 14px;
            color: var(--chalk-blue);
            display: block;
        }

        .skill-card h4 {
            font-family: var(--font-mono);
            color: var(--ink);
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.02em;
        }

        .skill-card:hover {
            transform: translateY(-4px);
            border-color: var(--chalk-yellow);
        }

        .skill-card:hover i {
            color: var(--chalk-yellow);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 26px;
        }

        .project-card {
            background: var(--card-bg);
            border: 1px dashed var(--card-border);
            border-radius: 6px;
            padding: 32px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
transition: border-color 0.25s ease, transform 0.25s ease;
        }

        .project-card:hover {
            transform: translateY(-6px);
            border-color: var(--chalk-blue);
            border-style: solid;
        }

        .project-card .project-id {
            font-family: var(--font-mono);
            font-size: 0.78rem;
            color: var(--chalk-yellow);
            letter-spacing: 0.05em;
        }

        .project-card h3 {
            font-family: var(--font-display);
            font-weight: 600;
            color: var(--ink);
            font-size: 1.2rem;
            margin: 8px 0 14px;
        }

        .project-card p {
            color: var(--ink-dim);
            font-size: 0.95rem;
            margin-bottom: 22px;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            background: transparent;
            color: var(--chalk-blue);
            border: 1px solid var(--card-border);
            padding: 4px 12px;
            border-radius: 4px;
            font-family: var(--font-mono);
            font-size: 0.75rem;
            font-weight: 500;
        }

        .contact-card {
            border: 1px dashed var(--card-border);
            border-radius: 6px;
            padding: 48px;
            max-width: 600px;
            margin: auto;
            text-align: center;
        }

        .contact-card p {
            color: var(--ink-dim);
            margin-bottom: 26px;
            font-size: 1.02rem;
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: 4px;
        }

        .contact-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 26px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.92rem;
            transition: opacity 0.25s ease, transform 0.25s ease;
        }

        .contact-btn.primary {
            color: #16261c;
            background: var(--chalk-yellow);
        }

        .contact-btn.secondary {
            color: var(--ink);
            background: transparent;
            border: 1px solid var(--card-border);
        }

        .contact-btn:hover {
            opacity: 0.88;
            transform: translateY(-2px);
        }

        footer {
            text-align: center;
            padding: 32px;
            border-top: 1px solid var(--card-border);
            color: var(--ink-dim);
            font-family: var(--font-mono);
            font-size: 0.8rem;
        }

        .reveal {
            opacity: 0;
transform: translateY(16px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .about-grid {
                grid-template-columns: 1fr;
            }

            header h1 {
                font-size: 2.1rem;
            }

            .nav-container {
                gap: 0;
                overflow-x: auto;
            }

            nav a {
                padding: 16px 14px;
                font-size: 0.72rem;
                white-space: nowrap;
            }

            .contact-links {
                flex-direction: column;
            }

            .contact-card {
                padding: 32px 24px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <p class="hero-eyebrow">&gt; sinh_vien.dinh_huong == "Web Developer"<span class="cursor"></span></p>
            <div class="hero-avatar"><?php echo htmlspecialchars($monogram); ?></div>
            <h1><?php echo htmlspecialchars($profile['name']); ?></h1>
            <p><?php echo htmlspecialchars($profile['title']); ?></p>
        </div>
    </header>

    <nav>
        <div class="nav-container">
            <a href="#about">Giới thiệu</a>
            <a href="#skills">Kỹ năng</a>
            <a href="#projects">Dự án</a>
            <a href="#contact">Liên hệ</a>
        </div>
    </nav>

    <section id="about">
        <div class="container">
            <div class="section-title reveal">
                <span class="tag-symbol">§1</span>
                <h2>Giới thiệu bản thân</h2>
            </div>

            <div class="about-grid">
                <div class="about-card reveal">
                    <h3>Hồ sơ</h3>
                    <div class="about-info-item">
                        <i class="fa-solid fa-user"></i>
                        <strong>Họ và tên</strong> <?php echo htmlspecialchars($profile['name']); ?>
                    </div>
                    <div class="about-info-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <strong>Học vấn</strong> <?php echo htmlspecialchars($profile['education']); ?>
                    </div>
                    <div class="about-info-item">
                        <i class="fa-solid fa-book-bookmark"></i>
                        <strong>Ngành học</strong> <?php echo htmlspecialchars($profile['major']); ?>
                    </div>
                    <div class="about-info-item">
                        <i class="fa-solid fa-users"></i>
                        <strong>Lớp</strong> <?php echo htmlspecialchars($profile['class']); ?>
                    </div>
<div class="about-info-item">
                        <i class="fa-solid fa-id-card"></i>
                        <strong>Mã sinh viên</strong> <?php echo htmlspecialchars($profile['student_id']); ?>
                    </div>
                    <div class="about-info-item">
                        <i class="fa-solid fa-school"></i>
                        <strong>Trường</strong> <?php echo htmlspecialchars($profile['school']); ?>
                    </div>
                </div>

                <div class="about-card reveal">
                    <h3>Sở thích cá nhân</h3>
                    <div class="hobbies">
                        <?php foreach ($profile['hobbies'] as $hobby): ?>
                            <span class="hobby">
                                <i class="fa-solid <?php echo htmlspecialchars($hobby['icon']); ?>"></i>
                                <?php echo htmlspecialchars($hobby['name']); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <div class="section-title reveal">
                <span class="tag-symbol">§2</span>
                <h2>Kỹ năng chuyên môn</h2>
            </div>

            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                    <div class="skill-card reveal">
                        <i class="<?php echo htmlspecialchars($skill['icon']); ?>"></i>
                        <h4><?php echo htmlspecialchars($skill['name']); ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="section-title reveal">
                <span class="tag-symbol">§3</span>
                <h2>Dự án nổi bật</h2>
            </div>

            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card reveal">
                        <div>
                            <span class="project-id">DỰ ÁN <?php echo htmlspecialchars($project['id']); ?></span>
                            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p><?php echo htmlspecialchars($project['description']); ?></p>
                        </div>
                        <div class="tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- LIÊN HỆ -->
<section id="contact">
        <div class="container">
            <div class="section-title reveal">
                <span class="tag-symbol">§4</span>
                <h2>Liên hệ</h2>
            </div>

            <div class="contact-card reveal">
                <p>
                    Rất mong muốn được kết nối và hợp tác với bạn trong các dự án sắp tới!
                </p>

                <div class="contact-links">
                    <a href="mailto:<?php echo htmlspecialchars($profile['email']); ?>" class="contact-btn primary">
                        <i class="fa-regular fa-envelope"></i> Email
                    </a>
                    <a href="<?php echo htmlspecialchars($profile['github']); ?>" target="_blank" class="contact-btn secondary">
                        <i class="fa-brands fa-github"></i> GitHub
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© <?php echo date('Y'); ?> <?php echo htmlspecialchars($profile['name']); ?> </p>
    </footer>

    <script>
        const revealEls = document.querySelectorAll('.reveal');
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            revealEls.forEach((el) => observer.observe(el));
        } else {
            revealEls.forEach((el) => el.classList.add('is-visible'));
        }
    </script>

</body>
</html>
