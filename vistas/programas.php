<?php
// === EDITA AQUÍ LOS PROGRAMAS PREVENTIVOS ===
$programas = [
    [
        "titulo" => "Programa Ampliado de Inmunización (PAI)",
        "detalle" => "Vacunación gratuita según esquema nacional para niños menores de 5 años, gestantes, adultos mayores y campañas estacionales."
    ],
    [
        "titulo" => "Salud Materno Infantil",
        "detalle" => "Control prenatal periódico, suplementación nutricional, promoción de la lactancia materna y vigilancia del crecimiento."
    ],
    [
        "titulo" => "Prevención de Enfermedades Crónicas",
        "detalle" => "Control regular de presión arterial, glucosa y orientación sobre hábitos de vida saludable."
    ],
    [
        "titulo" => "Atención Integral al Adulto Mayor",
        "detalle" => "Valoración médica preferencial, seguimiento de tratamientos y prevención de complicaciones."
    ]
];
?>

<h2 class="titulo-seccion">Programas de Salud y Prevención</h2>
<div class="row g-4">
    <?php foreach ($programas as $p) { ?>
    <div class="col-md-6">
        <div class="tarjeta p-4 h-100">
            <h6 class="fw-bold mb-2 text-success"><?php echo $p["titulo"]; ?></h6>
            <p class="small text-muted mb-0" style="line-height: 1.7;"><?php echo $p["detalle"]; ?></p>
        </div>
    </div>
    <?php } ?>
</div>