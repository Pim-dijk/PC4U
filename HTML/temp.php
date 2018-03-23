<?php
/**
 * Created by PhpStorm.
 * User: Pim
 * Date: 22/03/2018
 * Time: 15:01
 */

$json = "{
  \"fields\":[
    {
      \"key\":\"description\",
      \"value\":\"This is a textarea, deal with it.\",
      \"is_text_area\":1
    },
    {
      \"key\":\"CPU\",
      \"value\":\"I5\",
      \"is_text_area\":0
    },
    {
      \"key\":\"Size\",
      \"value\":\"15 inch\",
      \"is_text_area\":0
    }
  ]
}";

$decoded_json = json_decode($json,true)["fields"];

foreach($decoded_json as $value){
    ?>

    <<?=$value["is_text_area"] == 1 ? "textarea": "input"?> type="text" value="<?=$value["value"]?>" class="form-control"><?=$value["is_text_area"] == 1 ? "</textarea>": ""?>

    <?php
}