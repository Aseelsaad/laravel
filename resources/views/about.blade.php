<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
</head>
<body>

@each('welcome',[["Image" => "http://codelab.camp/android.png", "Title" => "Android", "Description" => "Android is customizable, easy to use and works perfectly with all your favorite apps."],["Image" => "http://codelab.camp/swift.png", "Title" => "Swift", "Description" => "The powerful programming language that is also easy to learn."],["Image" => "http://codelab.camp/laravel.png", "Title" => "Laravel", "Description" => "Value elegance, simplicity, and readability? You’ll fit right in. Laravel is designed for people just like you."]],'name')

<div id="app">
</div>

<script src="https://unpkg.com/vue"></script>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hi!'
        }
    })
</script>

</body>
</html>