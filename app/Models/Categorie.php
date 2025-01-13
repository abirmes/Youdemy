<?php


class Categorie extends Caracteristiques
{

    public function __call($name , $args)
    {
        if($name == "instanceWithName")
        {
            if(count($args) == 1)
            {
                $this->name = $args[0];
            }
        }
    }

}