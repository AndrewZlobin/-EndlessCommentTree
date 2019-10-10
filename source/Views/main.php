<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php foreach ($all_nodes as $node): ?>
            <?php if ($node['node_role'] == 'parent'): ?>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="/parent/show/<?php echo $node['id_node']; ?>"><?php echo $node['node_desc']; ?></a>
                </li>
            <?php elseif ($node['node_role'] == 'child_first'): ?>
                <li class="breadcrumb-item">
                    <a href="/first/show/<?php echo $node['id_node']; ?>"><?php echo $node['node_desc']; ?></a>
                </li>
            <?php else: ?>
                <li class="breadcrumb-item">
                    <a href="/second/show/<?php echo $node['id_node']; ?>"><?php echo $node['node_desc']; ?></a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ol>
</nav>


<div class="container">

    <?php
        foreach ($all_nodes as $node):
    ?>
        <div class="row">
            <?php if ($node['node_role'] == 'parent'): ?>
                <div class="col-sm-offset-0">
                    <div class="card text-white bg-success card text-center mb-3" style="max-width: 30rem;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <h2><?php echo $node['node_desc']; ?></h2>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">"Роль" узла: <?php echo $node['node_role']; ?></h5>
                                    <p class="card-text">ID узла: <?php echo $node['id_node']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($node['node_role'] == 'child_first'): ?>
                <div class="row">
                    <div class="col-sm-offset-4">
                        <div class="card text-white bg-warning card text-center mb-3" style="max-width: 30rem;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <h2><?php echo $node['node_desc']; ?></h2>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">"Роль" узла: <?php echo $node['node_role']; ?></h5>
                                        <p class="card-text">ID узла: <?php echo $node['id_node']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php else: ?>
            <div class="row">
                <div class="col-sm-offset-8">
                    <div class="card text-white bg-danger card text-center mb-3" style="max-width: 30rem;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <h2><?php echo $node['node_desc']; ?></h2>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">"Роль" узла: <?php echo $node['node_role']; ?></h5>
                                    <p class="card-text">ID узла: <?php echo $node['id_node']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    </div>
</div>
