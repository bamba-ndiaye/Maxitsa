<?php

namespace App\core\abstract;

class AbstractController 
{
    protected $layout = 'login.layout.html.php';

    public function renderHTML($view, $data = [])
    {
        // Extract data to variables
        extract($data);

        // Start output buffering
        ob_start();

        // Include the view file
        require_once __DIR__ . '/../../../templates/' . $view;

        // Get the content of the buffer
        $contentForLayout = ob_get_clean();

        // Include the layout file
        require_once __DIR__ . '/../../../templates/layout/' . $this->layout;
}
}