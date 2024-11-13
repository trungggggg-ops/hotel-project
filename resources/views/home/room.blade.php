<div  class="our_room">
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
         @foreach ( $data as $item )
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img  style="height: 200px;width:350px" src="room/{{$item->image }}" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>{{$item->room_title}}</h3>
                   <p>{{$item->description}}</p>
                   <a class="btn btn-primary" href="{{url('room_details',$item->id)}}">Room Details</a>
                </div>
             </div>
          </div>
          @endforeach
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img src="images/room6.jpg" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>Bed Room</h3>
                   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>