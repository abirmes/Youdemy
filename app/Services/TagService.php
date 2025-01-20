<?php



class TagService 
{
    private TagRepository $tagRepository;
    public function __construct()
    {
        $this->tagRepository = new TagRepository;
    }
    public function create(Tag $tag){
         $name = $tag->getName() ;
        $description = $tag->getDescription() ;
        if( $name == "" || $description = "" )
        {
            throw new Exception("empty field ");
        }
        $tag =$this->tagRepository->create($tag);
        if ($tag->getId()== 0)
        {
            throw new Exception("database problem");
        }
        return  $tag;
    }
}