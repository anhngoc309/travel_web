        @php
        $result = session('result');
          $tours=$result['tours'];
          $placeNames=$result['placeNames'];
          $index =0;
        @endphp
        @foreach($tours as $tour)
        <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="data:image/jpeg;base64,{{ base64_encode($tour->tour_image) }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                <h4>Tour Name: {{ $tour->name }}</h4>
                <h6>Tour Type: {{ $tour->detail }}</h6>
                <p><b>Tour Location:</b> {{ $placeNames[$index]}}
                    <br><b>Start date: </b>{{ $tour->date_start }}
                    <br><b>End date: </b>{{ $tour->date_end }}
                    <br><b>Creation date: </b>{{ $tour->creation_date }}
                    <br><b>Updating date: </b>{{ $tour->updating_date }}
                    <br><b>Total menber: </b>{{ $tour->total_member }}
                </p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                <h5>{{ $tour->price }} VND</h5>
                <a href="{{ route('details',['Tid' => $tour->Tid]) }}" class="view">Details</a>
            </div>
            <div class="clearfix"></div>
        </div>
        @php
            $index++;
        @endphp
    @endforeach
    </div>
