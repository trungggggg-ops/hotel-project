<!DOCTYPE html>
<html>

<head>

    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
        .div_deg{
            padding-top: 30px;
        }

        .div_center{
            text-align: center;
            padding-top: 40px;
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
                        <div class="div_center">
                                <h1 style="font-size:30px; ">Update rooms</h1>
                                <form action="{{url('edit_room',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="div_deg">
                                                <label for="">Room title</label>
                                                <input type="text" name="title" id="" value="{{$data->room_title}}">
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Description</label>
                                            <textarea name="description" id="" cols="30" rows="10" >
                                                    {{$data->description}}
                                            </textarea>
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Price</label>
                                            <input type="number" name="price" id="" value="{{$data->price}}">
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Room type</label>
                                            <select name="type">
                                                <option selected value="{{$data->room_type}}">
                                                    {{$data->room_type}}
                                                </option>
                                                    <option value="regular">Regular</option>
                                                    <option value="premium">Premium</option>
                                                    <option value="deluxe">Deluxe</option>
                                            </select>
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Wifi</label>
                                            <select name="wifi">
                                                <option selected value="{{$data->wifi}}">
                                                    {{$data->wifi}}
                                                </option>
                                                    <option selected value="yes">Yes</option>
                                                    <option value="no">no</option>
                                            </select>
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Current image</label>
                                            <img src="room/{{$data->image}}" alt="" style="margin:auto; width:100px" >
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Upload image</label>
                                            <input type="file" name="image" id="">
                                        </div>

                                        <div class="div_deg">
                                                <input class="btn btn-primary" value="Update room" type="submit" name="" id="">
                                        </div>
                                </form>
                        </div>
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
