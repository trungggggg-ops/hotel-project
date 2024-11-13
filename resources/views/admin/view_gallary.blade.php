<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .table_deg {
            border: 2px solid white;
            margin: auto;
            width: 100%;
            max-width: 100%;
            overflow-x: auto;
            text-align: center;
            margin-top: 40px;
            display: block;
            /* Ensure block display for proper scrolling */
        }

        .table-container {
            overflow-x: auto;
            /* Enable horizontal scrolling */
        }

        .th_deg {
            background-color: skyblue;
            padding: 15px;
        }

        tr {
            border: 3px solid white;
        }

        td {
            padding: 10px;
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
                    <center>
                        <h1 style="font-size:40px; font-weight:bold; color:white">Gallary</h1>

                        <div class="row">
                            @foreach ($data as $item)
                                <div class="col-md-4">
                                    <img src="gallary/{{ $item->image }}"
                                        style="height:200px!important; width:300px!important" alt="">
                                        <a href="{{url('delete_gallary',$item->id)}}" class="btn btn-danger">Delete Image</a>

                                </div>
                            @endforeach
                        </div>
                        <form action="{{ url('upload_gallary') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div style="padding: 30px">
                                <label for="">Upload Image</label>
                                <input type="file" name="image" id="">
                            </div>

                            <div>
                                <input type="submit" class="btn btn-primary" value="Add image">
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
        @include('admin.footer')
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
