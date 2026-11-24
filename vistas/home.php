<?php
// === EDITA AQUÍ LOS DATOS DE INICIO ===
$titulo_banner    = "Centro de Salud Asistencia Pública";
$subtitulo_banner = "Atención primaria integral, prevención y cuidado humanizado para las familias de Oruro.";
$texto_bienvenida = "Somos un establecimiento de salud de primer nivel dedicado a brindar atención médica general, enfermería, vacunación y programas preventivos con calidez, respeto y compromiso comunitario.";
?>

<!-- BANNER ELEGANTE -->
<div class="tarjeta p-4 p-md-5 mb-5 text-white" style="background: linear-gradient(135deg, #0F2942 0%, #0D9488 100%); border: none;">
    <div class="row align-items-center g-4">
        <div class="col-lg-7">
            <span class="badge bg-white bg-opacity-10 text-white px-3 py-2 rounded-pill mb-3">
                Primer Nivel de Atención • Oruro
            </span>
            <h1 class="fw-bold mb-3" style="font-size: 2rem;"><?php echo $titulo_banner; ?></h1>
            <p class="mb-4" style="color: #E2E8F0; line-height: 1.6;"><?php echo $subtitulo_banner; ?></p>
            <a href="index.php?a=servicios" class="btn btn-light fw-semibold px-4 py-2 rounded-pill" style="color: #0F2942;">
                Conocer Servicios
            </a>
        </div>
        <div class="col-lg-5">
            <div class="marco-img" style="background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.3);">
                <img src="img/2.png" alt="Banner Principal">
                <span class="texto-img">Aquí va imagen principal: img/2.png</span>
            </div>
        </div>
    </div>
</div>

<!-- PRESENTACIÓN -->
<h2 class="titulo-seccion">Nuestra Institución</h2>
<div class="tarjeta p-4 mb-5">
    <div class="row align-items-center g-4">
        <div class="col-md-7">
            <p class="mb-0" style="line-height: 1.8; color: #334155; font-size: 0.98rem;">
                <?php echo $texto_bienvenida; ?>
            </p>
        </div>
        <div class="col-md-5">
            <div class="marco-img">
                <img src="img/3.png" alt="Fachada del Centro">
                <span class="texto-img">Aquí va fachada: img/3.png</span>
            </div>
        </div>
    </div>
</div>

<!-- ACCESOS RÁPIDOS -->
<h2 class="titulo-seccion">Atención Principal</h2>
<div class="row g-4">
    <div class="col-md-4">
        <div class="tarjeta p-4 h-100">
            <i class="bi bi-stethoscope fs-3 text-success mb-3 d-block"></i>
            <h6 class="fw-bold">Medicina General</h6>
            <p class="small text-muted mb-0">Consulta médica ambulatoria, diagnóstico oportuno y seguimiento familiar.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="tarjeta p-4 h-100">
            <i class="bi bi-bandaid fs-3 text-success mb-3 d-block"></i>
            <h6 class="fw-bold">Enfermería</h6>
            <p class="small text-muted mb-0">Curaciones, inyectables, nebulizaciones y control de signos vitales.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="tarjeta p-4 h-100">
            <i class="bi bi-shield-check fs-3 text-success mb-3 d-block"></i>
            <h6 class="fw-bold">Vacunación y Prevención</h6>
            <p class="small text-muted mb-0">Inmunización infantil, control prenatal y control de crecimiento.</p>
        </div>
    </div>
</div>