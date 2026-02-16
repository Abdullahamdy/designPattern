<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load Test Page</title>
</head>
<body>
    <h1>Laravel Load Test Example</h1>

    <p>This page is used to simulate requests for load testing.</p>

    <p>Current server time: {{ now() }}</p>

    @php
        $data = App\Models\Notification::select('meta')->get();
    @endphp

    @php
        // print all data
        foreach ($data as $item) {
            echo $item->meta . "<br>";
        }

    @endphp

    <p>Processed {{ count($data) }} items.</p>
</body>
</html>
