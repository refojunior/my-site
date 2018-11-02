
    <?php
    $flash = new \stdClass();
    if(Session::get('success')) {
        $flash->heading = "Success";
        $flash->text = Session::get('success');
        $flash->icon = "success";
        $flash->bgColor = "#28A745";
    } else if(Session::get('warning')){
        $flash->heading = "Warning";
        $flash->text = Session::get('warning');
        $flash->icon = "warning";
        $flash->bgColor = "#FFC107";
    } else if(Session::get('danger')) {
        $flash->heading = "Failed";
        $flash->text = Session::get('danger');
        $flash->icon = "warning";
        $flash->bgColor = "#DC3545";
    }
  
    echo json_encode($flash);
        
    ?>
