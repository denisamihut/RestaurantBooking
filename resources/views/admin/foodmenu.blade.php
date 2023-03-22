<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">

    @include("admin.navbar")

    <div class="position-relative pt-5">
        <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div>
                <label>Title</label>
                <input class="text-black" type="text" name="title" placeholder="Write a title" required>
            </div>

            <div>
                <label>Price</label>
                <input class="text-black" type="number" name="price" placeholder=price" required>
            </div>

            <div>
                <label>Image</label>
                <input class="text-black" type="file" name="image" required>
            </div>

            <div>
                <label>Description</label>
                <input class="text-black" type="text" name="description" placeholder="Description" required>
            </div>
            <div>
                <input class="bg-white text-black p-2" type="submit" value="Save">
            </div>

        </form>

        <div>
            <table class="bg-dark">
                <tr>
                    <th class="p-5">Food Name</th>
                    <th class="p-5">Price</th>
                    <th class="p-5">Description</th>
                    <th class="p-5">Image</th>
                    <th class="p-5">Action</th>
                    <th class="p-5">Action2</th>

                </tr>

                @foreach($data as $data)
                <tr class="text-center">
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->description }}</td>
                    <td><img height="150" width="150" src="/foodimage/{{ $data->image }}"></td>
                    <td><a href="{{ url('/deletemenu', $data->id) }}">Delete</a></td>
                    <td><a href="{{ url('/updatemenu', $data->id) }}">Update</a></td>

                </tr>
                    @endforeach();
            </table>
        </div>
    </div>
</div>

@include("admin.adminscript")

</body>
</html>
