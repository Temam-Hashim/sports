<?php

  function get_match(){
    global $connect;
    $query = "SELECT * FROM match where match status = 'upcoming'";
    $result = mysqli_query($connect,$query);

    return $result;

  }

?>