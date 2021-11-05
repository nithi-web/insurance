<!DOCTYPE html>
<html lang="en">
​

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance_Home</title>
    <link rel="icon" type="image/png" href="name-of-image.png">
    ​
    ​
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    ​
    ​
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        ​ .col-sm-6 {
            background: #ccc;
        }

        ​ .other {
            background: #f5f5f5;
        }

        ​ .p {
            text-align: center;
            padding-top: 120px;
        }

        ​ .p a {
            text-decoration: underline;
            color: blue;
        }




        body {
            margin-top: 0px;
            background-color: #f5f5f5;
        }

        .navsearch {
            margin-left: 600px;
        }

        .tableheading {
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            font-family: cursive;

        }

        .tableheading2 {
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            font-family: cursive;
        }

        .navbar {
            background-color: lightgreen;
        }

        .expired {
            font-size: 38px;
            font-weight: bold;
            font-family: Times New Roman", Times, serif;;

        }

        .expiring {
            font-size: 38px;
            font-weight: bold;
            font-family: Times New Roman", Times, serif;;

        }
    </style>
    ​
    ​
</head>
​

<body>
    @include('nav')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-4 col-md-6">
                @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif




                <h1 class="expired">Expired Policies</h1> <br>
                <table border="1" class="table table-striped">
                    <tr class="tableheading">
                        <td>Policy Id</td>
                        <td>Name</td>
                        <td>Phone Number</td>
                        <td>Customer Id</td>
                        <td>Vehicle</td>
                        <td>Registration Number</td>
                        <td>Policy Amount</td>
                        <td>Issued Date</td>
                        <td>Expiry Date</td>
                        <td>Update</td>
                        <td>Delete</td>

                    </tr>
                    @foreach($customer as $row)

                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->first_name}}</td>
                        <td>{{$row->phone_number}}</td>
                        <td>{{$row->customer_id}}</td>
                        <td>{{$row->vehicle_name}}</td>
                        <td>{{$row->registration_number}}</td>
                        <td>{{$row->policy_amount}}</td>
                        <td>{{$row->issued_date}}</td>
                        <td>{{$row->expiry_date}}</td>
                        <td><a href='/allpolicy_home_edit/{{$row->id}}'>Update</a></td>
                        <td> <button data-id="{{$row->id}}" type="button" class="btn-delete">
                                <i class="far fa-trash-alt" id="btn-delete"></i>
                                Delete
                            </button></td>


                    </tr>
                    @endforeach
                </table>
                {{ $customer->links() }}


            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-4 col-md-6">

                <h1 class="expiring">Expiring Policies</h1> <br>
                <table border="1" class="table table-striped">
                    <tr class="tableheading2">
                        <td>Policy Id</td>
                        <td>Name</td>
                        <td>Phone Number</td>
                        <td>Customer Id</td>
                        <td>Vehicle</td>
                        <td>Registration Number</td>
                        <td>Policy Amount</td>
                        <td>Issued Date</td>
                        <td>Expiry Date</td>
                        <td>Update</td>
                        <td>Delete</td>

                    </tr>
                    @foreach($customerexp as $rows)

                    <tr>
                        <td>{{$rows->id}}</td>
                        <td>{{$rows->first_name}}</td>
                        <td>{{$rows->phone_number}}</td>
                        <td>{{$rows->customer_id}}</td>
                        <td>{{$rows->vehicle_name}}</td>
                        <td>{{$rows->registration_number}}</td>
                        <td>{{$rows->policy_amount}}</td>
                        <td>{{$rows->issued_date}}</td>
                        <td>{{$rows->expiry_date}}</td>
                        <td><a href='/allpolicy_home_edit/{{$rows->id}}'>Update</a></td>
                        <td> <button data-id="{{$rows->id}}" type="button" class="btn-delete">
                                <i class="far fa-trash-alt" id="btn-delete"></i>
                                Delete
                            </button></td>

                    </tr>
                    @endforeach
                </table>
                {{ $customerexp->links() }}


            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(function() {
            // //delete
            $(document).on("click", ".btn-delete", function() {
                element = $(this);
                // console.log();
                // return false;
                id = $(this).data("id");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085D6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        //Code for Delete
                        $.post("/policy_delete", {
                                "_token": "{{ csrf_token() }}",
                                id: element.data('id')
                            },
                            function(data, status) {
                                if (data == "success") {
                                    // element.parent().parent().remove();
                                    element.closest('tr').remove();
                                } else {
                                    alert('not deleted...');
                                }
                            }
                        );
                    }
                })
            });
        });
    </script>

</body>

</html>