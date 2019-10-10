<?php
namespace Andrew\Endless\Controllers;

use Andrew\Endless\Core\Controller;
use Andrew\Endless\Models\EndlessRepository;

class ParentController extends Controller
{

    private $endlessRepository;

    public function __construct()
    {
        $this->endlessRepository = new EndlessRepository();
    }

    public function showAction($id_node)
    {
        $content = 'parent.php';
        $template = 'template.php';
        $parent_nodes = $this->endlessRepository->getNodeParentInt($id_node);

        $data = [
            'parent_nodes' => $parent_nodes
        ];

        echo $this->renderPage($content, $template, $data);
    }
}