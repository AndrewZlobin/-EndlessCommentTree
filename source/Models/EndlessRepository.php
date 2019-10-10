<?php
namespace Andrew\Endless\Models;

use Andrew\Endless\Core\DB;
use Andrew\Endless\Core\Repository;

class EndlessRepository implements Repository
{
    private $db;

    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM `tree_nodes`';
        return $this->db->getAll($sql);
    }

    public function getParentNode(int $node_parent)
    {
        $sql = 'SELECT * FROM `tree_nodes`
                WHERE `node_parent` =: node_parent';
        $params = ['node_parent'=>$node_parent];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function getNodeParentInt(int $id_node)
    {
        $sql = 'SELECT * FROM `tree_nodes` WHERE `id_node`=:id_node';
        $params = ['id_node' => $id_node];
        return $this->db->paramsGetOne($sql, $params);
    }
}