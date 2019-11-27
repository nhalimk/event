
<style>
.card-body {
    max-height: 85vh;
}
</style>
<div class="container">
    <div class="mb-4"><br/></div>
    <div class="mb-4"><br/></div>
    <div class="card mb-4" style="background-color:#fff0 !important;">
        <div class="card-header card-header-primary text-center">
            <h5 class="card-title">Event Listing</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-body" style="overflow-y:scroll">
          <div class="row">
            <?php 
              $i = 0;
              $stylerow = "";
              foreach ($events as $event): 
              
              if($i % 2 == 0){ 
                    $stylerow = "";  
                } 
                else{ 
                    $stylerow = "timeline-inverted";  
                } 
            ?>
              <div class="col-sm-6 col-lg-4">
                <div class="card">
                  <div class="card-header card-header-behance text-center">
                      <a href="attendances/registration/<?= h($event->id) ?>"+>
                        <?= h($event->title) ?> <i class="fas fa-sign-in-alt"></i>
                      </a>
                  </div>
                  <div class="card-body">
                    <div>
                      <div class="text-uppercase text-muted small"> </div>
                    </div>
                    <div>
                      <div class="text-uppercase text-muted small">
                          <i class="fas fa-info"  style="color:black !important"></i>
                          <?= "\t\t\t".h($event->description) ?>
                      </div>
                      <div class="text-value"><i class="fas fa-map-marker-alt" style="color:black !important"></i>
                                            <?= $event->venue ?></div>
                      <div class="text-value"><i class="fas fa-calendar" style="color:black !important"></i>
                          <?= $event->date_start->i18nFormat('dd/MM/yyyy') ?></div>
                      <div class="text-value"><i class="fas fa-clock" style="color:black !important"></i>
                          <?= $event->date_start->i18nFormat('hh:mm a') ?> - <?= $event->date_end->i18nFormat('hh:mm a') ?></div>
                    </div>
                  </div>
                </div>
              </div>

            <?php 
              $i++;
                endforeach; 
            ?>
          </div>
        </div>
    </div>
</div>