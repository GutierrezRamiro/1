<?php
$actual = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "inicio";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Salud Asistencia Pública | Oruro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --azul-institucional: #0F2942;
            --verde-salud: #0D9488;
            --fondo-suave: #F8FAFC;
            --borde-sutil: #E2E8F0;
        }

        body {
            background-color: var(--fondo-suave);
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1E293B;
        }

        @keyframes aparecer {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animar-vista {
            animation: aparecer 0.45s ease-out forwards;
        }

        /* Barra Lateral Limpia */
        .sidebar {
            background-color: var(--azul-institucional);
            color: #FFFFFF;
            min-height: 100vh;
            padding: 32px 22px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .logo-box {
            text-align: center;
            padding-bottom: 24px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 24px;
        }

        .logo-guia {
            background: rgba(255,255,255,0.06);
            border: 1px dashed rgba(255,255,255,0.3);
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 12px;
        }

        .logo-guia img {
            max-height: 64px;
            object-fit: contain;
        }

        .nav-menu .nav-link {
            color: #CBD5E1;
            font-weight: 500;
            font-size: 0.92rem;
            padding: 11px 16px;
            border-radius: 10px;
            margin-bottom: 6px;
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-menu .nav-link:hover {
            background-color: rgba(255,255,255,0.08);
            color: #FFFFFF;
            transform: translateX(4px);
        }

        .nav-menu .nav-link.activo {
            background-color: var(--verde-salud);
            color: #FFFFFF;
            font-weight: 600;
        }

        /* Barra Superior Minimalista */
        .topbar {
            background: #FFFFFF;
            border: 1px solid var(--borde-sutil);
            border-radius: 14px;
            padding: 14px 24px;
            margin-bottom: 28px;
        }

        .topbar small {
            display: block;
            font-size: 0.72rem;
            color: #64748B;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Tarjetas y Títulos */
        .titulo-seccion {
            color: var(--azul-institucional);
            font-weight: 700;
            font-size: 1.35rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .titulo-seccion::before {
            content: "";
            width: 4px;
            height: 24px;
            background-color: var(--verde-salud);
            border-radius: 4px;
            display: inline-block;
        }

        .tarjeta {
            background: #FFFFFF;
            border: 1px solid var(--borde-sutil);
            border-radius: 16px;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .tarjeta:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 24px rgba(15, 41, 66, 0.06);
        }

        /* Espacio de Imagen Fácil de Reemplazar */
        .marco-img {
            background-color: #F1F5F9;
            border: 1.5px dashed #94A3B8;
            border-radius: 12px;
            padding: 10px;
            text-align: center;
        }

        .marco-img img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .texto-img {
            font-size: 0.75rem;
            color: #475569;
            font-weight: 600;
            background: #E2E8F0;
            padding: 4px 10px;
            border-radius: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- MENÚ LATERAL -->
        <aside class="col-lg-3 col-md-4 sidebar">
            <div>
                <div class="logo-box">
                    <div class="logo-guia">
                        <img src="img/1.png" alt="Logo">
                        <div class="mt-1">
                            <span class="texto-img">Aquí va logo: img/1.png</span>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-1" style="letter-spacing: 0.4px;">ASISTENCIA PÚBLICA</h5>
                    <span class="small" style="color: #94A3B8;">Centro de Salud • Oruro</span>
                </div>

                <nav class="nav flex-column nav-menu">
                    <a class="nav-link <?php echo ($actual == 'inicio') ? 'activo' : ''; ?>" href="index.php?a=inicio">
                        <i class="bi bi-house"></i> Inicio
                    </a>
                    <a class="nav-link <?php echo ($actual == 'nosotros') ? 'activo' : ''; ?>" href="index.php?a=nosotros">
                        <i class="bi bi-building"></i> Nosotros
                    </a>
                    <a class="nav-link <?php echo ($actual == 'servicios') ? 'activo' : ''; ?>" href="index.php?a=servicios">
                        <i class="bi bi-heart-pulse"></i> Servicios
                    </a>
                    <a class="nav-link <?php echo ($actual == 'programas') ? 'activo' : ''; ?>" href="index.php?a=programas">
                        <i class="bi bi-shield-check"></i> Programas de Salud
                    </a>
                    <a class="nav-link <?php echo ($actual == 'instalaciones') ? 'activo' : ''; ?>" href="index.php?a=instalaciones">
                        <i class="bi bi-grid"></i> Ambientes
                    </a>
                    <a class="nav-link <?php echo ($actual == 'personal') ? 'activo' : ''; ?>" href="index.php?a=personal">
                        <i class="bi bi-person-vcard"></i> Lista de Médicos
                    </a>
                </nav>
            </div>

            <div class="pt-4 border-top border-secondary border-opacity-25 small" style="color: #CBD5E1;">
                <p class="mb-1 fw-semibold text-white">Horario de Atención</p>
                <p class="mb-2">Lunes a : 08:00 – :00</p>
                <p class="mb-0"><i class="bi bi-geo-alt text-info me-1"></i> Calle La Plata esq. León, Oruro</p>
            </div>
        </aside>

        <!-- CONTENIDO PRINCIPAL -->
        <main class="col-lg-9 col-md-8 p-4 p-lg-5">
            <!-- Datos de Contacto -->
            <div class="topbar">
                <div class="row align-items-center g-2 text-center text-md-start">
                    <div class="col-md-4">
                        <small>Teléfonos</small>
                        <span class="fw-semibold">52 54721 / 52 83667</span>
                    </div>
                    <div class="col-md-4">
                        <small>Celular / Consultas</small>
                        <span class="fw-semibold">786 10575</span>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <small>Ubicación</small>
                        <span class="fw-semibold">Calle La Plata esq. León, Oruro</span>
                    </div>
                </div>
            </div>

            <!-- Vista Dinámica -->
            <div class="animar-vista">
                <?php include($vista); ?>
            </div>

            <!-- Pie de Página -->
            <footer class="mt-5 pt-4 border-top text-center text-muted small">
                © <?php echo date("Y"); ?> Centro de Salud Asistencia Pública — Oruro, Bolivia.
            </footer>
        </main>
    </div>
</div>

</body>
</html>