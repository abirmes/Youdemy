<?php



class TagController
{
    private TagService $tagService;

    public function __construct()
    {
        $this->tagService = new TagService();
    }

    public function createTag(): Tag
    {

        $name = "tag name";
        $descrition = "tag description";
        $tag = new Tag();
        $tag->instanceWithoutId($name , $descrition);

        try{
            $tag = $this->tagService->create($tag);
        } catch (Exception $e)
        {
            echo "message: " .$e->getMessage();
        }
        
        die ($tag);
    }
}