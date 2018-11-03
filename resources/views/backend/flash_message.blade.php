<style>
/* STYLING TOAST NYA */
#toast-container > div{
    position: relative;
    pointer-events: auto;
    overflow: hidden;
    margin: 0 0 6px;
    padding: 15px 15px 15px 50px;
    width: 300px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
    border-radius: 3px 3px 3px 3px;
    background-position: 15px center;
    background-repeat: no-repeat;
    -moz-box-shadow: 0 0 12px #999999;
    -webkit-box-shadow: 0 0 12px #999999;
    box-shadow: 0 0 12px #999999;
    color: #FFFFFF;
    opacity: 1;
    -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
    filter: alpha(opacity=80);
}
</style>

@if(Session::get('success'))
<script>
    toastr.success('<?= Session::get('success') ?>', 'Success', {timeOut:5000});
</script>
<?php Session::forget('success') ?>
@endif

@if(Session::get('warning'))
<script>
    toastr.warning('<?= Session::get('warning') ?>', 'Warning', {timeOut:5000});
</script>
<?php Session::forget('warning') ?>
@endif

@if(Session::get('danger'))
<script>
    toastr.error('<?= Session::get('danger') ?>', 'Error', {timeOut:5000});
</script>
<?php Session::forget('danger') ?>
@endif

