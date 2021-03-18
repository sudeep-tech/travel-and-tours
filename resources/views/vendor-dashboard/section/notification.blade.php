@if(session('success'))

<div class="alert alert-success">
    <span class="notification-icon dashbg-yellow">
        <i class="fa fa-check-circle"></i>
    </span>
    <span class="notification-text">
       {{session('success')}}
    </span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>

</div>

@endif

@if(session('error'))
<div class="alert alert-danger">
    <span class="notification-icon dashbg-yellow">
        <i class="fa fa-check-circle"></i>
    </span>
    <span class="notification-text">
       {{session('error')}}
    </span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>

</div>
@endif

@if(session('warning'))
<div class="alert alert-warning">
    <span class="notification-icon dashbg-yellow">
        <i class="fa fa-check-circle"></i>
    </span>
    <span class="notification-text">
       {{session('warning')}}
    </span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>

</div>
@endif