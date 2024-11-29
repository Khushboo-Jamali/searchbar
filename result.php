<?php
$conn = mysqli_connect('localhost', 'root', '', 'ajax');
$search = $_POST['v'];

$q = "SELECT * FROM employes WHERE id LIKE '%$search%' OR name LIKE '%$search%' OR email LIKE '%$search%'";


$result = mysqli_query($conn, $q);
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo " <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>

          </tr>";
    }
} else {
    echo "No data found " . $search;
}
