<?php
session_start();

$precios = [
    "cantidad"  => 6.95, // hamburguesa
    "cantidad2" => 8.50, // pasta al pesto
    "cantidad3" => 7.90, // pizza caprese
    "cantidad4" => 9.20, // quinoa con verdura
    "cantidad5" => 1.20, // agua
    "cantidad6" => 1.80, // cerveza
    "cantidad7" => 1.80  // refresco
];

$nombres = [
    "cantidad"  => "Hamburguesa",
    "cantidad2" => "Pasta",
    "cantidad3" => "Pizza",
    "cantidad4" => "Quinoa",
    "cantidad5" => "Agua",
    "cantidad6" => "Cerveza",
    "cantidad7" => "Refresco"
];

$total = 0;
$detalle = [];


foreach ($precios as $pedido => $precio) {
    $cantidad = isset($_POST[$pedido]) ? (int)$_POST[$pedido] : 0;
    if ($cantidad > 0) {
        $subtotal = $cantidad * $precio;
        $detalle[] = [
            "producto" => $nombres[$pedido],
            "cantidad" => $cantidad,
            "precio"   => $precio,
            "subtotal" => $subtotal
        ];
        $total += $subtotal;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Pedido</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Resumen de tu pedido</h1>

        <?php if (count($detalle) > 0): ?>
            <table cellpadding="8" cellspacing="0">
                <tr>
                    <th>Producto</th>
                    <th>PVP</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
                <?php foreach ($detalle as $item): ?>
                    <tr>
                        <td><?= $item["producto"] ?></td>
                        <td><?= number_format($item["precio"], 2) ?></td>
                        <td><?= $item["cantidad"] ?></td>
                        <td><?= number_format($item["subtotal"], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" align="right"><strong>Total:</strong></td>
                    <td><strong><?= number_format($total, 2) ?> €</strong></td>
                </tr>
            </table>
        <?php else: ?>
            <p>No has pedido nada 🤷‍♂️</p>
        <?php endif; ?>

        <br><a href="index.php">Volver a la carta</a>
    </main>
</body>
</html>