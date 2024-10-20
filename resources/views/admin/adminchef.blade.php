<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .form-container,
        .table-container {
            width: 50%;
            /* Adjust the width as needed */
            padding: 20px;
        }

        .form-container {
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 999;
            /* Ensure form is above other content */
        }

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: black;
            color: white;
        }

        table th,
        table td {
            padding: 10px;
        }

        /* table td {
            color: black
        } */

        table tr:nth-child(even) {
            background-color: #f2f2f2;
            color: black;
        }
    </style>
</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')

        <div class="container">
            <div class="form-container">
                <form action="{{ url('uploadchef') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-bottom: 10px;">
                        <label for="name" style="display: block; color: black;">Name</label>
                        <input type="text" id="name" name="name" required placeholder="Enter a name"
                            style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black;">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label for="speciality" style="display: block; color: black;">Speciality</label>
                        <input type="text" id="speciality" name="speciality" required
                            placeholder="Enter the speciality"
                            style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #000000; border-radius: 5px; color: black;">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <input type="file" id="image" name="image" required
                            style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black;">
                    </div>
                    <div>
                        <input type="submit" value="Save"
                            style="color: white; background-color: #007bff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    </div>
                </form>
            </div>

            <div class="table-container">
                <table>
                    <tr>
                        <th>Chef Name</th>
                        <th>Speciality</th>
                        <th>Image</th>
                        <th>Action</th>
                        <th>Action 2</th>
                    </tr>
                    @foreach ($data as $chef)
                        <tr align="center">
                            <td>{{ $chef->name }}</td>
                            <td>{{ $chef->speciality }}</td>
                            <td><img height="180" width="180" src="/chefimage/{{ $chef->image }}" alt="">
                            </td>
                            <td><a href="{{ url('/updatechef', $chef->id) }}">Update</a></td>
                            <td><a href="{{ url('/deletechef', $chef->id) }}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @include('admin.adminscript')


</body>

</html>
