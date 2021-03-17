<?php

$el = $this->el('div', [
    'class' => [
        'hika-input'
    ]
]);

$input_attrs = [
    'id' => 'input-' . $attrs['data-id'],
    'type' => $props['input_type'],
    'class' => $this->expr([
        'uk-input',
        '[uk-form-{input_size}]' => ['input_size' => $props['input_size']],
        !empty($props['input_css']) ? $props['input_css'] : ''
    ]),
    'name' => $props['input_name'],
    'placeholder' => $props['input_placeholder']
];

if($props['input_required'])
{
    $input_attrs['required'] = 'required';
}

if(!empty($props['input_pattern']))
{
    $input_attrs['pattern'] = $props['input_pattern'];
}

$input = $this->el('input', $input_attrs);
?>

<?php echo $el($props, $attrs) ?>
<?php if(isset($props['label']) && !empty($props['label'])) : ?>
    <label class="uk-form-label" for="input-<?php echo $attrs['data-id'] ?>"><?php echo $props['label'] ?></label>
    <div class="uk-form-controls">
        <?php endif;?>
        <?php if ($props['icon']) : ?>
        <div class="uk-inline uk-width-1-1">
            <span class="uk-form-icon<?php if ($props['icon_align'] == 'right') : ?> uk-form-icon-flip<?php endif; ?>" uk-icon="icon: <?php echo $props['icon'] ?>"></span>
        <?php endif; ?>
            <?php echo $input ?>
        <?php if ($props['icon']) : ?>
        </div>
        <?php endif; ?>
        <?php if(isset($props['label']) && !empty($props['label'])) : ?>
    </div>
    <?php endif;?>
<?php echo $el->end() ?>
