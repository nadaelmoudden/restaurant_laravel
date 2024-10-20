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

        <div style="position: relative; top: 60px; right: -150px;">
            <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="margin-bottom: 10px;">
                    <label for="title" style="display: block;">Title</label>
                    <input type="text" id="title" name="title" placeholder="Write a title" required
                        style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black;">
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="price" style="display: block;">Price</label>
                    <input type="number" id="price" name="price" placeholder="Price" required
                        style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black;">
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="image" style="display: block;">Image</label>
                    <input type="file" id="image" name="image" required
                        style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black;">
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="description" style="display: block;">Description</label>
                    <input type="text" id="description" name="description" placeholder="Description" required
                        style="padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; color: black;">
                </div>
                <div>
                    <input type="submit" value="Save"
                        style="color: white; background-color: #007bff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                </div>

            </form>

            <div style="margin-top: 30px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="background-color: #000000;">
                        <th style="padding: 30px; text-align: left; border: 1px solid #ddd;">Food Name</th>
                        <th style="padding: 30px; text-align: left; border: 1px solid #ddd;">Price</th>
                        <th style="padding: 30px; text-align: left; border: 1px solid #ddd;">Description</th>
                        <th style="padding: 30px; text-align: left; border: 1px solid #ddd;">Image</th>
                        <th style="padding: 30px; text-align: left; border: 1px solid #ddd;">Action</th>
                        <th style="padding: 30px; text-align: left; border: 1px solid #ddd;">Action 2</th>

                    </tr>
                    @foreach ($data as $data)
                        <tr style="background-color: #000000;">
                            <td style="padding: 8px; text-align: left; border: 1px solid #ddd;">{{ $data->Title }}</td>
                            <td style="padding: 8px; text-align: left; border: 1px solid #ddd;">{{ $data->price }}</td>
                            <td style="padding: 8px; text-align: left; border: 1px solid #ddd;">{{ $data->description }}
                            </td>
                            <td
                                style="padding: 8px; text-align: left; border: 1px solid #ddd;width: 200px; height: 200px">
                                <img src="/foodimage/{{ $data->image }}" alt="">
                            </td>
                            <td style="padding: 8px; text-align: left; border: 1px solid #ddd;"><a
                                    href="{{ url('/deletemenu', $data->id) }}">Delete</a></td>
                            <td style="padding: 8px; text-align: left; border: 1px solid #ddd;"><a
                                    href="{{ url('/updateview', $data->id) }}">Update</a></td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>



        @include('admin.adminscript')

</body>

</html>
