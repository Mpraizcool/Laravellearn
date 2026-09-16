<?php

public function index() {
    return view('example', ['surname' => 'John']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Example</title>
</head>
<body>
    <h1>Welcome, {{ $surname }}!</h1>
</body>
</html>
