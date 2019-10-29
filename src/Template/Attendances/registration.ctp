<div class="row">
    <div class="col-md-12 ml-auto mr-auto">
      <div class="card card-login">
        <form class="form" method="" action="">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title">Registration</h4>
            <div class="social-line">
                <i class="fas fa-users fa-3x"></i>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="col-md-6"> 
                    <form method="post"> 
                        <div class="card">
                             <div class="card-body" style="min-height:250px!important;">
                                <div class="input-group">
                                  <input type="text" id="staff_no" class="form-control text-center input-lg input" 
                                     style="font-size: 80px;
                                      padding-top: 10px;
                                      padding-bottom: 10px;" 
                                     name="staffno" placeholder="Scan or Key In your ID"/>
                                  <input type="hidden" name ="event_id" id ="event_id" value=1>
                                  <input type="submit" id="submit" onclick="return false;">
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>  
                <div class="col-md-6">
                    <div class="card">
                         <div class="card-body" style="min-height:250px!important;">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fas fa-info fa-2x"  style="color:black !important"></i>
                                  </span>
                                </div>
                                <h4 class="font-weight-bold"> IJN Mobile App Kick Off Meeting</h4>
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fas fa-map-marker-alt fa-2x" style="color:black !important"></i>
                                  </span>
                                </div>
                                <h4 > Main Meeting Room,Block A</h4>
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fas fa-calendar fa-2x" style="color:black !important"></i>
                                  </span>
                                </div>
                                <h4 > 22/10/2019</h4>
                              </div>
                            </div>
                    </div>
                </div>  
            </div>

          </div>
        </form>
      </div>
    </div>
</div>

<?php $this->start('script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').click(function() {
            $staff_no = $("#staff_no").val();
            $event_id = $("#event_id").val();
            $.ajax({
                type: "POST",
                url: "registration",
                data: "staff_no="+$staff_no+"&event_id="+ $event_id,
                success: function(){
                    
                }
            });
        }); 
    });
</script>
<?php $this->end(); ?>    