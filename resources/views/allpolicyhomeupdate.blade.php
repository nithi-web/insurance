<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy_Home_Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    ​​<style>
        .navsearch {
            margin-left: 600px;
        }

        body {
            margin-top: 0px;
            background-color: #f5f5f5;
        }

        .errors {
            color: red;

        }
    </style>
</head>

<body>
    @include('nav')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-4 col-md-6">
                <h1>Update Policy Details..</h1><br><br>
                <form action="/policy_home_update" method="post" id="form">




                    <div class="form-group row has-success">
                        <label for="" class="col-sm-2 col-form-label">Vehicle Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="vehicle_name" value="{{$policy->vehicle_name}}" class="form-control" placeholder=vehicle />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Customer Id</label>
                        <div class="col-sm-10">
                            <input type="text" name="customer_id" value="{{$policy->customer_id}}" class="form-control" placeholder=CustomerId readonly="readonly" />
                        </div>
                    </div>

                    <div class=" form-group row">
                        <label for="" class="col-sm-2 col-form-label">Registration Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="registration_number" value="{{$policy->registration_number}}" class="form-control" placeholder=RegistrationNumber />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Policy Amount</label>
                        <div class="col-sm-10">
                            <input type="text" name="policy_amount" value="{{$policy->policy_amount}}" class="form-control" placeholder=policyamount />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Policy Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="policy_number" value="{{$policy->policy_number}}" class="form-control" placeholder=PolicyNumber />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Issued Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="issued_date" value="{{$policy->issued_date}}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Expiry Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="expiry_date" value="{{$policy->expiry_date}}" class="form-control" />
                        </div>
                    </div>
                    @csrf
                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="hidden" value="{{$policy->id}}" name="id" />
                            <input type="submit" class="btn btn-primary form-control" value="Submit" style="width: 10vw" /><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#form').validate({
                errorClass: 'errors',
                rules: {
                    vehicle_name: {
                        required: true
                    },
                    customer_id: {
                        required: true
                    },
                    registration_number: {
                        required: true

                    },

                    policy_amount: {
                        required: true,
                        digits: true
                    },

                    policy_number: {
                        required: true
                    },

                    issued_date: {
                        required: true
                    },

                    expiry_date: {
                        required: true
                    },
                },

            });
        });
    </script>


</body>

</html>