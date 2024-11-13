<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')
    <style>
        label {
            display: inline-block;
            width: 200px
        }

        input {
            width: 100%
        }
    </style>
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        @include('home.header')
    </header>
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="serv_hover" class="room">
                        <div class="room_img" style="padding:20px ">
                            <figure><img style="height: 300px;width:800px" src="room/{{ $data->image }}"
                                    alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>{{ $data->room_title }}</h3>
                            <p style="padding: 12px">{{ $data->description }}</p>
                            <h4 style="padding: 12px">Free wifi: {{ $data->wifi }}</h4>
                            <h4 style="padding: 12px">Free wifi: {{ $data->room_type }}</h4>
                            <h4 style="padding: 12px">Price: {{ $data->price }}</h4>
                            <a class="btn btn-primary" href="{{ url('room_details', $data->id) }}">Room Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    @if (session('fail'))
                        <div class="alert alert-danger">
                            {{ session('fail') }}
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <h1>Book Room</h1>
                    <form action="{{ url('add_booking', $data->id) }}" method="POST">
                        @csrf
                        <div>
                            <label for="">Name</label>
                            <input type="text" name="name" id=""
                                @if (Auth::user()) value="{{ Auth::user()->name }}" @endif>
                        </div>

                        <div>
                            <label for="">Email</label>
                            <input type="text" name="email" id=""
                                @if (Auth::user()) value="{{ Auth::user()->email }}" @endif>
                        </div>

                        <div>
                            <label for="">Phone</label>
                            <input type="number" name="phone"
                                id=""@if (Auth::user()) value="{{ Auth::user()->phone }}" @endif>
                        </div>

                        <div>
                            <label for="">Start Date</label>
                            <input type="date" name="startDate" id="startDate">
                        </div>

                        <div>
                            <label for="">End Date</label>
                            <input type="date" name="endDate" id="endDate">
                        </div>

                        <div style="padding-top: 20px">
                            <input type="submit" class="btn btn-primary" name="" id=""
                                value="Book Room">
                        </div>
                </div>
                </form>
            </div>



        </div>
    </div>
    </div>

    <!--  footer -->
    @include('home.footer')
    <!-- end footer -->
    <script>
        $(function() {
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if (month < 10) {
                month = '0' + month.toString();

            }
            if (day < 10) {
                day = '0' + day.toString();

            }

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);
        })
    </script>
</body>

</html>
