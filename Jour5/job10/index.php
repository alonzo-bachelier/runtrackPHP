<?php
$capacite_total = 0;
try {
    $mysqlClient = new PDO('mysql:host=localhost;port=3307;dbname=jour5;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sql = 'SELECT capacite FROM salle';
$stmt = $mysqlClient->query($sql);
$capacites = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($capacites as $capacite) {
    $capacite_total += $capacite['capacite'];
}
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
    <h1>capacite</h1>
    <table>
        <thead>
            <tr>
                <th>capacite totale :</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo htmlspecialchars($capacite_total); ?></td>
            </tr>
        </tbody>
    </table>
</body>
