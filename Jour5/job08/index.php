<?php
$nb_etudiants = 0;
try
{
	$mysqlClient = new PDO('mysql:host=localhost;port=3307;dbname=jour5;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$sql = 'SELECT * FROM etudiant';
$stmt = $mysqlClient->query($sql);
$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($etudiants as $etudiant){
    $nb_etudiants++;
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
    <h1>Liste</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre d'étudiants</th>


            </tr>
        </thead>
        <tbody>
          
                <tr>
                    <td><?php echo htmlspecialchars($nb_etudiants); ?></td>

                </tr>
       
        </tbody>
    </table>
</body>