<?php

$el = $this->el('div', [
    'class' => [
        'rf-radio'
    ]
]);
if(!isset($id))
{
    $id=$node->attrs['data-id'] ;
}
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
<?php endif;?>
<?php
if(isset($props['linebreak']) && $props['linebreak'])
{
    $class  = "uk-grid";
    $class .= ($props['linebreak_gap'] != '') ? " uk-grid-" . $props['linebreak_gap'] : "";
}
else
{
    $class="uk-form-controls";
}
?>
    <div class="<?= $class ?>">
        <?php foreach ($children as $child) : ?>
            <?= $builder->render($child, ['element' => $props, 'i' => $i]) ?>
            <?php $i++ ?>
        <?php endforeach ?>
    </div>
<?= $el->end() ?>
