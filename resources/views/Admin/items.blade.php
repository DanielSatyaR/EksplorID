<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
</head>
<body>
    <h1>Items</h1>
    <div class="items">
        @foreach($items as $item)
            <div class="item">
                <img src="{{ $item['photo'] }}" alt="{{ $item['title'] }}" style="width:100px; height:auto;">
                <h2>{{ $item['title'] }}</h2>
                <p>{{ $item['description'] }}</p>
                <p>Price: ${{ $item['price'] }}</p>
                <p>Category: {{ $item['category'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>