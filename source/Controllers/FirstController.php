<?php


namespace Andrew\Endless\Controllers;


use Andrew\Endless\Core\Controller;
use Andrew\Endless\Models\EndlessRepository;

class FirstController extends Controller
{
    private $endlessRepository;

    public function __construct()
    {
        $this->endlessRepository = new EndlessRepository();
    }

    public function showAction($id_node)
    {
        $content = 'first.php';
        $template = 'template.php';
        $first_nodes = $this->endlessRepository->getNodeParentInt($id_node);

        $data = [
            'first_nodes' => $first_nodes
        ];

        echo $this->renderPage($content, $template, $data);
    }
}