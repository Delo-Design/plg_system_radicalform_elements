<?php

//Wrap
$wrap = $this->el('div');

// Button
$button = $this->el('button', [

    'class' => $this->expr([
        'rf-upload',
        'rf-upload-button-text',
        'uk-width-1-1 {@fullwidth}',
        'uk-{button_style: link-\w+}' => ['button_style' => $props['button_style']],
        'uk-button uk-button-{!button_style: |link-\w+} [uk-button-{button_size}]' => ['button_style' => $props['button_style']],
    ], $props),
    'title' => ['{label}'],
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

<?php if(!empty($props['label'])) : ?>
<?= $wrap($props, $attrs) ?>
    <div class="uk-form-custom" uk-form-custom>
        <?= $button($props) ?>
            <?php if ($props['icon']) : ?>
                <?php if ($props['icon_align'] == 'left') : ?>
                    <span uk-icon="<?= $props['icon'] ?>"></span>
                <?php endif ?>
                    <span class="uk-text-middle"><?= $props['label'] ?></span>
                <?php if ($props['icon_align'] == 'right') : ?>
                    <span uk-icon="<?= $props['icon'] ?>"></span>
                <?php endif ?>
            <?php else : ?>
                <?= $props['label'] ?>
            <?php endif ?>
        </button>
        <input class="rf-upload-button" name="<?= $name ?>" type="file">
    </div>
    <div class="rf-filenames-list"></div>
</div>
<?php endif; ?>