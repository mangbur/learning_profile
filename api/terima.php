<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisi Learning 2025-2026</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-gradient: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            --accent-gradient: linear-gradient(135deg, #00b4db 0%, #0083b0 100%);
            --accent-color: #00d2ff;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --bg-light: #f8fafc;
            --white: #ffffff;
            --font-title: 'Poppins', sans-serif;
            --font-body: 'Inter', sans-serif;
        }
        
        body {
            font-family: var(--font-body);
            color: var(--text-dark);
            background-color: var(--bg-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        
        .section-title {
            text-align: center;
            font-family: var(--font-title);
            font-size: 2.5rem;
            color: #1e3c72;
            margin-bottom: 60px;
            position: relative;
        }
         .footer {
            background: linear-gradient(135deg, #111827 0%, #1e3c72 100%);
            color: var(--white);
            text-align: center;
            padding: 400px 120px;
        }

        .footer h2 {
            font-family: var(--font-title);
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .footer p {
            color: #94a3b8;
            font-size: 1.1rem;
            max-width: 500px;
            margin: 0 auto;
        }
          @media (max-width: 992px) {
            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.5rem; }
            .hero-content .subtitle { font-size: 1.2rem; }
            
            .team-grid {
                grid-template-columns: 100%;
            }

            /* Ubah Timeline Menjadi 1 Kolom Full */
            .timeline::after { left: 31px; }
            .timeline-item { width: 100%; padding-left: 70px; padding-right: 25px; }
            .timeline-item::after { left: 21px; }
            .right { left: 0%; }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <h2>Terima Kasih</h2>
        <p>Mari berkolaborasi dan bertumbuh bersama Divisi Learning untuk mewujudkan kepengurusan yang berdampak.</p>
    </footer>
</body>
</html>