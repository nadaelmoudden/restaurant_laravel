<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.admincss')
    <style>
        table {
            width: 50%;
            height: 50%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')
        <div style="display: flex; flex-direction: column; align-items: center;">
            <h1 style="text-align: center">Customers Orders</h1>

            <form action="{{ url('/search') }}" method="get">
                @csrf
                <input type="text" name="search" style="color: blue">
                <input type="submit" value="Search" class="btn btn-success">
            </form>

            <br>


            <table>
                <tr align="center" style="background-color: rgb(87, 86, 86)">
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>FoodName</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total Price</td>
                </tr>

                @foreach ($data as $item)
                    <tr align="center" style="background-color: black">
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->foodname }}</td>
                        <td>{{ $item->price }}$</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price * $item->quantity }}$</td>
                    </tr>
                @endforeach
            </table>
        </div>


        @include('admin.adminscript')
    </div>

</body>

</html>
