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
                <section class="multiple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create Polls</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                                        @endif
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                        @endif
                                        <form class="form-horizontal error" action="{{ route('polls.store') }}"
                                            method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group error">
                                                        <div class="controls">
                                                            <input type="text" name="question" class="form-control"
                                                                placeholder="Enter Question" required=""
                                                                data-validation-required-message="This question field is required"
                                                                aria-invalid="true">
                                                            @error('question')
                                                                <span class="invalid-feedback" style="color:red">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none;"></div>
    <div class="drag-target" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none;"></div>
@endsection
