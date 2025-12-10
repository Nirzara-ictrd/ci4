<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products List</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="/products/create" class="btn btn-sm btn-primary">
            <i class="bi bi-plus-circle"></i> Add New Product
        </a>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th width="60">#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Added By</th>
                        <th width="150" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($products)) : ?>
                        <?php $sr = 1; ?>
                        <?php foreach ($products as $p) : ?>
                            <tr>
                                <td><?= $sr++ ?></td>
                                <td><?= esc($p['title']) ?></td>
                                <td><?= esc($p['description']) ?></td>
                                <td><?= esc($p['price']) ?></td>
                                <td><?= esc($p['added_by']) ?></td>
                                <td class="text-end">
                                    <div class="btn-group" role="group">
                                        <a href="/products/edit/<?= $p['id'] ?>" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="/products/delete/<?= $p['id'] ?>" class="btn btn-sm btn-outline-danger"
                                           onclick="return confirm('Are you sure you want to delete this product?')">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5" class="text-center">
                                No products found. <a href="/products/create">Add your first product</a>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
