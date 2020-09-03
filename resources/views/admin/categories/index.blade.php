@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header row">
                    <div class="col-lg-8">
                        <h4 class="card-title"> Categories Table</h4>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a href="{{route('categories.create')}}" class="btn btn-primary" >Add new <i class="fa fa-plus-square"></i></a>
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
                                    Description
                                </th>
                                <th class="text-right">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>

                                    <td>
                                       {{$category->name}}
                                    </td>
                                    <td>
                                        {{$category->description}}
                                    </td>
                                    <td  style="width: 7%">
                                            <div class="" style="width: 45%;float: left">
                                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info" style="padding:5px">
                                                    <i class="fa fa-edit" style="font-size: 18px"></i>
                                                </a>
                                            </div>
                                            <div class="" style="width: 45%;float: left">
                                                <form action="{{route('categories.destroy',$category->id)}}" class="form"
                                                      method="POST">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-danger" style="padding: 5px">
                                                        <i class="fa fa-trash-o" style="font-size: 18px"></i>
                                                    </button>
                                                </form>
                                            </div>
                                    </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
            {{$categories->links()}}
        </div>
    </div>
@endsection
