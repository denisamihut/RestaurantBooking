<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public"
    @include("admin.admincss")
</head>
<body>

<div class="container-scroller">
    @include("admin.navbar")


    <div class="position-relative pt-5">
        <form action="{{ url('/update', $data->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div>
                <label>Title</label>
                <input class="text-black" type="text" name="title" value="{{ $data->title }}" required>
            </div>

            <div>
                <label>Price</label>
                <input class="text-black" type="number" name="price" value="{{ $data->price }}"  required>
            </div>

            <div>
                <label>Description</label>
                <input class="text-black" type="text" name="description" value="{{ $data->description }}"  required>
            </div>

            <div>
                <label>Old Image</label>
                <img height="200" width="200" src="/foodimage/{{ $data->image }}"
            </div>

            <div>
                <label>New Image</label>
                <input class="text-black" type="file" name="image" required>
            </div>

            <div>
                <input class="bg-white text-black p-2" type="submit" value="Save">
            </div>
        </form>


    </div>

@include("admin.adminscript")

</body>
</html>
