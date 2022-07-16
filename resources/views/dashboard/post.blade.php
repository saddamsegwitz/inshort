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
                                                <table class="table table-hover mb-0" id="posts">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Category</th>
                                                            <th>Title_en</th>
                                                            <th>Image_en</th>
                                                            <th>Description_en</th>
                                                            <th>Title_te</th>
                                                            <th>Image_te</th>
                                                            <th>Description_te</th>
                                                            <th>Created At</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- {{ $posts->links() }} --}}
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
@section('script')
<script type="text/javascript">
    $(function() {
        var table = $('#posts').DataTable({
            processing: true,
            serverSide: true,
            iDisplayLength: 50,
            ajax: "{{ route('posts.list') }}",
            columns: [{
                    data: 'id',
                    name: 'id',
                    searchable: true
                },
                {
                    data: 'category_id',
                    name: 'category_id',
                    searchable: true
                },
                {
                    data: 'title_en',
                    name: 'title_en',
                    searchable: true
                },
                {
                    data: 'image_en',
                    name: 'image_en',
                    searchable: true
                },
                {
                    data: 'body_en',
                    name: 'body_en',
                    searchable: true
                },
                {
                    data: 'title_te',
                    name: 'title_te',
                    searchable: true
                },
                {
                    data: 'image_te',
                    name: 'image_te',
                    searchable: true
                },
                {
                    data: 'body_te',
                    name: 'body_te',
                    searchable: true
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                    searchable: true
                },
            ]
        });

    });
</script>
@endsection
