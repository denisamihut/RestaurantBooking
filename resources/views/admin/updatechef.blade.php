<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include("admin.admincss")
</head>
<body>

<div class="container-scroller">
    @include("admin.navbar")

    <div class="position-relative pt-5">
        <form action="{{ url('/updatefoodchef', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Chef name</label>
                <input class="text-black" type="text" name="name" value="{{ $data->name }}" required>
            </div>
            <div>
                <label>Chef speciality</label>
                <input class="text-black" type="text" name="speciality" value="{{ $data->speciality }}" required>
            </div>
            <div>
                <label>Old Image</label>
                <img height="200" width="200" src="/chefimage/{{ $data->image }}">
            </div>
            <div>
                <label>New Image</label>
                <input class="text-black" type="file" name="image">
            </div>

            <div>
                <input class="bg-white text-black p-2" type="submit" value="Save">
            </div>
        </form>
    </div>

</div>

@include("admin.adminscript")

</body>
</html>
