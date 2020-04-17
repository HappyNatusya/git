<div class="admin-default-index">
    <!-- <h1><?= $this->context->action->uniqueId ?></h1> -->
    <!-- admin/default/index -->
    <h1>АДМИНКА гууд</h1>
    <p>
        Ты щас на странице <?= $this->context->action->id ?>.
        Эта штука пренадлежит "<?= get_class($this->context) ?>"
        в "<?= $this->context->module->id ?>" модуле.
    </p>
    <p>
        <code><?= __FILE__ ?></code>
    </p>
    
</div>
