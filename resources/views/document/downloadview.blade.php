<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
        <h1>Lesson: {{ $lesson->name }}</h1>
    </center>
    <?php 
        $stt = 1;
    ?>
    @foreach($docs as $doc)
        <h3>{{ $stt }}. {{ $doc->title }}</h3>
        {!! $doc->content !!}
        <?php $stt++ ?>
    @endforeach
</body>
</html>