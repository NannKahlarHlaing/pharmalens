<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry Email</title>
</head>
<body style="font-size:16px;line-height: 24px">

    <h1 class="">Enquiry Submission</h1>
    <div class="card p-4">Hi, you have a new enquiry submission from <span style="font-weight:bold; font-size:18px">{{ $data['name'] }}.</span></div>

    <table style="background:#FFF7D6; width:500px; padding: 20px; margin-top:20px">
        <tr>
            <td style="width: 30%; font-weight:bold">Name</td>
            <td style="width: 10%">:</td>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="width: 30%; font-weight:bold">Company</td>
            <td>:</td>
            <td>{{ $data['company'] }}</td>
        </tr>
        <tr>
            <td style="width: 30%; font-weight:bold">Phone</td>
            <td>:</td>
            <td>{{ $data['phone'] }}</td>
        </tr>
        <tr>
            <td style="width: 30%; font-weight:bold">Email</td>
            <td>:</td>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td style="width: 30%; font-weight:bold">Viber/Whatsapp</td>
            <td>:</td>
            <td>{{ $data['viber'] }}</td>
        </tr>
        <tr>
            <td style="width: 30%; font-weight:bold">Commodity</td>
            <td>:</td>
            <td>{{ $data['commodity'] }}</td>
        </tr>
        <tr>
            <td style="width: 30%; font-weight:bold">Quantity</td>
            <td>:</td>
            <td>{{ $data['quantity'] }}</td>
        </tr>
        <tr>
            <td style="width: 30%; font-weight:bold">Message</td>
            <td>:</td>
            <td>{{ $data['message'] }}</td>
        </tr>
    </table>

</body>
</html> 