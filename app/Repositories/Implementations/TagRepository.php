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
}