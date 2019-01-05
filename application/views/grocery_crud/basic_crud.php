<?php 
foreach($css_files as $file): ?>
  <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
  
 <!-- Default box -->
  <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title"> <?php echo $title ?> </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
      </div>
      	<div class="box-body" >
          <?php echo $output; ?>
        </div>
        <!-- /.box-body -->
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->



<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>