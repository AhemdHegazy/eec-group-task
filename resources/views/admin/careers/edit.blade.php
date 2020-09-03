@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="padding-bottom: 50px">
                <div class="card-header">
                    <h5 class="title">Edit Career</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('careers.update',$career->id)}}" method="POST">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" required value="{{$career->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea placeholder="Enter Description" style="border: 1px solid #E3E3E3;border-radius: 10px;" required name="description" id="description" cols="30" rows="10"  class="summernote form-control">{!! $career->description !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Select career</label>
                                    <select name="career_id" id="career_id" class="form-control" required>
                                        @foreach(\App\Category::all() as $category)
                                            <option {{$category->id == $career->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Select Experience</label>
                                    <select name="experience_id" id="experience_id" class="form-control" required>
                                        @foreach(\App\Experience::all() as $experience)
                                            <option {{$experience->id == $career->experience_id ? 'selected' : ''}} value="{{$experience->id}}">{{$experience->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Select Location</label>
                                    <select name="location_id" id="location_id" class="form-control" required>
                                        @foreach(\App\Location::all() as $location)
                                            <option {{$location->id == $career->location_id ? 'selected' : ''}} value="{{$location->id}}">{{$location->country}} - {{$location->providence}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-outline-danger"><i class="fa fa-save"></i> Update Career</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
