<?php
try
{
	$mysqlClient = new PDO('mysql:host=localhost;port=3307;dbname=jour5;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$sql = 'SELECT * FROM salle';
$stmt = $mysqlClient->query($sql);
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<title>Salles</title>
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
    <h1>Liste des étudiants</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Capacité</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($salles as $salle): ?>
                <tr>
                    <td><?php echo htmlspecialchars($salle['nom']); ?></td>
                    <td><?php echo htmlspecialchars($salle['capacite']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>