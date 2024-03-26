<?php

use Calendar\Events;
require 'calendrier/public/src/boostrap.php';
require 'calendrier/public/src/Calendar/Events.php';
require 'calendrier/public/views/header.php';
$pdo=get_pdo();
$events=new Events($pdo);
if (!isset($_GET['id'])){
  e404();
}
try{
  $event=$events->find($_GET['id']);
}catch (\Exception){
  e404();
}
?>
<h1><?= h($event->getName()); ?></h1>

<ul>
  <li>Date: <?= $event->getStart()->format ('d/m/Y'); ?> </li>
  <li>Heure de démarrage : <?=  $event->getStart()->format ('H:i'); ?> </li>
  <li>Heure de fin : <?=  $event->getStart()->format ('H:i'); ?> </li>
  <li>
    Description:<br>
    <?=h($event->getDescription()); ?> </li>

</ul>

<?php require 'calendrier/public/views/footer.php';
