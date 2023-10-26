@extends('layouts.user_layout.app')

@section('content')
@include('package.detail.detail_script')
@include('includes.banner1')

<div class="privacy">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Issue Tickets</h3>
        @if(isset($error))
            <div class="errorWrap"><strong>ERROR</strong>: {{ $error }}</div>
        @elseif(isset($msg))
            <div class="succWrap"><strong>SUCCESS</strong>: {{ $msg }}</div>
        @endif
        <p>
            <table border="1" width="100%">
                <tr align="center">
                    <th>#</th>
                    <th>Ticket Id</th>
                    <th>User Id</th>
                    <th>Tour Id</th>
                    <th>Issue</th>
                    <th>Description</th>
                    <th>Admin Remark</th>
                    <th>Reg Date</th>
                    <th>Remark date</th>
                </tr>
                @foreach($issues as $issue)
                <tr align="center">
                    <td>{{ $loop->iteration }}</td>
                    <td width="100">#TKT-{{ $issue->id }}</td>
                    <td>{{ $issue->Uid }}</td>
                    <td>{{ $issue->Tid }}</td>
                    <td>{{ $issue->Issue }}</td>
                    <td width="300">{{ $issue->Description }}</td>
                    <td>{{ $issue->AdminRemark }}</td>
                    <td width="100">{{ $issue->PostingDate }}</td>
                    <td width="100">{{ $issue->AdminremarkDate }}</td>
                </tr>
                @endforeach
            </table>
        </p>
    </div>
</div>

@endsection
