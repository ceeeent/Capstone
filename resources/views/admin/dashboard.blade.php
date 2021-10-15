@extends ('layouts.adminlayout')

@section('cont')


<div class="content">

<div class="homecontent">  <!-- DITO MAG LALAGAY NG LAMAN -->

<div class="stats">

<h3> Users Per Region </h3>

<li>
<h5> Bulacan </h5><span class="bar"><span class="bulacan"></span></span>
    </li>

<li>
<h5> NCR </h5><span class="bar"><span class="ncr"></span></span>
    </li>

<li>
<h5> Bohol </h5><span class="bar"><span class="bohol"></span></span>
    </li>

<li>
<h5> Palawan </h5><span class="bar"><span class="palawan"></span></span>
    </li>

<li>
<h5> Tarlac </h5><span class="bar"><span class="tarlac"></span></span>
    </li>


</div>
<br> 
<hr>
    <h3> Registered  Users </h3>
<div class="row">

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-2">
                    <i class="pe-7s-female"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-text"><span class="count">215</span></div>
                        <div class="stat-heading">Female</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-3">
                    <i class="pe-7s-male"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-text"><span class="count">547</span></div>
                        <div class="stat-heading">Male</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-4">
                    <i class="pe-7s-users"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-text"><span class="count">762</span></div>
                        <div class="stat-heading">Total Users</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
<br>
<hr>

<h3> Training  Statistic </h3>
<div class="row">

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-2">
                    <i class="pe-7s-female"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-text"><span class="count">5</span></div>
                        <div class="stat-heading">Train Live</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-3">
                    <i class="pe-7s-male"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-text"><span class="count">7</span></div>
                        <div class="stat-heading">Train Onsite</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-4">
                    <i class="pe-7s-users"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-text"><span class="count">8</span></div>
                        <div class="stat-heading">Train Now</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 


<!-- END NG LAMAN -->

</div>
</div>


@endsection