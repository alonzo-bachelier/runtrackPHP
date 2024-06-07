<?php
$results = [];
try {
    $mysqlClient = new PDO('mysql:host=localhost;port=3307;dbname=jour5;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$salle = 'SELECT * FROM salle';
$etage = 'SELECT * FROM etage';

$stmt_salle = $mysqlClient->query($salle);
$stmt_etage = $mysqlClient->query($etage);

$salles = $stmt_salle->fetchAll(PDO::FETCH_ASSOC);
$etages = $stmt_etage->fetchAll(PDO::FETCH_ASSOC);

foreach ($salles as $salle) {
    foreach ($etages as $etage) {
        if ($salle["id_etage"] == $etage["numero"]) {
            $results[] = [$salle["nom"], $etage["nom"]];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste salle/étages</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste salle/étage</h1>
    <table>
        <thead>
            <tr>
                <th>Nom de la salle</th>
                <th>Nom de l'étage</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result): ?>
                <tr>
                    <td><?php echo htmlspecialchars($result[0]); ?></td>
                    <td><?php echo htmlspecialchars($result[1]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
