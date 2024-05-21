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
                <h1>Add new product</h1>
                <form action="/add_new_product/" method="post">
                    @csrf
                    <input type="text" name="ProductType" id="ProductType" placeholder="ProductType" required
                        pattern="^[a-zA-Z0-9]{3}$">
                    <input type="text" name="ProductCode" id="ProductCode" placeholder="ProductCode" required
                        pattern="^[a-zA-Z0-9]{6}$">
                    <input type="text" name="ProductName" id="ProductName" placeholder="ProductName">
                    <input type="number" name="Quantity" id="Quantity" placeholder="Quantity" min=0 step="any"
                        value="0">
                    <input type="text" name="Note" id="Note" placeholder="Note">
                    <button type="submit" class="btn btn-primary">Add product</button>
                </form>
            </div>
        </main>
    </body>

</html>