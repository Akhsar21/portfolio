@extends('layouts.app')

@section('title', 'Show ' . $tag->name)
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')
                <div class="float-right">
                    <a href="{{ route('tags.index') }}" title="Back" class="btn btn-warning btn-sm btn-square">
                        <i class="cil-window-minimize" aria-hidden="true"></i> 
                    </a>
                    <button class="btn btn-primary btn-sm btn-square" type="button" title="Edit tags" data-toggle="modal"
                        data-target="#edit">
                        <i class="cil-pencil" aria-hidden="true"></i> 
                    </button>

                    <form method="POST" action="{{ route('tags.destroy', $tag) }}" accept-charset="UTF-8"
                        style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm btn-square" title="Delete tags"
                            onclick="return confirm(&quot;Confirm delete?&quot;)">
                            <i class="cil-x" aria-hidden="true"></i> 
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $tag->id }}</td>
                        </tr>
                        <tr>
                            <th> Name </th>
                            <td> {{ $tag->name }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('admin.tags.edit')
@endsection