<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>aticle</title>
</head>
<body id="article">
<style>
    #article img{
        max-width: 100%;
    }
</style>
    {!! $article['content_'.Lang::getLocale()] !!}
</body>
</html>