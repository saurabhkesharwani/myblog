<div class="col-4">
      <!--  <div class="card mb-3">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      -->

         <!-- <div class="card mb-3">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
-->
          <?php
          if(isset($_GET['id']))
          {
            ?>
            <div class="card mb-3">
            <h5 class="card-header">Comments</h5>
            <?php
            $comments=getComments($db,$post_id);
            if(count($comments)<1){
              echo "N0
              o comment";
            }
            foreach($comments as $comment){
              ?>
                <div class="card-body">
              <h5 class="card-title"><?=$comment['name']?>-<small> <?=date('F jS, Y',strtotime($comment['created_at']))?></small></h5>
              <p class="card-text"><?=$comment['comment']?></p>
             
            </div>

              <?php
            }

            ?>
        
          </div>
          

            <?php
          }

          ?>
          
    </div>