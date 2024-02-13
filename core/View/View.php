<?php
// Define the namespace for the View class
namespace core\View;

// Define the View class
class View {
    // Properties to store title and content
    private $title;
    private $content;

    // Constructor to initialize title and content
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    // Method to render the view
    public function render()
    {
        // Replace the '{content}' placeholder in the template with the actual content
        $templateContent = str_replace('{content}', $this->content, file_get_contents('public/template/template.php'));

        // Replace the '{title}' placeholder in the template with the actual title
        return str_replace('{title}', $this->title, $templateContent);
    }
}