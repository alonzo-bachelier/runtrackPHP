<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;port=3307;dbname=jour5;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sql = 'SELECT AVG(capacite) as moyenne FROM salle';
$stmt = $mysqlClient->query($sql);
$salle = $stmt->fetch(PDO::FETCH_ASSOC);
$moyenne = $salle["moyenne"];
?>

<title>Capacité des Salles</title>
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
                <th>Moyenne</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo htmlspecialchars($moyenne); ?></td>
            </tr>
        </tbody>
    </table>
</body>
