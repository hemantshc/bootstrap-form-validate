<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >

<div class="container">
  <h2>Edit your data</h2>
 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit data</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document"  >
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Would you like to update data !</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  >
        <div  class="form-horizontal">
          
          <div class="form-group ">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="name">
            </div>
          </div>
          
           <div class="form-group">
            <label class="col-form-label col-sm-2">Mobile number:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="mobile_no">
          </div>
          </div>
         
           <div class="form-group ">
            <label class="col-form-label col-sm-2">state:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="state">
          </div>
          </div>
           
          <div class="form-group">
            <label class="col-form-label col-sm-2">Address:</label>
            <div class="col-sm-10">
            <textarea class="form-control" id="address  "></textarea>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>