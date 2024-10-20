<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')

    <style>
        /* Style for form elements */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form input[type="file"] {
            width: calc(100% - 12px);
            /* Adjust input width */
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        form img {
            display: block;
            margin-bottom: 10px;
        }

        form label {
            color: black;
        }
    </style>

</head>

<body>



    <div class="container-scroller">

        @include('admin.navbar')

        <form action="{{ url('/updatefoodchef', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Chef Name</label>
                <input type="text" name="name" value="{{ $data->name }}">
            </div>
            <div>
                <label for="">Speciality</label>
                <input type="text" name="speciality" value="{{ $data->speciality }}">
            </div>
            <div>
                <label for="">Old Image</label>
                <img height="180" width="180" src="/chefimage/{{ $data->image }}" alt="">
            </div>
            <div>
                <label for="">New Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <input type="submit" value="Update Chef">
            </div>
        </form>

    </div>
    @include('admin.adminscript')


</body>

</html>
