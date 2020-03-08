@extends('./../layouts')

@section('contents')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm Người Dùng @if (session('thongbao'))
                                {{ session('thongbao') }}
                            @endif</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                            @csrf

                            @if($errors->count())
                                <div class="bg-gradient-danger">
                                    @foreach ($errors as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <br>
                                    @if ($errors)
                                    {{$errors->first('name')}}
                                    @endif
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <br>
                                    @if ($errors)
                                    {{$errors->first('date_of_birth')}}
                                    @endif
                                    <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}">
                                </div>



                                <div class="form-group">
                                    <label>Email</label>
                                    <br>
                                    @if ($errors)
                                    {{$errors->first('email')}}
                                    @endif
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <br>
                                    @if ($errors)
                                    {{$errors->first('phone')}}
                                    @endif
                                    <input type="number" class="form-control" name="phone" value="{{ old('phone') }}">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <br>
                                    @if ($errors)
                                    {{$errors->first('password')}}
                                    @endif
                                    <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputFile">Avatar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
