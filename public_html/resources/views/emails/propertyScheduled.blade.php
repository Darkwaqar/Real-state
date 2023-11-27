<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Tour Schedule</title>
</head>
<body>
    <p>Hello,Team ARIS360 you have received an Schedule for Property Tour:
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
    <p>
        Date: {{$date}}
    </p>
    <p>
        Property URL
        <a href="{{url('/'.'property-detail/'.$propertiesData['id'])}}">
            Property url
        </a>
    </p>
</body>
</html>
