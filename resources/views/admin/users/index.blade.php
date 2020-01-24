@extends('layouts.app')

@section('title', 'All Users')
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')</div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="row">#</th>
                            <th scope="row">Name</th>
                            <th scope="row">Email</th>
                            <th scope="row">Roles</th>
                            <th scope="row">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <th scope="col">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                                @can('edit.users')
                                <a href="{{ route('admin.users.edit', $user) }}" title="Edit user"
                                    class="btn btn-primary btn-sm">
                                    <i class="cil-pencil" aria-hidden="true"></i>
                                </a>
                                @endcan

                                @can('delete.users')
                                <form method="POST" action="{{ route('admin.users.destroy', $user) }}"
                                    style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete user"
                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="cil-trash"
                                            aria-hidden="true"></i></button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                <h4>No Users</h4>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="pagination-wrapper">
            </div>
        </div>
    </div>
</div>

{{-- @include('admin.categories.create') --}}
@endsection