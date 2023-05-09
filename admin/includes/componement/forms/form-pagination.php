<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php
    for ($i=1; $i < $numberOfPage+1 ; $i++) { 
        # code...
        
       echo  '<li class="page-item"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
    }
    ?> 
  </ul>
</nav>