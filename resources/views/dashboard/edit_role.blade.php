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
                                <div class="users-list-filter">
                                    <form action="{{ route('roles.update', $role->id) }}" method="post">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-role">Role</label>
                                                <fieldset class="form-group">
                                                    <input type="text" value="{{ $role->name }}" class="form-control"
                                                        name="name" placeholder="Enter Role">
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                           @php
                                               $rolePermissions = $role->permissions->map(function($permission) {
                                                    return $permission->name;
                                               });
                                           @endphp
                                            @if (isset($permissions) && !empty($permissions))
                                                @foreach ($permissions as $permission)
                                                    <div class="col-md-3">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                                                {{ in_array($permission->name, $rolePermissions->toArray()) ? 'checked' : '' }}
                                                                class="form-check-input" id="account">
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
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none;"></div>
    <div class="drag-target" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none;"></div>
@endsection
