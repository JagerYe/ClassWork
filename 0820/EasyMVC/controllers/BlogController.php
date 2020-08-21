<?php
class BlogController extends Controller
{
    function list($x)
    {
        echo $x;
    }

    function title($title)
    {
        $blog = $this->model("Blog");
        $blog->title = $title;
        $this->view("Blog/title",$blog);
    }
}
