<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/career.css')}}">
    <title>EEC - Careers</title>
</head>

<body>

    <br><br><br><br><br>

    <section>
        <div class="container">
            <h1>Careers</h1>
            <p>
                EEC Group is an “Employer of Choice” with a range of interesting and challenging opportunities that will
                take your career into a different realm. We reward performance, creativity and going beyond the call of
                duty. If you are ambitious, want to be part of something big, want to learn, thrive, grow and make a
                difference with our family then apply now.
            </p>
            <div class="row">
                @csrf
                <div class="col-md-3">
                    <div class="selectbox">
                        <select id="location" name="location" class="form-control careers">
                            <option value="0" selected>All Job Location</option>
                            @foreach($locations as $location)
                                <option value="{{$location->id}}">{{$location->country}} - {{$location->providence}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="selectbox">
                        <select id="category" name="Category" class="form-control careers">
                            <option value="0" selected>All Job Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="selectbox">
                        <select id="experience" name="experience" class="form-control careers">
                            <option value="0" selected>All Years Of Experience</option>
                            @foreach($experiences as $experience)
                                <option value="{{$experience->id}}">{{$experience->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row " id="results">
                @foreach($careers as $career)
                    <div class="col-md-4">
                        <div class="item">
                            <h3>{{$career->name}}</h3>
                            <h6>{{$career->location->country}} / {{$career->location->providence}}</h6>
                            <p>{{$career->category->name}}</p>
                            <a href="{{route('career.single',$career->id)}}">More Details </a>
                            <span class="years">{{$career->experience->name}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <footer>
        <br>
        footer
        <br>
        <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>


        $('.careers').change(function(){
            if($(this).val() != '')
            {
                var select = $(this).attr("id");
                var location = $('#location').val();
                var category = $('#category').val();
                var experience = $('#experience').val();

                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('careers.fetch') }}",
                    method:"POST",
                    data:{select:select, experience:experience,category:category,location:location, _token:_token},
                    success:function(data)
                    {
                        $('#results').html(data);
                    }

                })
            }
        });
    </script>
</body>

</html>
