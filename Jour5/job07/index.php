<?php
try
{
	$mysqlClient = new PDO('mysql:host=localhost;port=3307;dbname=jour5;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$sql = 'SELECT * FROM etudiant WHERE naissance > "2006-07-06"';
$stmt = $mysqlClient->query($sql);
$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <h1>Liste des étudiants(-18ans)</h1>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
                <tr>
                    <td><?php echo htmlspecialchars($etudiant['prenom']); ?></td>
                    <td><?php echo htmlspecialchars($etudiant['nom']); ?></td>
                    <td><?php echo htmlspecialchars($etudiant['naissance']); ?></td>
                    <td><?php echo htmlspecialchars($etudiant['sexe']); ?></td>
                    <td><?php echo htmlspecialchars($etudiant['email']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>