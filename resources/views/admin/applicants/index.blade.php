@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header row">
                    <div class="col-lg-8">
                        <h4 class="card-title"> Applicants Table</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Cover
                                </th>
                                <th>
                                    Download
                                </th>
                                <th class="text-right">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applicants as $applicant)
                            <tr>

                                <td>
                                   {{$applicant->name}}
                                </td>
                                <td>
                                    {{$applicant->email}}
                                </td>
                                <td>
                                    {{$applicant->phone}}
                                </td>
                                <td>
                                    {{$applicant->cover}}
                                </td>
                                <td>
                                    <a target="_blank" href="{{asset('uploads/resumes/'.$applicant->cv)}}" class="btn btn-info" style="padding:5px">
                                        <i class="now-ui-icons arrows-1_cloud-download-93 p-1"></i> Download Resume
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('applicants.destroy',$applicant->id)}}" class="form"
                                          method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger" style="padding: 5px">
                                            <i class="fa fa-trash-o" style="font-size: 18px"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
            {{$applicants->links()}}
        </div>
    </div>
@endsection
