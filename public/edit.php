<?php

use Calendar\Events;
require '/var/www/html/calendrier/public/src/boostrap.php';
require '/var/www/html/calendrier/public/src/Calendar/Events.php';
require '/var/www/html/calendrier/public/views/header.php';

$pdo=get_pdo();
$events=new \Calendar\Events($pdo);
$errors=[];
try{
  $event=$events->find($_GET['id']?? null);
}catch (\Exception){
  e404();
}catch (\Error){
  e404();
}

$data= [
  'name'=>$event->getName(),
  'date'=>$event->getStart()->format('Y-m-d'),
  'start'=>$event->getStart()->format('H:i'),
  'end'=>$event->getEnd()->format('H:i'),
  'description'=>$event->getDescription(),
];


if ($_SERVER ['REQUEST_METHOD']=='POST'){
  $data=$_POST;
  $validator = new Calendar\EventValidator();
  $errors=$validator->validates($data);
  if(empty($errors)){
    $events->hydrate($event, $data); 
    $events ->update($event);
    header('Location: /index.php?success=1');
    exit();

  }
}
?>
<div class="container">
  <h1>Editer l'événement : <small><?= h($event->getName()); ?> </small></h1>
  <form action="" method="post" class="form">
    <?php render('calendar/form',['data'=>$data, 'errors'=>$errors]);?>
      <div class="form-group">
        <button class="btn btn-primary">modifier l'événement </button>
      </div>
  </form>
</div>

<?php render('footer');