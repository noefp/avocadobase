<?php //code to add logos
  $logos_path = $root_path."".$images_path."/logos";
      
  $logos_json = file_get_contents($logos_path."/logos.json");
  // var_dump($labs_json);
  $jlogo = json_decode($logos_json, true);
  
  foreach($jlogo["logos"] as $logo) {
    echo "<a href='".$logo["link"]."' target='_blank'><img class='m-2' height='".$logo["height"]."' src='".$images_path."/logos/".$logo["image"]."'></a>";
  }
?>

