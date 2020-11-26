<div class="cols-sample-area">


  <?php
    require_once '../EJ/AutoLoad.php';
    ?>
	
	<h3>Sign here</h3>
  <?php
    
    $signature=new EJ\Signature("default");
    echo $signature->height("400px")->isResponsive(true)->strokeWidth(3)->render();
    ?>
</div>
<style>
  .cols-sample-area
  {
  width: 100% ;
  margin: 0 auto;
  float: none;
  }

  #property-window .row {
  padding: 10px 15px !important;
  }
  #sampleContainer{
  overflow-x: auto;
  }
</style>
