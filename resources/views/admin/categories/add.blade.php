@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="padding-bottom: 50px">
                <div class="card-header">
                    <h5 class="title">Add Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('categories.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea placeholder="Enter Description" style="border: 1px solid #E3E3E3;border-radius: 10px;" name="description" required id="description" cols="30" rows="10"  class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-5">
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-outline-danger"><i class="fa fa-plus"></i> Add Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
