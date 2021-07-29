<?php

//Wrap
$wrap = $this->el('div');


$rfCall="";
if(!empty($props['js0']) && ($props['js0']))
{
    $rfCall="0";
}
if(!empty($props['js1']) && ($props['js1']))
{
    $rfCall.="1";
}
if(!empty($props['js2']) && ($props['js2']))
{
    $rfCall.="2";
}
if(!empty($props['js3']) && ($props['js3']))
{
    $rfCall.="3";
}
// Button
if ($rfCall=="2")
{
    $button = $this->el('button', [

        'class' => $this->expr([
            'el-content',
            'rf-button-send',
            'uk-width-1-1 {@fullwidth}',
            'uk-{button_style: link-\w+}' => ['button_style' => $props['button_style']],
            'uk-button uk-button-{!button_style: |link-\w+} [uk-button-{button_size}]' => ['button_style' => $props['button_style']],
        ], $props)
    ]);
}
else
{
    $button = $this->el('button', [

        'class' => $this->expr([
            'el-content',
            'rf-button-send',
            'uk-width-1-1 {@fullwidth}',
            'uk-{button_style: link-\w+}' => ['button_style' => $props['button_style']],
            'uk-button uk-button-{!button_style: |link-\w+} [uk-button-{button_size}]' => ['button_style' => $props['button_style']],
        ], $props),
        'data-rf-call' => $rfCall
    ]);
}

?>

<?= $wrap($props, $attrs) ?>

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

</div>