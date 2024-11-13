<!DOCTYPE html>
<html>

<head>
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

                                <h1 style="font-size:30px; ">Add rooms</h1>
                                <form action="{{url('add_room')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="div_deg">
                                                <label for="">Room title</label>
                                                <input type="text" name="title" id="">
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Description</label>
                                            <textarea name="description" id="" cols="30" rows="10"></textarea>
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Price</label>
                                            <input type="number" name="price" id="">
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Room type</label>
                                            <select name="type">
                                                    <option value="regular">Regular</option>
                                                    <option value="premium">Premium</option>
                                                    <option value="deluxe">Deluxe</option>
                                            </select>
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Wifi</label>
                                            <select name="wifi">
                                                    <option selected value="yes">Yes</option>
                                                    <option value="no">no</option>
                                            </select>
                                        </div>

                                        <div class="div_deg">
                                            <label for="">Upload image</label>
                                            <input type="file" name="image" id="">
                                        </div>

                                        <div class="div_deg">
                                                <input class="btn btn-primary" value="Add room" type="submit" name="" id="">
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
