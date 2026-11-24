<?php
// === EDITA AQUÍ LOS AMBIENTES Y SUS FOTOS ===
$ambientes = [
    ["Sala de Espera", "Espacio amplio y ordenado para la recepción de pacientes.", "img/4.png"],
    ["Consultorios Médicos", "Ambientes equipados para consulta general y control prenatal.", "img/5.png"],
    ["Enfermería y Vacunatorio", "Área destinada a inmunizaciones, curaciones y control vital.", "img/6.png"]
];
?>

<h2 class="titulo-seccion">Ambientes del Centro de Salud</h2>
<div class="row g-4">
    <?php foreach ($ambientes as $amb) { ?>
    <div class="col-md-4">
        <div class="tarjeta p-3 h-100">
            <div class="marco-img mb-3">
                <img src="<?php echo $amb[2]; ?>" alt="<?php echo $amb[0]; ?>">
                <span class="texto-img">Aquí va foto: <?php echo $amb[2]; ?></span>
            </div>
            <h6 class="fw-bold mb-1" style="color: #0F2942;"><?php echo $amb[0]; ?></h6>
            <p class="small text-muted mb-0"><?php echo $amb[1]; ?></p>
        </div>
    </div>
    <?php } ?>
</div>