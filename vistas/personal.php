<?php
// === CUANDO TENGAS LOS MÉDICOS, SOLO AGREGA SUS DATOS DENTRO DE ESTE ARREGLO ===
// Ejemplo:
// ["Dr. Juan Pérez", "Médico General", "08:00 - 14:00"],
$medicos = [
    // Aquí irán los médicos cuando los agregues
];
?>

<h2 class="titulo-seccion">Lista de Médicos</h2>
<div class="tarjeta p-4">
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>N°</th>
                    <th>Nombre del Médico</th>
                    <th>Área / Función</th>
                    <th>Horario de Atención</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($medicos)) { ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted py-5">
                            <i class="bi bi-person-lines-fill fs-3 d-block mb-2"></i>
                            Aún no se han registrado médicos en la lista.
                        </td>
                    </tr>
                <?php } else {
                    $i = 1;
                    foreach ($medicos as $m) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td class="fw-semibold"><?php echo $m[0]; ?></td>
                        <td><?php echo $m[1]; ?></td>
                        <td><?php echo $m[2]; ?></td>
                    </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</div>