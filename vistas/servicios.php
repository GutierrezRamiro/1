<?php
// === EDITA O AGREGA SERVICIOS EN ESTA LISTA ===
$lista_servicios = [
    ["Medicina General", "Consulta médica externa, diagnóstico clínico y orientación preventiva."],
    ["Enfermería", "Inyectables, curaciones, retiro de puntos, nebulizaciones y signos vitales."],
    ["Control Prenatal", "Seguimiento integral del embarazo y cuidado materno infantil."],
    ["Control de Niño Sano", "Control de peso, talla, nutrición y desarrollo infantil."],
    ["Odontología", "Limpieza dental, curaciones, extracciones simples y salud bucal."],
    ["Laboratorio", "Toma de muestras y análisis esenciales de apoyo diagnóstico."],
    ["Farmacia", "Provisión y orientación sobre medicamentos esenciales."],
    ["Certificados Médicos", "Valoración clínica general para certificados de salud."]
];
?>

<h2 class="titulo-seccion">Servicios de Salud</h2>
<div class="row g-4">
    <?php foreach ($lista_servicios as $s) { ?>
    <div class="col-md-6 col-lg-4">
        <div class="tarjeta p-4 h-100">
            <h6 class="fw-bold mb-2" style="color: #0F2942;">
                <i class="bi bi-check-circle-fill text-success me-2"></i><?php echo $s[0]; ?>
            </h6>
            <p class="small text-muted mb-0" style="line-height: 1.6;"><?php echo $s[1]; ?></p>
        </div>
    </div>
    <?php } ?>
</div>