<?php

$el = $this->el('div', [
    'class' => [
        'rf-select'
    ]
]);
if(empty($props['field_name']))
{
    $props['field_name']="name".str_replace(["#","-","page"],"",$id);
}

if(isset($props['multiple']) && $props['multiple'])
{
    $multiple="multiple";
    $braces="[]";
}
else
{
    $multiple="";
    $braces="";
}
?>
<?= $el($props, $attrs) ?>
<?php if(isset($props['label']) && !empty($props['label'])) : ?>
    <label class="uk-form-label" for="input-<?php echo $attrs['data-id'] ?>"><?php echo $props['label'] ?></label>
    <div class="uk-form-controls">
        <?php endif;?>
        <select class="uk-select <?php echo $props['control_size'] ?>" name="<?php echo $props['field_name'] ?><?= $braces ?>" <?= $multiple ?>>
        <?php foreach ($children as $child) : ?>
            <?= $builder->render($child, ['element' => $props]) ?>
        <?php endforeach ?>
        </select>
        <?php if(isset($props['label']) && !empty($props['label'])) : ?>
    </div>
    <?php endif;?>
<?= $el->end() ?>
