@extends('admin::layouts.content')

@section('page_title')
    Newsletter Subscribers
@stop

@section('content')
    <div class="content">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h1>Subscribers</h1>
            <div>
                <a href="{{ route('admin.newsletter.compose') }}" class="btn btn-primary">Send Newsletter</a>
                <a href="{{ route('admin.newsletter.export') }}" class="btn btn-secondary">Export CSV</a>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Subscribed At</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subscribers as $subscriber)
                <tr>
                    <td>{{ $subscriber->email }}</td>
                    <td>{{ $subscriber->name }}</td>
                    <td>{{ $subscriber->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
