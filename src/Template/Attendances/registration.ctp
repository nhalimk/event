<?php
    session_start();
    if (!isset($_SESSION['token'])) {
        $token = md5(uniqid(rand(), TRUE));
        $_SESSION['token'] = $token;
        $_SESSION['token_time'] = time();
    }
    else
    {
        $token = $_SESSION['token'];
    }
?>

<div class="page-header header-filter" style="background-image: url(<?= '/'.basename(dirname(APP)).'/img/bg7.jpg' ?>); background-size: cover; background-position: top center;">
    <div class="container-fluid clearfix">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
              <div class="card card-login">
                  <div class="card-header card-header-primary text-center">
                    <h4 class="card-title">Registration</h4>
                    <div class="social-line">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="card">
                                 <div class="card-body" style="min-height:250px!important;">
                                    <div class="input-group">
                                      <input type="text" id="staff_no" class="form-control text-center input-lg input" 
                                         style="font-size: 80px;
                                          padding-top: 10px;
                                          padding-bottom: 10px;" 
                                         name="staffno" placeholder="Scan or Key In your ID" autofocus/>
                                        <input type="hidden" name="csrf_token" value="<?php echo $token; ?>" />
                                      <input type="hidden" name ="event_id" id ="event_id" value="<?= $id; ?>"/>
                                        <input type="hidden" name="_method" value="POST">
                                      <input type="submit" id="submit" style="display:none">
                                    </div>
                                </div> 
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="card">
                                 <div class="card-body" style="min-height:250px!important;">
                                      <h5 class="font-weight-bold text-center"><?= $event->desc; ?></h5>
                                      <hr/>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                            <i class="fas fa-info fa-2x"  style="color:black !important"></i>
                                          </span>
                                        </div>
                                        <h4 class="font-weight-bold"> <?= $event->title; ?></h4>
                                      </div>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                            <i class="fas fa-map-marker-alt fa-2x" style="color:black !important"></i>
                                          </span>
                                        </div>
                                        <h4 > <?= $event->venue ?></h4>
                                      </div>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                            <i class="fas fa-calendar fa-2x" style="color:black !important"></i>
                                          </span>
                                        </div>
                                        <h4 > <?= $event->date_start->i18nFormat('dd-MM-yyyy') ?>  </h4>
                                      </div>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                            <i class="fas fa-clock fa-2x" style="color:black !important"></i>
                                          </span>
                                        </div>
                                        <h4 > <?= $event->date_start->i18nFormat('hh:mm a') ?> - <?= $event->date_end->i18nFormat('hh:mm a') ?> </h4>
                                      </div>
                                    </div>
                            </div>
                        </div>  
                    </div>

                  </div>
              </div>
            </div>
        </div>  
    </div>
</div>

<?php $this->start('script'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers:
                { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });
            $('#staff_no').keyup(function(e){
                if(e.keyCode == 13)
                {
                    $staff_no = $("#staff_no").val();
                    $event_id = $("#event_id").val();
                    var token =  $('input[name="csrf_token"]').attr('value');
                    $.ajax({
                        type: "POST",
                        url: "/events/attendances/add",
                        data: "staff_no="+$staff_no+"&id="+ $event_id,
                        success: function(){
                            alert("success");
                        }
                    });
                }
            });
        });
    </script>
<?php $this->end(); ?>    