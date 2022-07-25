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
                            <h4 class="card-title">Poll</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            {{-- @can('permission_create', $permissions) --}}
                            <div class="users-list-filter">
                                <a href="{{ route('polls.create') }}" class="btn btn-primary">Create Poll</a>
                            </div>
                            {{-- @endcan --}}
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body float-right">
                                <div class="users-list-filter">

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
                                                            <th>Poll</th>
                                                            <th>Created At</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($polls) && !empty($polls))
                                                            @foreach ($polls as $poll)
                                                                <tr>
                                                                    <th scope="row">{{ $poll->id }}</th>
                                                                    <td>{{ $poll->name }}</td>
                                                                    <td>{{ $poll->guard_name }}</td>
                                                                    <td>{{ $poll->created_at }}</td>
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
                        {{ $polls->links() }}
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
