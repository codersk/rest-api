<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rest API Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h3 class="center"> Simple Rest Call To Fill Form Data</h3>
    <form>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="code" id="code" class="form-control"  placeholder="Enter Member code" onblur="fetchDetails(this.value);" required/>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="name" id="name" class="form-control"  placeholder="Enter Member Name" required/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="address" id="address" class="form-control"  placeholder="Enter Member Address" required/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <input type="number" name="mobile" id="mobile" class="form-control"  placeholder="Enter Mobile Number" onblur="fetchDetails(this.value);" required/>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="type" id="type" class="form-control"  placeholder="Enter Animal Type" required/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <button type="submit" name="submit" id="submit" class="form-control btn btn-primary">Submit</button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <button type="button" name="reset" id="reset" class="form-control btn btn-warning">Reset</button>
          </div>
        </div>
      </div>
    </form>
    <h3 id="message"></h3>
  </div>
  <script type="text/javascript" src="functions.js"></script>
</body>
</html>