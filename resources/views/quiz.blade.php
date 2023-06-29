<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Quiz</h1>
    <form action="{{ route('quiz.score') }}" method="POST">
        @csrf
        @foreach ($questions as $question)
        <div class="form-group">
            <h3>{{ $question->question }}</h3>
            <div class="radio">
                <label><input type="radio" name="answers[{{ $question->id }}]" value="option_a">{{ $question->option_a }}</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="answers[{{ $question->id }}]" value="option_b">{{ $question->option_b }}</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="answers[{{ $question->id }}]" value="option_c">{{ $question->option_c }}</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="answers[{{ $question->id }}]" value="option_d">{{ $question->option_d }}</label>
            </div>
        </div>
        
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
