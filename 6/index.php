<?php
  require 'functions.php';
  $users = query("SELECT* FROM users");

  if(isset($_POST["submitUser"])){
    if( insertUser($_POST) > 0 ){
      header("Refresh:0");
    }else{
      echo "gagal";
    }
  }
  if(isset($_POST["submitSkill"])){
    if( insertSkill($_POST) > 0 ){
      header("Refresh:0");
    }else{
      echo "gagal";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="card mt-3 mx-auto">
      <div class="card-body">
        <div class="col">
          <div class="row">
            <div class="card mx-auto" style="width:auto">
              <div class="card-body ">
                <form method="POST">
                  <div class="form-row justify-content-between">
                    <div class="col-auto">
                      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Tambah Programmer" name="name">
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary mb-2" name="submitUser">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    
          <?php foreach($users as $user): ?>
          <!-- user -->
          
            <div class="row">
              <div class="card mt-3 mx-auto " style="width:500px">
                <div class="card-body d-inline-flex">
    
                  <div class="col-5">
                      <ul class="list-group">
                        <li class="list-group-item active"><?=$user['name']; ?></li>
                        <?php $skills = query("SELECT*FROM skills WHERE user_id = ".$user['id']); ?>

                        
                        <li class="list-group-item">
                        <?php foreach($skills as $skill): ?>
                          <?= $skill['name']; ?>,
                        <?php endforeach; ?><br>
                        </li>
                      </ul>
                  </div>
    
                  <div class="col-7">
    
                    <form method="POST">
                      <div class="form-row justify-content-between">
                        <div class="col-auto">
                          <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Tambah skill" name="name">
                          <input type="hidden" name="user_id" placeholder="id" value="<?=$user['id']; ?>">
                        </div>
                        <div class="col-auto">
                          <button type="submit" class="btn btn-primary mb-2" name="submitSkill">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>