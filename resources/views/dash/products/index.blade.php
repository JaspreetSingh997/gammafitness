<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products - Gamma Fitness</title>

    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">

    {{-- Linking FontAwesome --}}
    <script src="https://kit.fontawesome.com/28535bdb92.js" crossorigin="anonymous"></script>

    {{-- Linking Chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script type="text/javascript" src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <section id="productManageCustom">
    <section id="dashHome">
        <div class="dashContainer">
            @include('sidebar')
            <div class="dashMainContainer">
                <div class="dashMainHome">
                    <div class="dMainHeader">
                        <div class="dMainTitle">
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                    <div class="col-lg-xl">
                        <section class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <ol class="breadcrumb text-right float-end align-items-end">
                                    <li class="pull-right" style="float:right !important"><a href=""><i
                                                class="pe-7s-home" style="float:right"></i> home</a></li>
                                    <li><a href="">product</a></li>
                                    <li class="active">manage_product </li>
                                </ol>
                            </div>
                        </section>
                        <div class="ibox-title border-bottom">
                            <h2>Manage Product</h2>
                            <div class="pull-right mb-2" style="margin-top:22px">
                                {{-- {{ route('products.create') }} --}}
                                <a class="btn btn-success" href=""> Add Product</a>
                            </div>
                            <div class="ibox-tools">
                                <!-- <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a> -->
                                <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a> -->
                                <!-- <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul> -->
                                <!-- <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a> -->
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <table class="table  table-striped table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>product Name</th>
                                    <th>product quantity</th>
                                    <th>product SKU</th>
                                    <th>product Brand</th>
                                    <th>product Category</th>
                                    <th>product Varient</th>
                                    <th>product Image</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($products as $product) --}}
                                    <tr>
                                        <td>Product Name</td>
                                        {{-- <td>{{ $product->id }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->SKU }}</td>
                                        <td>{{ $product->brand }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ $product->varient }}</td>
                                        <td><img src="images/{{ $product->product_image }}" width="100px"
                                                height="100px">
                                        </td>
                                        <td>
                                            <form action="" method="Post">
                                                <a class="btn btn-primary" href="">Edit</a>
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                        {{-- {!! $products->links() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script></script>
</body>

</html>
