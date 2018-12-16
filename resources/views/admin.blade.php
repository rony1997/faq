@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ADMIN Dashboard</div>

                    <div class="panel-body">
                        @component('components.who')
                        @endcomponent
                        <table class="table">
                            <thead>
                            <tr>

                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>

                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->isOnline())
                                            <li class="text-success">
                                                Online
                                            </li>
                                        @else
                                            <li class="text-muted">
                                                Offline
                                            </li>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
