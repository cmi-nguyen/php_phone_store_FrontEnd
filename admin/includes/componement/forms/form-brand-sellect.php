<label for="select-brand" class="form-label">Brand</label>
<select class="form-select form-select mb-3" name="brandID" aria-label="Select brand" id="select-brand">
    <?php 
        require_once("./includes/scripts/api/APIs.php");
        $url = 'http://localhost:8080/brand';
        $respBrand = getList($url);
        foreach($respBrand as $rsb){
            echo '<option value="'.$rsb->brandID.'">'.$rsb->brandName.'</option>';
        }
    ?>
</select>