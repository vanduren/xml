{{-- for pdf output --}}
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Pdf output</title>
    </head>
    <body>
        <h1 class="bg-purple-200">Product info</h1>
    <table class="table table-bordered bg-grey-200">
        <tr>
        <td>
            {{$product->name}}
        </td>
        </tr>
    </table>
    </body>
</html>
