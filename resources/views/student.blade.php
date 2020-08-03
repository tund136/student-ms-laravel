<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Student Management System</title>
</head>
<body>
@include("navbar")

<div class="row header-container justify-content-center mt-4">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-7">
                @include("studentlist")
            </section>
            <section class="col-5"></section>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-7">
                @include("studentlist")
            </section>
            <section class="col-5">
                <div class="card mb-3">
                    <img
                        src="https://my.lwv.org/sites/default/files/New%20Castle%20County/files/education_pxhere-1201352_cropped.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the information of the new student</h5>

                        <form action="{{ url('/store') }}" method="post">
                            {{--Cross-site Request Forgery--}}
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input name="cne" type="text" class="form-control"
                                       placeholder="Enter cne..." required>
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control"
                                       placeholder="Enter the first name..." required>
                            </div>

                            <div class="form-group">
                                <label>Second Name</label>
                                <input name="secondName" type="text" class="form-control"
                                       placeholder="Enter the second name..." required>
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"
                                       placeholder="Enter the age..." required>
                            </div>

                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control"
                                       placeholder="Enter the speciality..." required>
                            </div>

                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-7">
                @include("studentlist")
            </section>
            <section class="col-5"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-7">
                @include("studentlist")
            </section>
            <section class="col-5">
                <div class="card mb-3">
                    <img
                        src="https://my.lwv.org/sites/default/files/New%20Castle%20County/files/education_pxhere-1201352_cropped.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update information of the student</h5>

                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            {{--Cross-site Request Forgery--}}
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input value="{{$student->cne}}" name="cne" type="text" class="form-control"
                                       placeholder="Enter cne..." required>
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control"
                                       placeholder="Enter the first name..." required>
                            </div>

                            <div class="form-group">
                                <label>Second Name</label>
                                <input value="{{$student->secondName}}" name="secondName" type="text"
                                       class="form-control"
                                       placeholder="Enter the second name..." required>
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{$student->age}}" name="age" type="text" class="form-control"
                                       placeholder="Enter the age..." required>
                            </div>

                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="{{$student->speciality}}" name="speciality" type="text"
                                       class="form-control"
                                       placeholder="Enter the speciality..." required>
                            </div>

                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endif


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
