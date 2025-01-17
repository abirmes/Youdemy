<?php
namespace App\Models;


class Tag extends Caracteristiques
{
    public function __call($name, $args)
    {
        if ($name == "instanceWithoutId") {
            if (count($args) == 2) {

                $this->name = $args[0];
                $this->description = $args[1];
            }
        }
    }
}
