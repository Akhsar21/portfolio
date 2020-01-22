@extends('layouts.app')

@section('title', 'All Subscribers')
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')
                <form method="GET" action="{{ route('subscribers.index') }}" accept-charset="UTF-8"
                    class="form-inline float-right" role="search">
                    <div class="input-group">
                        <select class="form-control-sm" name="active">
                            <option value="" @if (empty(request('active'))) selected @endif>All</option>
                            <option value="true" @if (request('active')=='true' ) selected @endif>Subscaribed
                            </option>
                            <option value="false" @if (!empty(request('active')) && request('active') !='true' )
                                selected @endif>Unsubscaribed</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-secondary btn-sm" type="submit">
                                <i class="cil-filter"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            
            <div class="card-body">
                <table class="table table-responsive-sm table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            {{-- <th>Name</th> --}}
                            <th>Email</th>
                            <th>Subscribed</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($subscribers as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            {{-- <td>{{ $item->name }}</td> --}}
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->subscribed }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                <h4>No subscribers</h4>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="pagination"> {!! $subscribers->render() !!} </div>
            </div>
        </div>
    </div>
</div>
@endsection