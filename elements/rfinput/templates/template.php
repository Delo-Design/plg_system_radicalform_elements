<?php

$el = $this->el('div');
if(empty($props['field_name']))
{
    $name="name".str_replace(["#","-","page"],"",$id);
}
else
{
    $name=$props['field_name'];
}
$input_attrs = [
    'id' => !empty($props['field_id']) ? $props['field_id'] : '',

    'type' => $props['input_type'],
    'class' => $this->expr([
        'uk-input',
        'rf-input',
        '[uk-form-{input_size}]' => ['input_size' => $props['input_size']],
        !empty($props['input_css']) ? $props['input_css'] : ''
    ]),
    'name' => $name,
    'placeholder' => $props['input_placeholder']
];

if($props['input_required'])
{
    $input_attrs['required'] = true;
}

if(!empty($props['input_pattern']))
{
    $input_attrs['pattern'] = $props['input_pattern'];
}

if(!empty($props['attrs']))
{
    $dim=explode("\n", $props['attrs']);
    foreach ($dim as $dimElement)
    {
        $dimExplodedElement = explode("=", $dimElement);
        if(count($dimExplodedElement)>1)
        {
            if (trim(str_replace(array("'",'"'),'',$dimExplodedElement[1]))=="")
            {
                $input_attrs[$dimExplodedElement[0]]= true;
            }
            else
            {
                $input_attrs[$dimExplodedElement[0]] = str_replace(array("'",'"'),'',$dimExplodedElement[1]);
            }
        }
        else
        {
            $input_attrs[$dimExplodedElement[0]] = true;
        }
    }
}
$input = $this->el('input', $input_attrs);
?>

<?php echo $el($props, $attrs) ?>
<?php if(isset($props['label']) && !empty($props['label'])) : ?>
    <label class="uk-form-label rf-label" for="input-<?php echo $attrs['data-id'] ?>"><?php echo $props['label'] ?></label>
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
