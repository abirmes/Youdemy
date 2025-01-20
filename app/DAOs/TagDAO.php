<?php


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

    public function findAll()
    {
        $query = "SELECT id, name, description FROM `tags` ";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS,Tag::class);
    }

    public function delete(int $id)
    {
        $query = " DELETE FROM `tags` where id = " .$id .";";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
    }

    public function update(Tag $tag)
    {
        $query = "UPDATE `tags` SET name = " .$tag->getName() . " WHERE id = " .$tag->getId().";";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchObject(Tag::class);
    }

}


