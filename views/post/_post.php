<div class="post-item">
    <p><?= $model->name ?><p>
    <p><?= $model->email ?></p>
    <p><?= $model->message ?></p>
</div>

<style>
    .post-item {
        display: flex;
        column-gap: 20px;
    }
</style>