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
        /* ==========================================================================
           1. RESET & VARIABLE UTAMA
           ========================================================================== */
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

        /* ==========================================================================
           2. HERO SECTION
           ========================================================================== */
        .hero {
            background: var(--primary-gradient);
            color: var(--white);
            padding: 120px 20px;
            text-align: center;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 75%);
            pointer-events: none;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .hero-content h1 {
            font-family: var(--font-title);
            font-size: 3.5rem;
            font-weight: 700;
            letter-spacing: -1px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .hero-content .subtitle {
            font-family: var(--font-title);
            font-size: 1.5rem;
            color: var(--accent-color);
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 25px;
        }

        .hero-content p {
            font-size: 1.1rem;
            color: #cbd5e1;
            font-weight: 300;
            max-width: 600px;
            margin: 0 auto;
        }

        /* ==========================================================================
           3. CONTAINER & UTILITY
           ========================================================================== */
        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        .section-title {
            text-align: center;
            font-family: var(--font-title);
            font-size: 2.5rem;
            color: #1e3c72;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--accent-gradient);
            border-radius: 2px;
        }

        /* ==========================================================================
           4. ANGGOTA TIM SECTION
           ========================================================================== */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 40px;
        }

        .team-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.02);
            border: 1px solid #f1f5f9;
            text-align: center;
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(30, 60, 114, 0.08);
        }

        .avatar-box {
            height: 220px;
            background: linear-gradient(to bottom, #e2e8f0, #f8fafc);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .avatar-box i {
            font-size: 5rem;
            color: #94a3b8;
            transition: 0.3s;
        }

        .team-card:hover .avatar-box i {
            color: #2a5298;
            transform: scale(1.1);
        }

        .badge-leader {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ff9800;
            color: var(--white);
            font-size: 0.75rem;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 20px;
            text-transform: uppercase;
            box-shadow: 0 4px 10px rgba(255, 152, 0, 0.3);
        }

        .member-info {
            padding: 25px 20px;
        }

        .member-info h3 {
            font-family: var(--font-title);
            font-size: 1.25rem;
            color: var(--text-dark);
            margin-bottom: 5px;
        }

        .member-info p {
            color: #2a5298;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* ==========================================================================
           5. PROGRAM KERJA TIMELINE
           ========================================================================== */
        .proker-section {
            background-color: #f1f5f9;
        }

        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Garis Tengah Timeline */
        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background: var(--primary-gradient);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
            border-radius: 2px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-inherit;
            width: 50%;
            box-sizing: border-box;
        }

        /* Lingkaran Titik Pointer */
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            background-color: var(--white);
            border: 4px solid #00b4db;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
            transition: 0.3s;
        }

        /* Penempatan Kiri & Kanan */
        .left { left: 0; }
        .right { left: 50%; }

        .right::after { left: -10px; }

        .timeline-content {
            padding: 30px;
            background: var(--white);
            position: relative;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.03);
            border: 1px solid #e2e8f0;
        }

        .timeline-item:hover ::after {
            background-color: #2a5298;
            transform: scale(1.2);
        }

        .time-badge {
            display: inline-block;
            background: var(--accent-gradient);
            color: var(--white);
            padding: 4px 14px;
            font-size: 0.8rem;
            font-weight: 600;
            border-radius: 20px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .timeline-content h3 {
            font-family: var(--font-title);
            font-size: 1.4rem;
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .timeline-content p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* ==========================================================================
           6. FOOTER / CLOSING SECTION
           ========================================================================== */
        .footer {
            background: linear-gradient(135deg, #111827 0%, #1e3c72 100%);
            color: var(--white);
            text-align: center;
            padding: 80px 20px;
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

        /* ==========================================================================
           7. RESPONSIVE DESIGN (BREAKPOINTS)
           ========================================================================== */
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

    <!-- 1. HERO HEADER -->
    <header class="hero">
        <div class="hero-content">
            <h1>Divisi Learning</h1>
            <div class="subtitle">Periode 2025-2026</div>[cite: 1]
            <p>Berkomitmen memfasilitasi pengembangan hard skill dan soft skill secara inklusif dan berkelanjutan demi melahirkan generasi yang adaptif.</p>
        </div>
    </header>

    <!-- 2. SECTION ANGGOTA TIM -->
    <main class="container">
        <h2 class="section-title">Anggota Learning</h2>[cite: 1]
        <div class="team-grid">
            
            <!-- Kordinator -->
            <div class="team-card">
                <div class="avatar-box">
                    <span class="badge-leader">Kordinator</span>[cite: 1]
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="member-info">
                    <h3>Fardiansyah</h3>[cite: 1]
                    <p>Coordinator of Learning</p>
                </div>
            </div>

            <!-- Anggota 1 -->
            <div class="team-card">
                <div class="avatar-box">
                    <i class="fas fa-user"></i>
                </div>
                <div class="member-info">
                    <h3>Deswintia</h3>[cite: 1]
                    <p>Team Member</p>
                </div>
            </div>

            <!-- Anggota 2 -->
            <div class="team-card">
                <div class="avatar-box">
                    <i class="fas fa-user"></i>
                </div>
                <div class="member-info">
                    <h3>Wita</h3>[cite: 1]
                    <p>Team Member</p>
                </div>
            </div>

            <!-- Anggota 3 -->
            <div class="team-card">
                <div class="avatar-box">
                    <i class="fas fa-user"></i>
                </div>
                <div class="member-info">
                    <h3>Komang</h3>[cite: 1]
                    <p>Team Member</p>
                </div>
            </div>

        </div>
    </main>

    <!-- 3. SECTION PROGRAM KERJA (TIMELINE LAYOUT) -->
    <section class="proker-section">
        <div class="container">
            <h2 class="section-title">Program Kerja</h2>[cite: 1]
            
            <div class="timeline">
                
                <!-- Proker 1 -->
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <span class="time-badge">Mei - Juni</span>[cite: 1]
                        <h3>Spesial Learning New Gen</h3>[cite: 1]
                        <p>Program pembelajaran intensif yang dipersiapkan khusus untuk membimbing generasi baru agar mengenal dasar-dasar teknologi terkini dengan metode interaktif.</p>
                    </div>
                </div>

                <!-- Proker 2 -->
                <div class="timeline-item right">
                    <div class="timeline-content">
                        <span class="time-badge">Juni - Agustus</span>[cite: 1]
                        <h3>Capacity Building</h3>[cite: 1]
                        <p>Kegiatan internal yang bertujuan untuk meningkatkan kapasitas diri, mempererat keakraban antar-anggota, serta melatih kepemimpinan dan kerja sama tim.</p>
                    </div>
                </div>

                <!-- Proker 3 -->
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <span class="time-badge">September - Desember</span>[cite: 1]
                        <h3>Ngoding Camp</h3>[cite: 1]
                        <p>Bootcamp pemrograman terstruktur untuk memperdalam pemahaman logika koding dan pembuatan projek nyata, didampingi oleh mentor berpengalaman.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. CLOSING / FOOTER -->
    <footer class="footer">
        <h2>Terima Kasih</h2>[cite: 1]
        <p>Mari berkolaborasi dan bertumbuh bersama Divisi Learning untuk mewujudkan kepengurusan yang berdampak.</p>
    </footer>

</body>
</html>