<?php

  $whichPage = "home";
  $title = "Home";
  if($_SERVER['SERVER_NAME'] == "p1.kushsdwa15.xyz") {
    $whichPage = "project1";
    $title = "Project 1";
  } elseif ($_SERVER['SERVER_NAME'] == "p2.kushsdwa15.xyz") {
    $whichPage = "project2";
    $title = "Project 2";
  } elseif ($_SERVER['SERVER_NAME'] == "p3.kushsdwa15.xyz") {
    $whichPage = "project3";
    $title = "Project 3";
  } elseif ($_SERVER['SERVER_NAME'] == "p4.kushsdwa15.xyz") {
    $whichPage = "project4";
    $title = "Project 4";
  }

  $words = array('condition','nippy','lettuce','subsequent','cap','tenuous',
  'obese','surround','ill','known','awake','bells','drain','toes','hope','fancy',
  'impossible','leg','beef','furtive','hole','double','cactus','stranger',
  'animal','outstanding','smelly','reward','thrill','bucket','willing','puzzling',
  'guarantee','part','impolite','nonstop','grape','call','drum','answer',
  'physical','pan','doubt','value','thing','miniature','sleepy','wrong','shock',
  'curvy','wrench','sin','wing','tendency','reaction','tough','worthless',
  'instruct','choke','receptive','wandering','orange','appear','regret','few',
  'nifty','respect','puzzled','female','pushy','fruit','oafish','middle',
  'selection','perform','copy','coat','right','domineering','press','cold',
  'blue','snails','friend','paltry','flimsy','roasted','abject','empty','replace',
  'horrible','ocean','hurried','abiding','relation','bomb','wistful','describe',
  'command','utter','material','rat','group','pig','bow','strip','grumpy','machine',
  'decide','disgusted','base','hobbies','bedroom','noise','attract','medical',
  'creature','pumped','word','pest','rabbit','helpless','complete','committee',
  'milk','lowly','untidy','wink','TRUE','plain','grain','kaput','direful',
  'aggressive','want','judge','drop','bee','divide','spoil','empty','permissible',
  'longing','cheat','toothbrush','poised','income','heat','jaded','puny',
  'faithful','tightfisted','owe','eye','crowd','minor','clover','self','listen',
  'disagree','expert','fortunate','light','acoustic','print','back','tax',
  'smoggy','acoustics','release','judicious','hellish','exclusive','murder',
  'useless','guarded','heartbreaking','two','big','plausible','cut','third',
  'waste','aquatic','question','recognise','sloppy','hammer','demonic','writing',
  'rapid','long','room','queen','tiny','debonair','exuberant','apathetic',
  'periodic','spooky','brown','road','picayune','whine','license','strengthen',
  'store','shiny','foregoing','sound','easy','boiling','suggest','dreary',
  'offend','saw','close','slippery','oranges','homeless','amount','soggy',
  'unbecoming','distribution','worried','alcoholic','scold','cart','loving',
  'round','humorous','gainful','rely','nosy','frightening','wakeful',
  'development','illustrious','incompetent','cars','crabby','tawdry',
  'magenta','scatter','work','drop','man','dear','bloody','serve');

  $symbols = array('!','@','#','$',"%","&");

  $xkcdpassword = "";
  $error = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $wordcount = $_POST["wordcount"];
    $numbercount = $_POST["numbercount"];
    $symbol = $_POST["symbol"];

    if (!(ctype_digit($wordcount))){
      $error .= "Input value for word count is not a valid integer. \n";
    } elseif ($wordcount < 1 || $wordcount > 10) {
      $error .= "Word count must be at least 1 and less than 10. \n";
    }
    if (!(ctype_digit($numbercount))){
      $error .= "Input value for number count is not a valid integer. \n";
    } elseif ($numbercount < 1 || $numbercount > 10) {
      $error .= "Number count must be at least 1 and less than 10. \n";
    }
    if ($error == "") {
      while ($wordcount > 0) {
        $xkcdpassword .= $words[rand(0,249)];
        $wordcount--;
      }
      while ($numbercount > 0) {
        $xkcdpassword .= rand(0,9);
        $numbercount --;
      }
      if ($symbol == "TRUE") {
        $xkcdpassword .= $symbols[rand(0,5)];
      }
    }
  }
?>
