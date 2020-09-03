@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="padding-bottom: 50px">
                <div class="card-header">
                    <h5 class="title">Add Career</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('careers.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea placeholder="Enter Description" style="border: 1px solid #E3E3E3;border-radius: 10px;" name="description" id="summary-ckeditor" required cols="30" rows="10"  class="summernote form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select name="category_id" id="category_id" class="form-control" required>
                                        @foreach(\App\Category::all() as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
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
                                            <option value="{{$experience->id}}">{{$experience->name}}</option>
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
                                            <option value="{{$location->id}}">{{$location->country}} - {{$location->providence}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-outline-danger"><i class="fa fa-plus"></i> Add Career</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
@endsection
