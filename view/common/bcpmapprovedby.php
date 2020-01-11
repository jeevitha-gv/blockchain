<?php
    require_once __DIR__.'/../../php/user/userManager.php';

    $userManager = new UserManager();
    // 4 is auditor role
    $allAuditors = $userManager->getAllUsersByRole(20);
    
?>




  <label>Approved By:</label>
        <div class="input-group select2-bootstrap-prepend">
            
            <select id="approved_by1" class="form-control">
              <option></option>
              <option>implemented</option>                                                                              
              <?php foreach($allAuditors as $auditor){ ?>
               <option value="<?php echo $auditor['userId'] ?>"><?php echo $auditor['lastName'] ?></option>
               <?php } ?>                                    
            </select> 
    </div>