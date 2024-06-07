<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;port=3307;dbname=jour5;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sql = 'SELECT id, nom, id_etage, capacite FROM salle ORDER BY capacite ASC';
$stmt = $mysqlClient->query($sql);
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<title>Liste des étudiants</title>
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

<body>
    <h1>Capacité des Salles</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Id Étage</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salles as $salle): ?>
            <tr>
                <td><?php echo htmlspecialchars($salle['id']); ?></td>
                <td><?php echo htmlspecialchars($salle['nom']); ?></td>
                <td><?php echo htmlspecialchars($salle['id_etage']); ?></td>
                <td><?php echo htmlspecialchars($salle['capacite']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
