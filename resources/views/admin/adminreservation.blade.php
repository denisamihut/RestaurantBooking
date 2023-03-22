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
        <table class="bg-primary border-1">
            <tr>
                <th class="pt-5">Name</th>
                <th class="pt-5">Email</th>
                <th class="pt-5">Phone</th>
                <th class="pt-5">Date</th>
                <th class="pt-5">Time</th>
                <th class="pt-5">Message</th>
            </tr>
            @foreach($data as $data)
            <tr class="text-center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->date }}</td>
                <td>{{ $data->time }}</td>
                <td>{{ $data->message }}</td>
            </tr>
            @endforeach

        </table>
    </div>

</div>

@include("admin.adminscript")

</body>
</html>
