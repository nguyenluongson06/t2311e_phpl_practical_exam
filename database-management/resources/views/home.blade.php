<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </head>

    <body>
        <header></header>
        <main class="main">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">ProductType</th>
                            <th scope="col">ProductCode</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                        <tr>
                            <td>{{$item["Id"]}}</td>
                            <td>{{$item["ProductType"]}}</td>
                            <td>{{$item["ProductCode"]}}</td>
                            <td>{{$item["ProductName"]}}</td>
                            <td>{{$item["Quantity"]}}</td>
                            <td>{{$item["Note"]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary">
                    <a href="/add_product" class="text-light">Add new product</a>
                </button>
            </div>
        </main>
    </body>

</html>