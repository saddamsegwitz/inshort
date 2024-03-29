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
                            <h4 class="card-title">Posts</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            @can('permission_create', $posts)
                                <div class="users-list-filter">
                                    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
                                </div>
                            @endcan
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
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Category En</th>
                                                            <th>Title En</th>
                                                            <th>Body En</th>
                                                            <th>Category Te</th>
                                                            <th>Title Te</th>
                                                            <th>Body Te</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($posts as $post)
                                                            <tr>
                                                                <th scope="row">{{ $post->id}}</th>
                                                                <td>{{$post->category->name_en}}</td>
                                                                <td>{{$post->title_en}}</td>
                                                                <td>{{Str::words($post->body_en,4)}}</td>
                                                                <td>{{$post->category->name_te}}</td>
                                                                <td>{{$post->title_te}}</td>
                                                                <td>{{Str::words($post->body_te,4)}}</td>
                                                                <td class="btn-group"> <a href="#" class="btn btn-primary">View</a><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
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
                        {{ $posts->links() }}
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
