<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    

    <title>List Message</title>
  </head>
  <body>
  
  
<div class="card">
  
  <div class="card-body">
  <h3 class="card-title">Welcome to Messages!</h3>
  <div class="d-flex justify-content-end mb-2">
      <a href="<?php echo base_url('crud/add'); ?>" type="button" class="btn btn-primary mr-2"><i class="fas fa-plus"></i> Create Record</a>
  </div>
  <table id="messageTable" class="display table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($message as $data) : ?>
        <tr>
            <td><?= $data['created_at'];?></td>
            <td><?= $data['name'];?></td>
            <td><?= $data['contact'];?></td>
            <td><?= $data['message'];?></td>
            <td> 
              <a href="<?php echo site_url('crud/edit/' . $data['id']); ?>" class="btn btn-warning btn-xs"> <i class="fas fa-edit"> Edit</i></a>
              <a href="<?php echo site_url('crud/remove/' . $data['id']); ?>" class="btn btn-danger btn-xs "> <i class="fas fa-trash-alt"> Delete</i></a>
            </td>
            
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
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