<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.css')
    </head>
    <body>
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <table>
                    <tr style="background-color: grey;">
                        <td style="padding: 20px;">Title</td>
                        <td style="padding: 20px;">Description</td>
                        <td style="padding: 20px;">Quantity</td>
                        <td style="padding: 20px;">Price</td>
                        <td style="padding: 20px;">Image</td>
                        <td style="padding: 20px;">Update</td>
                        <td style="padding: 20px;">Delete</td>
                    </tr>
                    @foreach($data as $product)
                        <tr align="center" style="background-color: black;">
                            <td style="padding-right: 20px;">{{$product->title}}</td>
                            <td style="padding-right: 20px;">{{$product->description}}</td>
                            <td style="padding-right: 20px;">{{$product->quantity}}</td>
                            <td style="padding-right: 20px;">{{$product->price}}</td>
                            <td style="padding-bottom: 5px;"><img height="150" width="150" src="{{asset('/productimage/'.$product->image)}}"/></td>
                            <td style="padding-right: 20px;"><a class="btn btn-primary">Update</a></td>
                            <td style="padding-right: 20px;"><a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        @include('admin.script')
    </body>
</html>