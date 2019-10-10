<?php


namespace Andrew\Endless\Controllers;


use Andrew\Endless\Core\Controller;
use Andrew\Endless\Models\EndlessRepository;

class SecondController extends Controller
{
    private $endlessRepository;

    public function __construct()
    {
        $this->endlessRepository = new EndlessRepository();
    }

    public function showAction($id_node)
    {
        $content = 'second.php';
        $template = 'template.php';
        $second_nodes = $this->endlessRepository->getNodeParentInt($id_node);

        $data = [
            'second_nodes' => $second_nodes
        ];

        echo $this->renderPage($content, $template, $data);
    }
}