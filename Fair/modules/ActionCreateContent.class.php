<?php
class ActionCreateContent
{
    const BLOG_TYPE_FOOD = 'food';
    const BLOG_TYPE_FASHION = 'fashion';
    const BLOG_TYPE_BEAUTY = 'beauty';
    const BLOG_TYPE_LIFESTYLE = 'lifestyle';

    public function createContent(string $content, string $type)
    {
        $tablename =  "`usr_verenabo`.`".$type."`";
        $query = "
INSERT INTO
 ".$tablename."
 (`position`, `content`)
VALUES
 ( ".$this->getPosition($tablename)." + 1, '".$content."')";
        $mysqli = new mysqli("localhost", "root", "", "usr_verenabo");
        $mysqli->query($query);
    }

    private function getPosition(string $tablename)
    {
        $query = "
SELECT 
 `position` 
FROM  
 ".$tablename."
ORDER BY 
 'DESC' 
LIMIT 1";
        $mysqli = new mysqli("localhost", "root", "", "usr_verenabo");
        $stmt = $mysqli->query($query);
        $record = mysqli_fetch_assoc($stmt);
        $position = $record['position'] ?? 0;
        return $position;
    }
}