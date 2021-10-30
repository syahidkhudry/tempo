<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    

    <title>Create Record</title>
  </head>
  <body>
  
  
<div class="card">  
  <div class="card-body">
  <h3 class="card-title">Create Record Page</h3>
  <?php echo form_open('crud/add'); ?>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label" for="name">Client Name</label>
                <?= form_input('name', '', 'class="form-control input-sm" id="name" autocomplete="OFF" required placeholder="Jhony"'); ?>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label" for="contact">Contact</label>
                <input type="contact" min="0" name="contact" id="contact" class="form-control input-sm" placeholder="081234567890" required>
            </div>
        </div>
</div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label" for="address">Message</label>
                <?= form_textarea('message', '', 'class="form-control input-sm" id="message" autocomplete="OFF" required '); ?>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i> Submit
        </button>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
  $(document).ready( function () {
    $('#messageTable').DataTable();
} );
</script>

  </body>
</html>