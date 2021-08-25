<?php
class RecordFinderContent
{
    public function getRecords(string $type)
    {
        $query = "
SELECT 
 *
FROM
 `usr_verenabo`.`".$type."`
ORDER BY
 `position`
ASC";

        $mysqli = new mysqli("localhost", "root", "", "usr_verenabo");
        $stmt = $mysqli->query($query);
        $array = [];
        while (is_array( $row = mysqli_fetch_assoc($stmt)))
        {
            $array[]= $row;
        }
        return $array;
    }

    public function getRecord(string $type, int $position)
    {
        $query = "
SELECT 
 *
FROM
 `usr_verenabo`.`".$type."`
WHERE
 `position` = ".$position;

        $mysqli = new mysqli("localhost", "root", "", "usr_verenabo");
        $stmt = $mysqli->query($query);
        $result = mysqli_fetch_assoc($stmt);
        return $result;
    }
}