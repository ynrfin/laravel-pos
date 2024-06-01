<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hi</title>
</head>
<body>
        <div style="border: 1px solid black; padding:5px; display:inline-block; ">
        @if ($product)
            {{ number_format($product->sell_price, 0) }}
            <br>
        @endif
        {!! $barcode !!}
        </div>
</body>
</html>
