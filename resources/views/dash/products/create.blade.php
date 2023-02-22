<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Product</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
    <!-- <script src="//code.jquery.com/jquery-1.12.3.js"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <style>
        .ibox-title {
    background-color: #FFFFFF;
    border-color: #E7EAEC;
    border-image: none;
    border-style: solid solid none;
    border-width: 1px;
    color: inherit;
    margin-bottom: 0;
    padding: 15px 90px 8px 15px;
    min-height: 48px;
    position: relative;
    clear: both;
    -webkit-border-radius: 3px 3px 0 0;
    -moz-border-radius: 3px 3px 0 0;
    border-radius: 2px 2px 0 0;
}
        .ibox-title h5 {
    display: inline-block;
    font-size: 14px;
    margin: 0 0 7px;
    padding: 0;
    text-overflow: ellipsis;
    float: none;
}
.ibox {
    clear: both;
    margin-bottom: 25px;
    margin-top: 0;
    padding: 0;
}
        </style>
</head>
<body>
<section>
@include('sidebar')
<div class="content-wrapper">
    <div class="container mt-2">
        <div class="row">
        <!-- <div class="col-lg-7"> -->
            <!-- </div> -->
            <div class="col-lg-9">
            <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <!-- <h1>Manage_product</h1>
            <small>manage_your_product</small> -->
            <ol class="breadcrumb text-right float-end align-items-end"  >
                <li class="pull-right" style="float:right !important"><a href=""><i class="pe-7s-home" style="float:right"></i> home</a></li>
                <li><a href="">product</a></li>
                <li class="active">manage_product </li>
            </ol>
        </div>
    </section>
    <div class="ibox-title border-bottom">
    <h2>Manage Product</h2>
    <div class="pull-right mb-2" style="margin-top:-22px">
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Add Product</a>
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
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->SKU }}</td>
                        <td>{{ $product->brand }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->varient }}</td>
                        <td><img src="images/{{ $product->product_image }}" width="100px" height="100px"></td>
                        <td>
                            <form action="" method="Post">
                                <a class="btn btn-primary" href="">Edit</a>
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $products->links() !!}
            </div>
        </div>
    </div>
</div>
</section>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
    <script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
    <script>
  $(document).ready(function() {
    $('#table').DataTable();
});
// $('#table').DataTable({
//                         dom: 'Bfrtip',
//                         buttons: [
//                             'copy', 'csv', 'excel', 'pdf', 'print'
//                         ]
//                     });
 </script>
  <script>
// Upgrade button class name
// $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';
// $(document).ready(function(){
//     $('#table').DataTable({
//         pageLength: 25,
//         responsive: true,
//         dom: '<"html5buttons"B>lTfgitp',
//         buttons: [
//             { extend: 'copy'},
//             {extend: 'csv'},
//             {extend: 'excel', title: 'ExampleFile'},
//             {extend: 'pdf', title: 'ExampleFile'},
//             {extend: 'print',
//              customize: function (win){
//                     $(win.document.body).addClass('white-bg');
//                     $(win.document.body).css('font-size', '10px');
//                     $(win.document.body).find('table')
//                             .addClass('compact')
//                             .css('font-size', 'inherit');
//             }
//             }
//         ]
//     });
// });
</script>
</body>
</html>