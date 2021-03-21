<?php

if(empty($props['inputname']))
{
    $name="name".str_replace(["#","-","page"],"",$id);
}
else
{
    $name=$props['inputname'];
}
?>
<input type="hidden" name="<?php echo $name ?>" value="<?php echo $props['inputvalue'] ?>" />

