<?php
// import classes files
require_once('../classes/storyTeller.php');

// ajax call the php function	
if(isset($_POST['function2call']) && !empty($_POST['function2call'])) {
    $function2call = $_POST['function2call'];
	//$arg = $_POST['arguments'];
    switch($function2call) {
        case 'viewcharacters' :StoryTeller::getFilesPaths('../stories/'.$_POST['path'].'/storytelling/characters/'); break;
        case 'viewsettings' :StoryTeller::getFilesPaths('../stories/'.$_POST['path'].'/storytelling/settings/'); break;
        case 'viewitems' :StoryTeller::getFilesPaths('../stories/'.$_POST['path'].'/storytelling/items/'); break;
        case 'viewbgm' :StoryTeller::getFilesPaths('../stories/'.$_POST['path'].'/storytelling/bgm/'); break;
        case 'viewsoundeffects' :StoryTeller::getFilesPaths('../stories/'.$_POST['path'].'/storytelling/sound effects/'); break;
        case 'viewvoice' :StoryTeller::getFilesPaths('../stories/'.$_POST['path'].'/storytelling/voice/'); break;

        case 'createEP' :StoryTeller::createEP($_POST['path'],$_POST['epName']); break;
        case 'viewEPs' :StoryTeller::getFilesPaths('../stories/'.$_POST['path'].'/storytelling/episodes/'); break;

        case 'overwriteEP' :StoryTeller::overwriteEP($_POST['path'],$_POST['content']); break;
    }
}
?>