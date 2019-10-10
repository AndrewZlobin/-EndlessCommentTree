<?php
namespace Andrew\Endless\Controllers;

use Andrew\Endless\Core\Controller;
use Andrew\Endless\Models\EndlessRepository;

class IndexController extends Controller
{
    private $endlessRepository;

    public function __construct()
    {
        $this->endlessRepository = new EndlessRepository();
    }

    public function indexAction()
    {
        $content = 'main.php';
        $template = 'template.php';
        $all_nodes = $this->endlessRepository->getAll();

        $data = [
            'all_nodes'=>$all_nodes
        ];


        echo $this->renderPage($content, $template, $data);
    }
}