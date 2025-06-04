<?php
// import classes files
require_once('../classes/story.php');

// ajax call the php function	
if(isset($_POST['function2call']) && !empty($_POST['function2call'])) {
    $function2call = $_POST['function2call'];
	//$arg = $_POST['arguments'];
    switch($function2call) {
        case 'addNewStory' :Story::saveXMLFile($_POST['storyName'],$_POST['content']); break;
        case 'viewStories' :Story::viewStories(); break;
        case 'viewFiles' :Story::viewFiles($_POST['nextPath']); break;
        case 'deleteFile' :Story::deleteFile($_POST['filePath']); break;
    }
}
?>