<?php

//Wrap
$wrap = $this->el('div');
$stepClass = str_replace(":nth-child({step})","",$props['step_class']);
// Button
$button = $this->el('button', [

    'class' => $this->expr([
        'el-content',
        'rf-next',
        'uk-width-1-1 {@fullwidth}',
        'uk-{button_style: link-\w+}' => ['button_style' => $props['button_style']],
        'uk-button uk-button-{!button_style: |link-\w+} [uk-button-{button_size}]' => ['button_style' => $props['button_style']],
    ], $props),
    'onclick' => 'RadicalForm.RadicalFormClass.nextStep(this,"'.$stepClass.' ", "'.(!empty($props['animation_step']) ? 'uk-animation-'.$props['animation_step'] : '').'", "" );return false;',
    'title' => ['{label}']
]);

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