<?php

namespace App\DAOs;

use App\Core\Database;
use App\Models\Tag;

class TagDAO{

    public function create(Tag $tag)
    {
        $query = "INSERT into `tags`(name , description) VALUES ( '" .$tag->getName() ."','" . $tag->getDescription()."'); ";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();

        $tag->setId(Database::getInstance()
            ->getConnection()
            ->lastInsertId());



        return $tag;
    }
}