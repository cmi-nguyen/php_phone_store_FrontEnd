<div class="card" style="width: 250px;">
  <img src="<?php echo $rs->imgURL?>" class="card-img-top" alt="Product img">
  <div class="card-body">
    <h5 class="card-title"><?php echo $rs->productName ?></h5>
    <p class="card-text"><?php echo $rs->price.' $' ?></p>
    <form method="post">
        <button class="btn btn-secondary">Add to cart</button>
    </form>
  </div>
</div>