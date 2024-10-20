<x-app-layout>
</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.admincss')
</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')


        <div style="position: relative; top: 60px; right: -150px;">
            <table style="background-color: grey; border: 3px solid black; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="padding: 20px; border: 1px solid black;">Name</th>
                        <th style="padding: 20px; border: 1px solid black;">Email</th>
                        <th style="padding: 20px; border: 1px solid black;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                    <tr align="center">
                        <td style="padding: 10px; border: 1px solid black;">{{ $user->name }}</td>
                        <td style="padding: 10px; border: 1px solid black;">{{ $user->email }}</td>
                        <td style="padding: 10px; border: 1px solid black;">
                            @if ($user->usertype == '0')
                            <a href="{{ url('/deleteuser', $user->id) }}" style="text-decoration: none; color: white; background-color: red; padding: 5px 10px; border-radius: 5px;">Delete</a>
                            @else
                            <span style="color: white; background-color: grey; padding: 5px 10px; border-radius: 5px;">Not Allowed</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>

    @include('admin.adminscript')
</body>

</html>
