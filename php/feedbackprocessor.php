<?php
if(isset ($_POST['submit'])){
  $module = $_POST['module'];
 $semester = $_POST['semester'];
 $text = $_POST['text'];
 $rating = $_POST['rating'];
  
  // load previous XML from file
 $xml = simplexml_load_file("./data/feedbacks.xml") or die("ERROR: Cannot
load Feedbacks.xml.");

 // add a new feedback node
 $feedback = $xml->addChild('feedback');

 // add form data to XML
 $feedback->addChild('module', $module);
 $feedback->addChild('semester', $semester);
 $feedback->addChild('text', $text);
 $feedback->addChild('rating', $rating);
// save the whole modified XML
 $xml->asXml('./data/feedbacks.xml');

}else{
  header("Location:CS615_Workshop/index.php");
}
 ?>