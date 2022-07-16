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
                            <h4 class="card-title">Category</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="users-list-filter">
                                <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>
                            </div>
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
                                                            @foreach (config('app.available_locales') as $locale)
                                                                <th>Category {{ strtoupper($locale) }}</th>
                                                                <th>Image {{ strtoupper($locale) }}</th>
                                                            @endforeach
                                                            <th>Status</th>
                                                            <th>Created At</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($categories) && !empty($categories))
                                                            @foreach ($categories as $category)
                                                                <tr>
                                                                    <th scope="row">{{ $category->id }}</th>
                                                                    <td>{{ $category->name_en }}</td>
                                                                    <td><img src="{{ asset('uploads/category/images/' . $category->image_en) }}"
                                                                            alt="{{ $category->name_en }}"
                                                                            width="100" height="100"></td>
                                                                    <td>{{ $category->name_te }}</td>
                                                                    <td><img src="{{ asset('uploads/category/images/' . $category->image_te) }}"
                                                                            alt="{{ $category->name_te }}"
                                                                            width="100" height="100"></td>
                                                                    <td>{!! $category->status == 1
                                                                        ? '<badge class="badge badge-info">Active</badge>'
                                                                        : '<badge class="badge badge-warning">Inactive</badge>' !!}</td>
                                                                    <td>{{ $category->created_at }}</td>
                                                                    <td>
                                                                        @if ($category->status == 1)
                                                                            <a href="{{ route('categories.show', $category->id) }}"
                                                                                class="btn btn-warning">Inactive</a>
                                                                        @else
                                                                            <a href="{{ route('categories.show', $category->id) }}"
                                                                                class="btn btn-info">Active</a>
                                                                        @endif
                                                                        <a href="#" class="btn btn-danger">Delete</a>
                                                                    </td>
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
                        {{ $categories->links() }}
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
