@extends('layouts.app')

@section('title', 'Show ' . $project->name)
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')
                <div class="float-right">
                    <a href="{{ route('projects.index') }}" title="Back" class="btn btn-warning btn-sm btn-square">
                        <i class="cil-window-minimize" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('projects.edit', $project) }}" title="Edit project"
                        class="btn btn-primary btn-sm btn-square"><i class="cil-pencil" aria-hidden="true"></i>
                    </a>

                    <form method="POST" action="{{ route('projects.destroy', $project) }}" accept-charset="UTF-8"
                        style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm btn-square" title="Delete project"
                            onclick="return confirm(&quot;Confirm delete?&quot;)">
                            <i class="cil-x" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $project->id }}</td>
                        </tr>
                        <tr>
                            <th> Name </th>
                            <td> {{ $project->name }} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {{ $project->description }} </td>
                        </tr>
                        <tr>
                            <th> Tags </th>
                            <td>
                                @foreach ($project->tags as $tag)
                                <span class="badge badge-info">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th> Projects </th>
                            <td>
                                @if (count($project->images))
                                <div class="carousel slide" id="carouselExampleControls-{{ $project->id }}"
                                    data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($project->images as $image)
                                        @if (file_exists(public_path() . '/' . $image->src))
                                        <div class="carousel-item @if($loop->first) active @endif">
                                            <img class="d-block w-100" src="{{ asset($image->src) }}" alt="">
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls-{{ $project->id }}"
                                        role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls-{{ $project->id }}"
                                        role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
