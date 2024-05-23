<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Email</title>
</head>
<body style="font-size:16px;line-height: 24px">

    <h2>Feedback Submission</h2>
    <div class="card p-4">Hi, you have a new feedback submission from <span style="font-weight:bold; font-size:18px">{{ $messages['name'] }}.</span></div>

    <table style="background:#FFF7D6; width:500px; padding: 20px; margin-top:20px">
        <tr>
            <td style="width: 30%; font-weight:bold">Name</td>
            <td style="width: 10%">:</td>
            <td>{{ $messages['name'] }}</td>
        </tr>
        <tr>
            <td style="width: 30%; font-weight:bold">Phone</td>
            <td>:</td>
            <td>{{ $messages['phone'] }}</td>
        </tr>
        <tr>
            <td style="width: 30%; font-weight:bold">Suggestion</td>
            <td>:</td>
            <td>{{ $messages['message'] }}</td>
        </tr>
    </table>

</body>
</html> 