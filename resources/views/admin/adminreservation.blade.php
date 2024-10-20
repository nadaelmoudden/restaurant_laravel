<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')


<div style="position: relative;top:70px;right:-150;" >
    <table style="width: 100%; border-collapse: collapse; color: black; background-color: white;">
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 10px; border: 1px solid black;">Name</th>
            <th style="padding: 10px; border: 1px solid black;">Email</th>
            <th style="padding: 10px; border: 1px solid black;">Phone</th>
            <th style="padding: 10px; border: 1px solid black;">Date</th>
            <th style="padding: 10px; border: 1px solid black;">Time</th>
            <th style="padding: 10px; border: 1px solid black;">Message</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td style="padding: 10px; border: 1px solid black;">{{ $item->name }}</td>
            <td style="padding: 10px; border: 1px solid black;">{{ $item->email }}</td>
            <td style="padding: 10px; border: 1px solid black;">{{ $item->phone }}</td>
            <td style="padding: 10px; border: 1px solid black;">{{ $item->date }}</td>
            <td style="padding: 10px; border: 1px solid black;">{{ $item->time }}</td>
            <td style="padding: 10px; border: 1px solid black;">{{ $item->message }}</td>
        </tr>
        @endforeach
    </table>
</div>




        @include('admin.adminscript')
    </div>

</body>

</html>
