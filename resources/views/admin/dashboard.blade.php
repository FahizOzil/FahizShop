@extends('admin.adminLayout')
@section('content')
    <!-- start sale info  -->
    <div class="row my-3">
        <div class="col-md-12 d-flex justify-content-between">
            <div class="card-show">
                <div class="card-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-bodyes">
                    <h5 style="font-weight: 400;" class="text-secondary">Today Sale</h5>
                    <p class="card-text"> $10000 </p>
                </div>
            </div>
            <div class="card-show">
                <div class="card-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-bodyes">
                    <h5 style="font-weight: 400;" class="text-secondary">Total Users</h5>
                    <p class="card-text"> $10000 </p>
                </div>
            </div>
            <div class="card-show">
                <div class="card-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-bodyes">
                    <h5 style="font-weight: 400;" class="text-secondary">Today Orders</h5>
                    <p class="card-text"> $10000 </p>
                </div>
            </div>
            <div class="card-show">
                <div class="card-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-bodyes">
                    <h5 style="font-weight: 400;" class="text-secondary">Today Revenue</h5>
                    <p class="card-text"> $10000 </p>
                </div>
            </div>
        </div>
    </div> <!-- cards End row -->


    {{-- start 2nd row  --}}
    {{-- start latest product  --}}
    <div class="row">
        <div class="col-md-8">
            <h4 class="text-light text-center"> Latest Product </h4>
            <div class="card-head d-flex justify-content-between">
                <div class="card" style="width:13rem;border:2px solid gray">
                    <img src="/images/product-2.jpg" class="card-img-top rounded-top" width="100%" alt="" />
                    <div class="card-body">
                        <h6 class="card-title text-muted">T-shirt For men</h6>
                        <p class="card-text text-dark "> <b>$90.00</b> </p>

                        <div class="btn-group d-flex justify-content-center">
                            <div class="btn btn-outline-info">Edit</div>
                            <div class="btn btn-outline-danger">Delete</div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width:13rem;border:2px solid gray">
                    <img src="/images/product-4.jpg" class="card-img-top rounded-top" width="100%" alt="" />
                    <div class="card-body">
                        <h6 class="card-title text-muted">T-shirt For men</h6>
                        <p class="card-text text-dark "> <b>$90.00</b> </p>

                        <div class="btn-group d-flex justify-content-center">
                            <div class="btn btn-outline-info">Edit</div>
                            <div class="btn btn-outline-danger">Delete</div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width:13rem;border:2px solid gray">
                    <img src="/images/product-3.jpg" class="card-img-top rounded-top" width="100%" alt="" />
                    <div class="card-body">
                        <h6 class="card-title text-muted">T-shirt For men</h6>
                        <p class="card-text text-dark "> <b>$90.00</b> </p>

                        <div class="btn-group d-flex justify-content-center">
                            <div class="btn btn-outline-info">Edit</div>
                            <div class="btn btn-outline-danger">Delete</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- end Latest Product  --}}


        <!-- start todo list  -->
        <div class="col-md-4" style="background: #191C24;">
            <div class="todo-list">
                <h5 class="text-light p-4"> To Do List </h5>
                <form action="">
                    <div class="d-flex justify-content-center">
                        <input class="form-control" type="text" name="todo" id="new-task"
                            placeholder="Enter The Task" style="background-color: black;width:15rem;border:none;">
                        <button class="btn btn-danger mx-3" id="add-task" type="submit">Add</button>
                    </div>
                </form>
            </div>

            <div class="todo-task">
                <div class="d-flex align-items-center border-bottom py-2">
                    <input class="form-check-input m-0" type="checkbox">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span class="text-light"> <del> Enter The Task And Save Here </del> </span>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>  

    {{-- start recent orders  --}}
    <div class="row my-4">
        <div class="col-md-12">
            <h4 class="text-secondary">Recent Orders</h4>
            <div class="table-responsive">
                <table class="table table-dark table-striped table-hover table-borderless align-middle">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Product Name</th>
                            <th>Customer Name</th>
                            <th>Order Id</th>
                            <th>Date</th>
                            <th>Address</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>1</td>
                            <td> Nike Shoes </td>
                            <td> Umar </td>
                            <td> #0032112</td>
                            <td> 17/2/2024 </td>
                            <td> Haji Shah Ali goth Korangi , Karachi </td>
                            <td> 1200k </td>
                            <td> <span class="badge bg-success">Delivered</span> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> Nike Shoes </td>
                            <td> Umar </td>
                            <td> #0032112</td>
                            <td> 17/2/2024 </td>
                            <td> Haji Shah Ali goth Korangi , Karachi </td>
                            <td> 1200k </td>
                            <td> <span class="badge bg-primary">Pending</span> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> Nike Shoes </td>
                            <td> Umar </td>
                            <td> #0032112</td>
                            <td> 17/2/2024 </td>
                            <td> Haji Shah Ali goth Korangi , Karachi </td>
                            <td> 1200k </td>
                            <td> <span class="badge bg-danger">Cancled</span> </td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </div>
    </div>
   {{-- End Recent Orders  --}}




@endsection
