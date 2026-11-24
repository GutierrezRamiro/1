<?php
// === EDITA AQUÍ LA MISIÓN, VISIÓN E HISTORIA ===
$historia = "El Centro de Salud Asistencia Pública forma parte de la red de atención primaria de la ciudad de Oruro, brindando servicios médicos accesibles y cercanos a toda la población.";
$mision   = "Ofrecer atención primaria de salud integral, oportuna y con calidez humana, promoviendo la prevención y el bienestar de las familias orureñas.";
$vision   = "Consolidarnos como un centro de salud referente por nuestra calidad asistencial, ética profesional y cercanía con la comunidad.";
?>

<h2 class="titulo-seccion">Nosotros</h2>
<div class="tarjeta p-4 mb-4">
    <p class="mb-0" style="line-height: 1.8; color: #334155;"><?php echo $historia; ?></p>
</div>

<div class="row g-4">
    <div class="col-md-6">
        <div class="tarjeta p-4 h-100">
            <h5 class="fw-bold text-success mb-2"><i class="bi bi-bullseye me-2"></i>Misión</h5>
            <p class="small text-muted mb-0" style="line-height: 1.7;"><?php echo $mision; ?></p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tarjeta p-4 h-100">
            <h5 class="fw-bold text-primary mb-2"><i class="bi bi-eye me-2"></i>Visión</h5>
            <p class="small text-muted mb-0" style="line-height: 1.7;"><?php echo $vision; ?></p>
        </div>
    </div>
</div>