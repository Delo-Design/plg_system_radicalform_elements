<?php

if(empty($props['inputname']))
{
    $name="name".str_replace(["#","-","page"],"",$id);
}
else
{
    $name=$props['inputname'];
}
$id='';
if(!empty($props['id']))
{
    $id="id=\"".$props['id']."\"";
}
$class='';
if(!empty($props['class']))
{
    $class="class=\"".$props['class']."\"";
}
$attributes='';
if(!empty($props['attributes']))
{
    $attributes=str_replace("\n"," ",$props['attributes']);
}
?>

<input type="hidden" name="<?php echo $name ?>" <?php echo $id ?> <?php echo $class ?> <?php echo $attributes ?> value="<?php echo $props['inputvalue'] ?>" />


