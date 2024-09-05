<!DOCTYPE html>
<html>
<head>
    <title>Home Page with File Manager</title>
    <!-- Include the necessary styles and scripts -->
    <link rel="stylesheet" href="{{ asset('vendor/laravel-filemanager/css/lfm.css') }}">
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
</head>
<body>
    <h1>Welcome to the Landing Page</h1>

    <!-- File Manager Button -->
    <div class="container">
        <button id="lfm" data-input="thumbnail" data-preview="holder">Choose File</button>
        <input id="thumbnail" class="form-control" type="text" name="filepath">
        <img id="holder" style="margin-top:15px;max-height:100px;">
    </div>

    <!-- Include File Manager script to initialize -->
    <script>
        var route_prefix = "/laravel-filemanager";
        $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>
</body>
</html>
