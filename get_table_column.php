<?php
SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='yourdatabasename' 
    AND `TABLE_NAME`='yourtablename';


    
SELECT CONCAT('\'', GROUP_CONCAT(column_name ORDER BY ordinal_position SEPARATOR '\', \''), '\'') AS columns FROM information_schema.columns WHERE table_schema = 'fizo' AND table_name = 'user001';
?>