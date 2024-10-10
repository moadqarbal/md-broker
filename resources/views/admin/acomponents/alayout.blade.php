@include('admin.apartials._aheader')
@include('admin.apartials._topbar')
@include('admin.apartials._sidebar')

<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            {{ $slot }}
        </div>
    </div>
</div>

@include('admin.apartials._afooter')

