<?php
// adds a functions that sanatises the link and form so no sql injections can be done
    function sanitize ($raw_data) {
        global $conn;
        $data = mysqli_real_escape_string($conn, $raw_data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>