<div class="row">
      <div class="col-sm-6">
        <div class="form-group">
            <label for="name"> Titre </label>
            <input id="name" type="text" class="form-control" required name="name" value="<?=isset($data['name']) ? h($data['name']):'';?> ">
            <?php if (isset($errors['name'])):?>
              <small><help class="form-text"><?= $errors['name']; ?></help></small> 
              <?php endif ;?>

          </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <label for="date"> Date </label>
            <input id="date" type="date" required class="form-control" name="date" value="<?=isset($data['date']) ? h($data['date']):'';?>">
            <?php if (isset($errors['date'])):?>
              <small><help class="form-text"><?= $errors['date']; ?></help></small> 
              <?php endif ;?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
            <label for="start"> démarrage </label>
            <input id="start" type="time" class="form-control" required name="start" placeholder="HH:MM" value="<?=isset($data['start']) ? h($data['start']):'';?>">
            <?php if (isset($errors['start'])):?>
              <small><help class="form-text"><?= $errors['start']; ?></help></small> 
              <?php endif ;?>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <label for="end"> fin </label>
            <input id="end" type="time" class="form-control" required name="end" placeholder="HH:MM" value="<?=isset($data['end']) ? h($data['end']):'';?>" >
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" id="description"  class="form-control" ><?=isset($data['description']) ? h($data['description']):'';?></textarea>
    </div>