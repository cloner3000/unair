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
  <fieldset><legend class="text-center span-text" style="font-family: monotype-corsiva font-size:20;" >Registration Form</legend>

<div class="panel panel-default" style="width: 700px;"  >
<div class="panel-heading" >
<div align="left" style="font-family: monotype-corsiva;  font-size: 18" >
 <div class="row" >
            <div class="col-md-12 pad-btm">
   <form method="post" action="<?php echo base_url()?>index.php/welcome/simpan">
        <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                <label for="f_name">First Name (Dr.or Ph.D) :</label>
                <input  type="text" name="f_name" class="form-control"  />
                </div> 
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label for="m_name">Middle Name :</label>
                <input  type="text" name="m_name" class="form-control"  />
                </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                <label for="l_name">Last Name :</label>
                <input  type="text" name="l_name" class="form-control"/>
                </div> 
            </div>
        </div>

        <div class="form-group">
        <label for="certificat"> Name For Certificat (Dr.or Ph.D) :</label>
        <input  type="text" name="certificat" class="form-control"  />
        </div>

        <div class="form-group">
        <label for="pasport"> Pasport Number :</label>
        <input  type="number" name="pasport" class="form-control"  />
        </div>

        <div class="form-group">
        <label for="ttl"> Date Of Birth (DD/MM/YYYY) :</label>
        <input  type="date" name="ttl" class="form-control"  />
        </div>
         <div class="form-group">
        <label for="nasional"> Nasionallity :</label>
        <input  type="text" name="nasional" class="form-control"  />
        </div>
        
        <div class="form-group">
        <label for="insti">Institution :</label>
        <input  type="text" name="insti" class="form-control"/>
        </div>
 
        <div class="form-group">
        <label for="address">Address :</label>
        <input  type="text" name="address" class="form-control"/>
        </div>
      
        <div class="form-group">
        <label for="pos">Zip/Post Code :</label>
        <input  type="number" name="pos" class="form-control"/>
        </div>

        <div class="form-group">
        <label for="country">Country :</label>
        <input  type="text" name="country" class="form-control"/>
        </div>

        
        <div class="form-group">
        <label for="email">Email  :</label>
        <input  type="email" name="email" class="form-control"/>
        </div>

        <div class="form-group">
        <label for="telephone">Telephone Number :</label>
        <input  type="number" name="telephone" class="form-control"/>
        </div>

       

        <div class="form-group">
        <label for="request">Do you have any special requirements/request?:</label>
        <input  type="text" name="request" class="form-control"/>
        </div>
             
        <div class="form-group">          
        <label for="register">Register Category</label>
        <select name="register" class="form-control">
          <option value="">-Pilih-</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
        </div>

        <div class="form-group">          
        <label for="will">Will you be needing a hotel reservation? :</label>
        <select name="will" class="form-control">
          <option value="">-Pilih-</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
        </div>


<br><br>
      <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-circle-arrow-left"></span> Reset</button>
      <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-save"></span> Save</button>
    </form>

                
                
               

              </div>
         
    </div>
   
    
  
    </div>
 

  </div>
</body>

</html>