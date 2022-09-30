<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    
<li class="nav-item" style="margin: 15px 0px">
    <a href="{{ route('employee.basicform.create') }}" class="nav-link">
        <i class="nav-icon fa fa-wpforms" style="color:#fff;"></i>
        <p style="color:#fff;">
            Basic Form
        </p>
    </a>
</li>
<li class="nav-item " style="margin: 15px 0px">
    <a href="{{ route('employee.premiumform.create') }}" class="nav-link">
        <i class="nav-icon fa fa-wpforms" style="color:#fff;"></i>
        <p style="color:#fff;">
            Premium Form
        </p>
    </a>
</li>
<li class="nav-item" style="margin: 15px 0px">
    <a href="{{ route('employee.locationmapform.create.step.one') }}" class="nav-link">
        <i class="nav-icon fa fa-wpforms" style="color:#fff;"></i> 
        <p style="color:#fff;">
            Location/Map
        </p>
    </a>
</li>
<li class="nav-item" style="margin: 15px 0px">
    <a href="{{ route('employee.resourceform.create') }}" class="nav-link">
        <i class="nav-icon fa fa-wpforms" style="color:#fff;"></i> 
        <p style="color:#fff;">
            Resource Form
        </p>
    </a>
</li>
<li class="nav-item" style="margin: 15px 0px">
    <a href="{{ route('employee.hotspotsform.create') }}" class="nav-link">
        <i class="nav-icon fa fa-wpforms" style="color:#fff;"></i> 
        <p style="color:#fff;">
            HotSpots Form
        </p>
    </a>
</li>
</body>
</html>