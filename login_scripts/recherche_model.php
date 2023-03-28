<?php

class MyModel {

    public function getData($word) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "projet";
        $con = new mysqli($servername, $username, $password,$dbname);
        $stmt = $con->prepare("SELECT * FROM offre where titre_offre LIKE CONCAT('%', ?, '%')");
        $stmt->bind_param("s", $word);
        $stmt->execute();
        $all_product = $stmt->get_result();
        return $all_product;
    }
}
?>