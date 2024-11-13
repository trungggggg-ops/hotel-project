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
                    <table class="table_deg">
                        <tr>
                            <th class="th_deg">Room_id</th>
                            <th class="th_deg">Name</th>
                            <th class="th_deg">Email</th>
                            <th class="th_deg">Phone</th>
                            <th class="th_deg">Arrival Date</th>
                            <th class="th_deg">Leving Date</th>
                            <th class="th_deg">Status</th>
                            <th class="th_deg">Room title</th>
                            <th class="th_deg">Price</th>
                            <th class="th_deg">Image</th>
                            <th class="th_deg">Delete</th>
                            <th class="th_deg">Status Update</th>

                        </tr>

                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->room_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->end_date }}</td>
                                <td>
                                    @if ($item->status == 'approve')
                                        <span style="color:skyblue">Approve</span>
                                    @endif
                                    @if ($item->status == 'rejected')
                                        <span style="color:red">Rejected</span>
                                    @endif
                                    @if ($item->status == 'waiting')
                                        <span style="color:rgb(213, 235, 135)">Waiting</span>
                                    @endif
                                </td>
                                <td>{{ $item->room->room_title }}</td>
                                <td>{{ $item->room->price }}</td>
                                <td>
                                    <img style="width: 200px" src="room/{{ $item->room->image }}" alt="">
                                </td>
                                <td>
                                    <a onclick="return confirm('Are you sure to delete this?')"
                                        href="{{ url('delete_booking', $item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <span style="padding-bottom:10px">
                                        <a href="{{ url('approve_booking', $item->id) }}"
                                            class="btn btn-success">Approve</a>
                                    </span>
                                    <a href="{{ url('rejected_booking', $item->id) }}"
                                        class="btn btn-warning">Rejected</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
        @include('admin.footer')
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
