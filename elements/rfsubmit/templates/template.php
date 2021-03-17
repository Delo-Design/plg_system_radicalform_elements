<?php

//Wrap
$wrap = $this->el('div');

// Button
$button = $this->el('button', [

    'class' => $this->expr([
        'el-content',
        'rf-button-send',
        'uk-width-1-1 {@fullwidth}',
        'uk-{button_style: link-\w+}' => ['button_style' => $props['button_style']],
        'uk-button uk-button-{!button_style: |link-\w+} [uk-button-{button_size}]' => ['button_style' => $props['button_style']],
    ], $props),

    'title' => ['{label}'],

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