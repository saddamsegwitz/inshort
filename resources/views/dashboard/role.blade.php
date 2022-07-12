@extends('dashboard.template.master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <!-- users filter start -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Roles</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            {{-- <div class="users-list-filter">
                                <a href="{{ route('roles.create') }}" class="btn btn-primary">Create Role Name</a>
                            </div> --}}
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                @endif
                                <div class="users-list-filter">
                                    <form class="form-horizontal" action="{{ route('roles.store') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-role">Role</label>
                                                <fieldset class="form-group">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Role Name" required>
                                                    @if ($errors->has('name'))
                                                        <div class="help-block">
                                                            <ul role="alert" class="danger">
                                                                <li>{{$errors->first('name')}}</li>
                                                            </ul>
                                                        </div>
                                                    @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @if (isset($permissions) && !empty($permissions))
                                            @foreach ($permissions as $permission)
                                                <div class="col-md-3">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" name="permissions[]"
                                                            value="{{ $permission->name }}" class="form-check-input">
                                                        @if ($errors->has('permissions'))
                                                            <div class="help-block">
                                                                <ul role="alert" class="danger">
                                                                    <li>This name field is required</li>
                                                                </ul>
                                                            </div>
                                                        @enderror
                                                        <label class="form-check-label qcont text-dark"
                                                            for="account">{{ $permission->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <a href="{{ route('permissions.create') }}" class="btn btn-primary">Create
                                            Permission</a>
                                    @endif
                                </div>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- users filter end -->
            <!-- Ag Grid users list section start -->
            <div id="basic-examples">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Role</th>
                                                    <th>Permissions</th>
                                                    <th>Action</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($roles) && !empty($roles))
                                                    @foreach ($roles as $role)
                                                        <tr>
                                                            <th scope="row">{{ $role->id }}</th>
                                                            <td>{{ $role->name }}</td>
                                                            <td>
                                                                @if (isset($role->permissions) && !empty($role->permissions))
                                                                    @foreach ($role->permissions as $permission)
                                                                        <badge class="badge badge-secondary">
                                                                            {{ $permission->name }}</badge>
                                                                    @endforeach
                                                                @endif
                                                            </td>
                                                            <td class="btn-group">
                                                                <a class="btn btn-info btn-sm"
                                                                    href="{{ route('roles.edit', ['role' => $role->id]) }}"><i
                                                                        class="fa fa-pencil"></i></a>
                                                                <button class="btn btn-danger btn-sm"><i
                                                                        class="fa fa-times"></i></button>
                                                            </td>
                                                            <td>{{ $role->created_at }}</td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <th>No data found</th>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ag Grid users list section end -->
        </section>
        <!-- users list ends -->

    </div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none;"></div>
<div class="drag-target" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none;"></div>
@endsection
