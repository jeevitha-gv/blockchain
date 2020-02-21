<?php
    require_once __DIR__.'/../../php/risk/riskManager.php';
    $riskManager = new RiskManager();
    // 4 is auditor role
    $allLocation = $riskManager->getAllLocation();
?>

<div class="col-lg-12">
     <select  id="location" name="locationDropDown" class="form-control select2" multiple="">
              <option>...select...</option>    
         <?php foreach($allLocation as $location){ ?>
    <option value="<?php echo $location['id'] ?>"><?php echo $location['name']; ?></option>
        <?php } ?>
      </select> 
     </div>

<?php if($_SESSION['user_role']=='super_admin' || $_SESSION['user_role'] == 'demo' || $_SESSION['user_role'] == 'auditor') {?>
  <div class="form-group" >
    <div class="col-md-12">
<select  id="location" name="locationDropDown" class="form-control">
              <option>...select...</option>    

    <?php foreach($allLocation as $location){ ?>
    <option value="<?php echo $location['id'] ?>"><?php echo $location['name']; ?></option>
    <?php } ?>
</select>


  </div> 
</div>
  
    <?php }?>
