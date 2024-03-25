<?php
require '/var/www/html/calendrier/public/src/boostrap.php';

$data=[
  'date'=>$_GET['date'] ?? date('Y-m-d') 
];
$validator= new \App\Validator($data); 
if(!$validator->validate('date','date')){
  $data['date']=date('Y-m-d');
} 
$errors=[];

if ($_SERVER ['REQUEST_METHOD']==='POST'){
  $data=$_POST;
  $validator = new Calendar\EventValidator();
  $errors=$validator->validates($_POST);
  if(empty($errors)){
    $events= new \Calendar\Events(get_pdo());
    $event= $events->hydrate(new \Calendar\Event(), $data);
    $events ->create($event);
    header('Location: /index.php?success=1');
    exit();

  }
}
render('header', ['title'=> 'Ajouter un evenement']);

?>
<div class="container">

  <?php if (!empty($errors)):?>
    <div class="alert alert-danger">
      merci de bien vouloir vous corriger
    </div>
    <?php  endif ; ?>
 
    <h1>ajouter un evenement</h1>
  <form action="" method="post" class="form">
    <?php render('calendar/form',['data'=>$data, 'errors'=>$errors]);?>
    <div class="form-group">
      <button class="btn btn-primary">Ajouter l'événement </button>
    </div>
    
  </form>

</div>
