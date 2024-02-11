<?php
namespace app\View;

class View {

    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }


    public function render()
    {
        $templateContent = str_replace('{content}', $this->content, file_get_contents('public/template/template.php'));
        return str_replace('{title}', $this->title, $templateContent);
    }

}