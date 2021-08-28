<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-black text-center pt-5">Create Profile</h1>

    <div class="container-fluid w-75" id="editUser">
        <form action="{{url('/user') . '/' . Auth::id()}}" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="input-group m-auto mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Add Fullname">
                    @error('name')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="input-group m-auto mb-3">
                    <input type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" placeholder="Add Your Date_of_Birth">
                    @error('date_of_birth')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="input-group m-auto mb-3">
                    <input type="text" class="form-control @error('job') is-invalid @enderror" name="job" placeholder="Add Your Job">
                    @error('job')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="input-group m-auto mb-3">
                    <!-- <input type="text" class="form-control @error('type_learning') is-invalid @enderror" name="type_learning" placeholder="Add Your type_learning"> -->
                    <select class="form-control @error('type_learning') is-invalid @enderror" name = "type_learning">
                        <option>Visual</option>
                        <option>Auditorial</option>
                        <option>Kinestetik</option>
                        <option>General</option>
                    </select>
                    @error('type_learning')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="input-group m-auto mb-3">
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Add address">
                    @error('address')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary w-100">Create</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
