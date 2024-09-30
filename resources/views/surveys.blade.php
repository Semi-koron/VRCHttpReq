<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/surveys.css') }}">
    <title>Survey Results</title>
</head>

<body class="body-style">
    <h1>Survey Results</h1>
    @if (count($surveys) > 0)
        <div class="figure-style">
            <table border="1" class="table-style">
                <thead>
                    <tr>
                        <th>地域</th>
                        <th>世代</th>
                        <th>感想</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surveys as $survey)
                        <tr>
                            <td>{{ $survey->region }}</td>
                            <td>{{ $survey->generation }}</td>
                            <td>{{ $survey->feedback }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No survey results found.</p>
    @endif
</body>

</html>
