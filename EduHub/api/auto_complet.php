<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../db_conn.php';

if(isset($_POST['s'])){
    
    $key = "%{$_POST['s']}%";
    $sql = "SELECT * FROM data WHERE title LIKE ? OR link LIKE ? LIMIT 5";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$key,$key]);
    
    if ($stmt->rowCount() > 0) {
        $results = $stmt->fetchAll();
        foreach ($results as $result) {
            ?>
                         <li>
                             <a  href="<?= $result['link'] ?>" ><?= $result['title'] ?></a>
                         </li>

            <?php
        }
    } else {
        echo "not found";
    }
}
?>
<?php

   

?>

