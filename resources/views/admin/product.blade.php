<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .title {
            padding-top: 25px;
            font-size: 25px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <h1 class="title">Add Product</h1>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <form method="post" action="{{url('uploadproduct')}}" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label>Product title</label>
                    <input type="text" name="title" placeholder="Product title" required />
                </div>
                <div style="padding: 15px;">
                    <label>Product price</label>
                    <input type="number" name="price" placeholder="Product price" required />
                </div>
                <div style="padding: 15px;">
                    <label>Product description</label>
                    <input type="text" name="description" placeholder="Product description" required />
                </div>
                <div style="padding: 15px;">
                    <label>Product quantity</label>
                    <input type="text" name="quantity" placeholder="Product quantity" required />
                </div>
                <div style="padding: 15px;">
                    <input type="file" name="file" />
                </div>
                <div style="padding: 15px;">
                    <input class="btn btn-success" type="Submit" />
                </div>
            </form>
        </div>
    </div>

    <!-- partial -->
    @include('admin.script')
</body>

</html>