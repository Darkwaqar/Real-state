<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask ARIS360 Prime Agent a question</title>
</head>
<body>
    <p>Hello,Team ARIS360 you have received an inquiry from:
    </p>
    <p>
        Name:
        @if (isset($userData->user_name))
        {{$userData->user_name}}
        @else
        {{$userData->first_name}}
    @endif
    </p>
    <p>
        Email: {{$userData->email}}
    </p>
    <p>Phone:{{$userData->mobile_number}} </p>
    <p>Message: {{$userQuery}}</p>
    <p>
        Property URL
        <a href="{{url('/'.'property-detail/'.$propertiesData['id'])}}">
            Property url
        </a>
    </p>
</body>
</html>
