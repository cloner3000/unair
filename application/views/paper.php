<html>
<head>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
<script type="text/javascript"  src="assets/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery-3.2.1.js"></script>
 <title></title>

</head>

<body>  
 

<div class="container" align="center">
    <article class="offset__1">
  <fieldset><legend class="text-center span-text" style="font-family: monotype-corsiva font-size:20;" ></legend>

<div class="panel panel-danger" style="width: 700px;"  >
<div class="panel-heading" >
<div align="left" style="font-family: monotype-corsiva;  font-size: 18" >
 <div class="row" >
            <div class="col-md-12 pad-btm">
   <form method="post" action="<?php echo base_url()?>index.php/paper_c/simpan">
       
        <div class="form-group">
        <label for="tittle">Tittle :</label>
        <input  type="text" name="tittle" class="form-control"  />
        </div>
 
        <div class="form-group">
        <label for="upload">Date Upload :</label>
        <input  type="date" name="upload" class="form-control"  />
        </div>

        <div class="form-group">
        <label for="file">File Attachment:</label>
        <input  type="text" name="file" class="form-control"/>
        </div>

        <div class="form-group">
        <label for="status">Status Paper :</label>
          <select name="status" class="form-control">
          <option value="">-Pilih-</option>
          <option value="Confirm">Confirm</option>
          <option value="Approve">Approve</option>
          <option value="Reject">Reject</option>
          <option value="Revison">Revison</option>
        </select>
        </div>

        <div class="form-group">
        <label for="author"> Author :</label>
        <input  type="text" name="author" class="form-control"  />
        </div>

        <div class="form-group">
        <label for="comment"> Description/Comment :</label>
        <input  type="text" name="comment" class="form-control"  />
        </div>
  


<br><br>
      <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-circle-arrow-left"></span>Reset</button>
      <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-save"></span>Save</button>
    </form>

                
                
               

              </div>
         
    </div>
   
    
  
    </div>
 

  </div>
</body>

</html>