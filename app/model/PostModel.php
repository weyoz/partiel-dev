<?php

class PostModel extends AppModel
{
    public function userRegister($options)
    {
        try
        {
            // Requete SELECT
            $query = "INSERT INTO " . DB_PREFIX . $options['table'] . "(". $options['column_name1'] . " , " . $options['colomn_name2'] .")";
            $query .= " VALUES (" . $this->connexion->quote($options['mail']) . " , " . "'" . $options['password'] . "'" . ")";
            // Traitement de la requete
            var_dump($query);
            $cursor = $this->connexion->query($query);

            return true;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function userLogin($opstions)
    {
        
    }
}
