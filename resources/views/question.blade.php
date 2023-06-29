<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Quiz</h1>
    <form id="quiz-form" action="{{ url('/score') }}" method="POST">
        {{ csrf_field() }}
        @foreach ($questions as $question)
            <div class="form-group">
                <h3>{{ $question->question }}</h3>
                <div class="radio">
                    <label><input type="radio" name="answer{{ $question->id }}" value="option_a">{{ $question->option_a }}</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="answer{{ $question->id }}" value="option_b">{{ $question->option_b }}</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="answer{{ $question->id }}" value="option_c">{{ $question->option_c }}</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="answer{{ $question->id }}" value="option_d">{{ $question->option_d }}</label>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
