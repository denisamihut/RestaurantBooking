<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">

    @include("admin.navbar")
    <div class="container">


        <h1>Customer Orders</h1>

        <form action="{{ url('/search') }}" method="GET">
            @csrf
            <input type="text" name="search">
            <input type="submit" value="Search" class="btn btn-success">
        </form>

        <table class="bg-white mt-3 mb-4 p-3">
            <tr>
                <th class="text-center text-black p-3">Name</th>
                <th class="text-center text-black p-3">Phone</th>
                <th class="text-center text-black p-3">A</th>
                <th class="text-center text-black p-3">Food name</th>
                <th class="text-center text-black p-3">Price</th>
                <th class="text-center text-black p-3">Quantity</th>
                <th class="text-center text-black p-3">Total price</th>
            </tr>


            @foreach($data as $data)
                <tr class="text-black text-center">
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->foodname }}</td>
                    <td>{{ $data->price }}$</td>
                    <td>{{ $data->quantity }}</td>
                    <td>{{ $data->price * $data->quantity }}$</td>
                </tr>
            @endforeach
        </table>

    </div>
</div>
@include("admin.adminscript")
</body>
</html>
