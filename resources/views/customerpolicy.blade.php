<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add_Customer</title>

  ​
  <link rel="icon" type="image/png" href="name-of-image.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  ​
  ​<style>
    .navsearch {
      margin-left: 600px;
    }

    .errors {
      color: red;

    }

    body {
      margin-top: 0px;
      background-color: #f5f5f5;
    }
  </style>
  ​
</head>

<body>
  @include('nav')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-4 col-md-6">

        <h1>Fill Customer Details</h1><br><br>

        <form action="/insert_customer" method="post" id="forms">
          <div class="form-group row has-success">
            <label for="" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="first_name" class="form-control form-control-success" placeholder=name />

            </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
              <input type="text" name="phone_number" class="form-control" placeholder=phone />
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
              <input type="text" name="address" class="form-control" placeholder=address />
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Place</label>
            <div class="col-sm-10">
              <input type="text" name="place" class="form-control" placeholder=place />
            </div>
          </div>
          ​
          @csrf

          <div class="row">
            <div class="offset-sm-2 col-sm-10">
              <input type="submit" class="btn btn-primary form-control" value="Submit" style="width: 10vw" /><br>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#forms').validate({
        errorClass: 'errors',
        rules: {
          first_name: {
            required: true
          },
          phone_number: {
            required: true,
            digits: true,
          },

          address: {
            required: true
          },

          place: {
            required: true
          },


        },

      });
    });
  </script>
</body>
​
​

</html>