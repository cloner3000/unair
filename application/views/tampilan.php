<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload file with CodeIgniter</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>bahan/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>bahan/datatables.net-bs/css/dataTables.bootstrap.css">
</head>
<body>
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <?php echo form_open_multipart(base_url('index.php/kendali/upload/')); ?>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="" class="control-label">File / Image</label>
                        <input type="file" name="file" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Description</label>
                        <input type="text" name="descrip" id="" class="form-control" placeholder="Name file"
                               autocomplete="off" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Date</label>
                        <input type="date" name="tgl" id="" class="form-control">
                    </div>

                </div>
                <div class="panel-footer" align="right">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php
if (isset($this->session->galat)) {
	?>
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <?php echo $this->session->galat; ?>
                        </div>
                    <?php }?>
                    <?php
if (isset($this->session->sukses)) {
	?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <?php echo $this->session->sukses; ?>
                        </div>
                    <?php }?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-bordered table-hover datatable">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>File / Image</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$no = 1;
?>
                                    <?php foreach ($dataUpload as $key): ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>
                                                <?php
if ($key->type_file == "image/jpeg" || $key->type_file == "image/jpg" || $key->type_file == "image/png" || $key->type_file == "image/gif" || $key->type_file == "image/ico") {
	?>
                                                    <img src="<?php echo base_url(); ?>file/<?php echo $key->file; ?>"
                                                         width="50px" height="50px" class="img-circle" alt="">
                                                <?php } else {?>
                                                    <a href="<?php echo base_url('file/' . $key->file) ?>" download="<?php echo $key->file ?>"><?php echo $key->file ?></a>
                                                <?php }?>
                                            </td>
                                            <td><?php echo $key->description; ?></td>
                                            <td><?php echo date('d M Y', strtotime($key->tgl)); ?></td>
                                            <td><a href="<?php echo base_url('file/' . $key->file); ?>"
                                                   data-toggle="tooltip" data-placement="left" title="Download file"
                                                   download="<?php echo $key->file; ?>"
                                                   class="btn btn-primary btn-sm"><i
                                                            class="glyphicon glyphicon-download"></i></a>
                                                <span data-toggle="tooltip" data-placement="right"
                                                        title="Delete file"><a
                                                            class="btn btn-danger btn-sm hapus-data"
                                                            href="<?php echo site_url('kendali/delete/'.$key->id); ?>" onclick="confirm('Apakah Anda Yakin?')"><i
                                                                class="glyphicon glyphicon-trash"></i></a></span>
                                            </td>
                                        </tr>
                                    <?php endforeach?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="hapus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm</h5>
            </div>
            <div class="modal-body">
                <?php
echo form_open(base_url('kendali/delete/'));
?>
                <p>
                    Are you sure want to delete this data?
                    <input type="hidden" name="id" id="idHapus" value="">
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-success btn-sm">Yes</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>bahan/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>bahan/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>bahan/datatables.net/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>bahan/datatables.net-bs/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>bahan/bootstrap_input_file/bootstrap-filestyle.js"></script>
<script src="<?php echo base_url(); ?>bahan/js/app.js"></script>
<script src="<?php echo base_url(); ?>bahan/js/app.min.js"></script>
<script>
    $(document).ready(function () {
        $("table.datatable").DataTable();
        $("input[type='file']").filestyle();
        $("label.btn-secondary").addClass('btn-primary');
        $("span.buttonText").html("Select file");
    });
</script>
</body>
</html>