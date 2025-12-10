<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Edit Product</h2>

    <form action="/products/update/<?= $product['id'] ?>" method="post">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="<?= esc($product['title']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"><?= esc($product['description']) ?></textarea>
        </div>
        
        <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" name="price" class="form-control" step="0.01" min="0"
           value="<?= esc($product['price']) ?>" required>
</div>


        <button class="btn btn-primary">Update</button>
        <a href="/products" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?= $this->endSection() ?>
