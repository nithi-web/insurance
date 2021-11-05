<!DOCTYPE html>
<html lang="en">
​

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All_Policy_Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        usebody {
            padding-top: 40px;
        }

        ​ .col-sm-6 {
            background: #ccc;
        }

        ​ .other {
            background: #a4a4a4;
        }

        ​ .p {
            text-align: center;
            padding-top: 120px;
        }

        ​ .p a {
            text-decoration: underline;
            color: blue;
        }

        .navsearch {
            margin-left: 600px;
        }

        body {
            margin-top: 0px;
            background-color: #f5f5f5;
        }

        .allpolicy {
            font-size: 38px;
            font-weight: bold;
            font-family: Times New Roman", Times, serif;;

        }

        .allpolicyheading {
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            font-family: cursive;

        }
    </style>

</head>​

<body>
    @include('nav')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-4 col-md-6">


                @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif

                <h1 class="allpolicy">All Policy Records</h1> <br>
                <table border="1" class="table table-striped">
                    <tr class="allpolicyheading">
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
                        <td><a href='/allpolicy_edit/{{$row->id}}'>Update</a></td>

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