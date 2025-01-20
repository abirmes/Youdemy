<?php


class TagRepository
{
    private TagDAO $tagDAO;
    public function __construct()
    {
        $this->tagDAO = new TagDAO();
    }

    public function create(Tag $tag)
    {
        return $this->tagDAO->create($tag);
    }

    public function findAll()
    {
        return $this->tagDAO->findAll();
    }
    public function delete(int $id)
    {
        $this->tagDAO->delete($id);
    }
}