<?php
$superficie_total = 0;
try {
    $mysqlClient = new PDO('mysql:host=localhost;port=3307;dbname=jour5;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sql = 'SELECT superficie FROM etage';
$stmt = $mysqlClient->query($sql);
$superficies = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($superficies as $superficie) {
    $superficie_total += $superficie['superficie'];
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
    <h1>Superficie</h1>
    <table>
        <thead>
            <tr>
                <th>Superficie totale :</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo htmlspecialchars($superficie_total); ?></td>
            </tr>
        </tbody>
    </table>
</body>
