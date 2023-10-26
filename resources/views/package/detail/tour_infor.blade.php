<!--- selectroom ---->
<div class="selectroom">
	<div class="container">
@foreach($tours as $tour)
    <form name="book" method="post" action="{{route('booking',['Tid' => $tour->Tid])}}">
        @csrf
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="data:image/jpeg;base64,{{ base64_encode($tour->tour_image) }}" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2>Tour Name: {{ $tour->name }}</h2>
				{{-- ///<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p> --}}
				<h6>Tour Type: {{ $tour->detail }}</h6>
				<p><b>Tour Location:</b> {{ $placeName}}
					<p><b>Features</b> {{ $tour->detail }}</p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				{{ $tour->date_start }}
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				{{ $tour->date_end }}
			</div>
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Grand Total</p>
					<h3>{{ $tour->price }} VND</h3>
				</div>
			</div>
		<h3>Package Details</h3>
				<p style="padding-top: 1%">{{ $tour->detail }}</p>
				<div class="clearfix"></div>
		</div>
        <div class="selectroom_top">
            <h2>Travels</h2>
            <div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
                <ul>
                    <li class="spe">
                        <label class="inputLabel">Comment</label>
                        <input class="special" type="text" name="comment" required>
                    </li>
                    @if(auth()->check())
                    <li class="spe" align="center">
                        <button type="submit" name="submit2" class="btn btn-primary">Book</button>
                    </li>
                    @else
                    <li class="sigi" align="center" style="margin-top: 1%">
                        <a href="#" data-toggle="modal" data-target="#myModal4" class="btn btn-primary">Book</a>
                    </li>
                    @endif
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>

		</form>
        @endforeach
	</div>
</div>
<!--- /selectroom ---->
