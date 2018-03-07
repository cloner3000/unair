

<div class="panel-heading">


<div class="container">
<div align="left">
			
		</div>
	    </div>
</div>
<div class="panel-body" style="overflow-x: scroll">
<table class="table table-striped table-bordered table-hover" id="tabel_contoh">
	<br><br>
	<thead>
		<tr class="info">
		<th>NO</th>
		<th>FIRST NAME</th>
    <th>MIDDLE NAME</th>
		<th>LAST NAME</th>
    <th>NAME FOR CERTIFICAT</th>
    <th>PASSPORT NUMBER</th>
    <th>DATE OF BIRTH</th> 
    <th>NASIONALLITY</th> 
		<th>INSTITUTION</th>
		<th>ADDRESS</th>
		<th>ZIP/POST CODE</th>
		<th>COUNTRY</th>
		<th>EMAIL</th>
		<th>DO YOU HAVE ANY REQUEST?</th>
		<th>REGISTRATION CATEGORY</th>
    <th>NEEDING A HOTEL RESERVATION?</th>
	</tr>
	</thead>

    <tbody>
    	<?php 
          $nomer=1;
          foreach ($datanya as $x) 
          {
          ?>
          	<tr>
                <td><?php echo $nomer++; ?></td>
                <td><?php echo $x['first_name']; ?></td>		
                <td><?php echo $x['middle_name']; ?></td>
                <td><?php echo $x['last_name']; ?></td>
                <td><?php echo $x['certificat']; ?></td>
                <td><?php echo $x['passport']; ?></td>
                <td><?php echo $x['ttl']; ?></td>
                <td><?php echo $x['nasionallity']; ?></td>
                <td><?php echo $x['institution']; ?></td>
                <td><?php echo $x['address']; ?></td>
                <td><?php echo $x['pos_code']; ?></td>
                <td><?php echo $x['country']; ?></td>
                <td><?php echo $x['email']; ?></td>
                <td><?php echo $x['request']; ?></td>
                <td><?php echo $x['register']; ?></td>
                <td><?php echo $x['will']; ?></td>
               

          	</tr>
          <?php
          }
    	 ?>
      
    </tbody>

    	
	
	
	</div>


    
	
</table>    


