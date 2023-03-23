<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>

<div class="container-scroller">
    @include("admin.navbar")

    <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Name</label>
            <input class="text-black" type="text" name="name" required="" placeholder="Enter name">
        </div>
        <div>
            <label>Speciality</label>
            <input class="text-black" type="text" name="speciality" required="" placeholder="Enter speciality">
        </div>
        <div><input type="file" name="image" required=""></div>
        <div>
            <input class="text-black bg-white" type="submit" value="Save">
        </div>
    </form>

    <table class="bg-primary">
        <tr>
            <th class="px-3">Chef Name</th>
            <th class="px-3">Chef Speciality</th>
            <th class="px-3">Image</th>
            <th class="px-3">Action</th>
            <th class="px-3">Action2</th>

        </tr>

        @foreach($data as $data)
            <tr class="text-center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->speciality }}</td>
                <td><img height="150" width="100" src="/chefimage/{{ $data->image }}"></td>
                <td><a class="text-black" href="{{ url('/updatechef', $data->id) }}">Update</a></td>
                <td><a class="text-black" href="{{ url('/deletechef', $data->id) }}">Delete</a></td>

            </tr>
        @endforeach
    </table>
</div>

@include("admin.adminscript")

</body>
</html>
