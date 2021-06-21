<?php

$el = $this->el('div', [
    'class' => [
        'hika-checkboxes'
    ]
]);

$count = count($children);
$i = 1;

if(empty($props['field_name']))
{
    $props['field_name']="name".str_replace(["#","-","page"],"",$id);
}

?>

<?= $el($props, $attrs) ?>
<?php if(isset($props['label']) && !empty($props['label'])) : ?>
    <label class="uk-form-label" for="input-<?php echo $attrs['data-id'] ?>"><?php echo $props['label'] ?></label>
    <div class="uk-form-controls">
        <?php endif;?>
        <?php foreach ($children as $child) : ?>
            <?= $builder->render($child, ['element' => $props]) ?>
            <?php $i++ ?>
        <?php endforeach ?>
        <?php if(isset($props['label']) && !empty($props['label'])) : ?>
    </div>
    <?php endif;?>
<?= $el->end() ?>
