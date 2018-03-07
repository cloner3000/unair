<script>
	function upload()
	{
		$("#modalku").modal("show");
	}

</script>
<div class="panel panel-danger">
	<div class="panel-heading">
		<div align="left">
			<button class="btn btn-info" onclick="upload()"><span class="glyphicon glyphicon-plus"></span> Upload Data</button>
		</div>
	</div>
	<div class="panel-body">
<table class="table table-striped table-bordered table-hover">
	<br><br>
	<thead>
		<tr class="info">
		<th>No</th>
		<th>DESCRIPTION</th>
		<th>FILE</th>
		<th>DATE</th>
	
	</tr>
	</thead>

    <tbody>
    	    <?php 
    	    $nomer=1;
    	    foreach ($data as $x) 
    	    	
    	    {
    	     ?>
    	    
          	<tr>
                <td><?php echo $nomer++; ?></td>
                <td><?php echo $x['description']; ?></td>		
                <td><?php echo $x['file']; ?></td>
                <td><?php echo $x['date']; ?></td>
                <td>
                <a href="<?php echo(base_url('index.php/welcome/')) ?>/hapus/<?php echo $x['']; ?>">
    			<button class="btn btn-danger" title="Hapus Data" ><span class="glyphicon glyphicon-trash"></span> </button>
                </a>
    		
                </td>

          	</tr>
          <?php
          }
    	 ?>
      
    </tbody>
    </table>
<div id="modalku" role="dialog" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header"><h2>Upload Data</h2></div>
	<div class="modal-body">
	<div class="panel panel-default">
	<div class="panel-body">
		<form method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/upload_c/upload') ?>">
			<div class="form-group">
 				<label class="control-label">Description</label>
 				<input type="text" name="description" class="form-control">
			</div>	
			<div class="form-group">
				<label class="control-label">File</label>
				<input type="file" class="form-control" name="file">
			</div>
			<div>
				<label class="control-label">Date</label>
				<input type="date" name="date" class="form-control">
			</div>

			<br>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Upload</button>
			</div>
		</form>
	</div>
</div>
	</div>
	</div>
</div>
</div>
    
	

    

 






































