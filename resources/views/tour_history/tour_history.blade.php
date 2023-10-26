@extends('layouts.user_layout.app')

@section('content')
@include('package.detail.detail_script')
@include('includes.banner1')
<!--- contact ---->
@php
$ucontrolller=new \App\Http\Controllers\UsersController();
$bookings=$ucontrolller->__getHistory();
@endphp
<table border="1" width="100%">
    <tr align="center">
        <th>#</th>
        <th>Booking Id</th>
        <th>Package Name</th>
        <th>From</th>
        <th>To</th>
        <th>Comment</th>
        <th>Status</th>
        <th>Booking Date</th>
        <th>Action</th>
    </tr>
    @foreach ($bookings as $booking)
    <tr align="center">
        <td>{{ $loop->iteration }}</td>
        <td>#BK{{ $booking->BTid }}</td>
        <td><a href="{{ route('list_tour', ['Tid' => $booking->Tid]) }}">{{ $booking->name }}</a></td>
        <td>{{ $booking->date_start }}</td>
        <td>{{ $booking->date_end }}</td>
        <td>{{ $booking->comment }}</td>
        <td>
            @if ($booking->status == 0)
                Pending
            @elseif ($booking->status == 1)
                Confirmed
            @elseif ($booking->status == 2 && $booking->cancelby == 'u')
                Canceled by you at {{ $booking->updated_at }}
            @elseif ($booking->status == 2 && $booking->cancelby == 'a')
                Canceled by admin at {{ $booking->updated_at }}
            @endif
        </td>
        <td>{{ $booking->created_at }}</td>
        @if ($booking->status == 2)
        <td>Cancelled</td>
        @else
        <td>
            <form action="{{ route('cancel_booking', ['BTid' => $booking->BTid]) }}" method="post">
                @csrf <!-- Sử dụng @csrf để bảo vệ khỏi Cross-Site Request Forgery (CSRF) -->

                <button type="submit" onclick="return confirm('Do you really want to cancel booking')" class="btn-cancel">Cancel</button>
            </form>
        </td>
        @endif
    </tr>
    @endforeach
</table>

<!--- /contact ---->
@endsection
