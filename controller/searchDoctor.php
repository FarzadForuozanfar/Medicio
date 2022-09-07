<?php
    if(isset($_POST['search-bar']))
    {
        $result = array();
        $input_txt = $_POST['search-bar'];
        include "model/database.php";
        $records = $db->query("SELECT proficiencies.proff_name, doctors.id, doctors.name, doctors.image FROM doctors 
                                INNER JOIN proficiencies ON proficiencies.id = doctors.proficiency_id
                                WHERE name LIKE '%$input_txt%'");
        if($records->num_rows > 0)
        {
            while($record = $records->fetch_assoc())
            {
                $result[] = $record; 
            }
            echo json_encode($result,true);
        }

        else
        {
            $result[] = '{"image":null,"name":"null","id":null, "proff_name":"null"}';
            echo json_encode($result, true);
        }
    }
?>