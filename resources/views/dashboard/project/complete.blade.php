@extends('layouts.SupUserMaster')

@section('title', 'Complete Project - Techno Apogee Limited')
@section('SupUserContent')
    @include('dashboard.summernote.summernote')

    <div class="pagetitle">
        <h1>Complete Project</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Administrator.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Project</a></li>
                <li class="breadcrumb-item active">Insert New Project Details</li>
            </ol>
        </nav>
    </div>

    <table class="table table-hover datatable table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Project Name</th>
                <th scope="col">Project Category</th>
                <th scope="col">Project Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($CompleteProject as $key => $completeProject)
            <tr>
                <td>{{ $completeProject->id }}</td>
                <td><a href="{{ route('SupUser.ProjectUpdate',['project_id'=>$completeProject->id,'project_slug'=>$completeProject->project_slug]) }}">{{ $completeProject->project_name }}</a></td>
                <td>{{ $completeProject->project_category_slug }}</td>
                <td><img src="{{ asset('image/project') }}/{{ $completeProject->project_header_image }}" alt="{{ $completeProject->project_name }}" height="60px" width="80px"></td>
                <td>
                    <div class="button-group">
                        <a href="{{ route('SupUser.ProjectUpdate',['project_id'=>$completeProject->id,'project_slug'=>$completeProject->project_slug]) }}" class="btn btn-secondary btn-sm">Update</a>
                        <a href="" class="btn btn-danger btn-sm">Archive</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



@endsection
