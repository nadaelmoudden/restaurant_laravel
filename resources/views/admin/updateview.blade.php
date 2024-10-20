<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
    <style>
        /* Additional styles */
        .form-container {
            top: 40;
            left: 0;
            width: 100%;
            padding: 20px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 999;
            /* Ensure form is above other content */
        }

        label {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <div class="form-container">
            <form action="{{ url('/update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="margin-bottom: 10px;">
                    <label for="title" style="display: block;">Title</label>
                    <input type="text" id="title" name="title" required value="{{ $data->Title }}"
                        style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black;">
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="price" style="display: block;">Price</label>
                    <input type="number" id="price" name="price" required value="{{ $data->price }}"
                        style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black;">
                </div>

                <div style="margin-bottom: 10px;">
                    <label for="description" style="display: block;">Description</label>
                    <input type="text" id="description" name="description" placeholder="Description" required
                        value="{{ $data->description }}"
                        style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black;">
                </div>

                <div style="margin-bottom: 10px;">
                    <label for="image" style="display: block;">Old Image</label>
                    <img  src="/foodimage/{{ $data->image }}" alt=""
                        style="padding: 8px; width: 30%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black; ">
                </div>
                <div>
                    <label for="">New Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <input type="submit" value="Save"
                        style="color: white; background-color: #007bff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                </div>

            </form>

        </div>
    </div>

    @include('admin.adminscript')

</body>

</html>
