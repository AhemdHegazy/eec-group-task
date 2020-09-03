@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="padding-bottom: 50px">
                <div class="card-header">
                    <h5 class="title">Edit Experience</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('experiences.update',$experience->id)}}" method="POST">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" required value="{{$experience->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea placeholder="Enter Description" style="border: 1px solid #E3E3E3;border-radius: 10px;" name="description" required id="description" cols="30" rows="10"  class="form-control">{{$experience->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-outline-danger"><i class="fa fa-save"></i> Update Experience</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
