<?php

public function index() {
    return view('example', ['name' => 'John']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Example</title>
</head>
<body>
    <h1>Welcome, {{ $name }}!</h1>
</body>
</html>
