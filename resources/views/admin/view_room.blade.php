<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
            .table_deg{
                border: 2px solid white;
                margin:  auto;
                width: 80%;
                text-align: center;
                margin-top: 40px;
            }

            .th_deg{
                background-color: skyblue;
                padding: 15px;
            }
            tr{
                border: 3px solid white;
            }
            td{
                padding: 10px
            }
    </style>
</head>

<body>
    <header class="header">
        @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                       <table class="table_deg">
                            <tr>
                                <th  class="th_deg">ID</th>
                                <th class="th_deg">Room Title</th>
                                <th class="th_deg">Description</th>
                                <th class="th_deg">Price</th>
                                <th class="th_deg">Wifi</th>
                                <th class="th_deg">Room Type</th>
                                <th class="th_deg">Image</th>
                                <th class="th_deg">Action</th>
                            </tr>

                            @foreach ( $data as $item )
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->room_title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->price}}$</td>
                                    <td>{{$item->wifi}}</td>
                                    <td>{{$item->room_type}}</td>
                                    <td>
                                        <img style="width: 100px" src="room/{{$item->image}}" alt="">
                                    </td>
                                    <td>
                                            <a onclick="return confirm('Are you sure to delete this?')" href="{{url('room_delete',$item->id)}}" class="btn btn-danger">Delete</a>
                                            <br>
                                            <br>
                                            <a href="{{url('room_update',$item->id)}}" class="btn btn-primary">Update</a>
                                    </td>
                                </tr>           
                            @endforeach
                     
                       </table>
                </div>
            </div>
        </div
        
        >
        @include('admin.footer')
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
