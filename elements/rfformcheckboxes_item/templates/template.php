<label <?php
if(!(isset($element['linebreak']) && $element['linebreak']))
{
    echo "class=\"uk-flex\"";
}
?>><div><input class="uk-checkbox <?php echo $props['css_classes'] ?>" type="checkbox" name="<?php echo $element['field_name'] ?>[]" value="<?php echo $props['value'] ?>"></div><div <?php
    if(!(isset($element['linebreak']) && $element['linebreak']))
    {
        echo "class=\"uk-margin-small-left\"";
    }
    ?>"><?php echo $props['label'] ?></div></label>

