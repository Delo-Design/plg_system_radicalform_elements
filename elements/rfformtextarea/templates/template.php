<?php

$el = $this->el('div', [
    'class' => [
        'rf-textarea'
    ]
]);

if(empty($props['field_name']))
{
    $name="name".str_replace(["#","-","page"],"",$id);
}
else
{
    $name=$props['field_name'];
}
?>

<?= $el($props, $attrs) ?>
    <?php if(isset($props['label']) && !empty($props['label'])) : ?>
        <label class="uk-form-label" for="textarea-<?php echo $attrs['data-id'] ?>"><?php echo $props['label'] ?></label>
        <div class="uk-form-controls">
    <?php endif;?>
            <textarea
                <?php if(isset($props['label']) && !empty($props['label'])) : ?>
                    id="texterea-<?php echo $attrs['data-id'] ?>"
                <?php endif;?>
                class="uk-textarea <?php echo $props['inputcss'] ?>"
                name="<?php echo $name ?>"
                placeholder="<?php echo $props['inputplaceholder'] ?>"
                <?php if(!empty($props['inputrows'])) : ?>rows="<?php echo $props['inputrows'] ?>"<?php endif; ?>
            ></textarea>
    <?php if(isset($props['label']) && !empty($props['label'])) : ?>
        </div>
    <?php endif;?>
<?= $el->end() ?>
