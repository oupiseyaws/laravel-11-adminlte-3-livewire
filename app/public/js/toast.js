window.addEventListener('alert', event => {
    if(event.detail[0] == undefined){
        return;
    }

    if(event.detail[0].type == 'success'){
        toastr.success(event.detail[0].message);
    }else if(event.detail[0].type == 'error'){
        toastr.error(event.detail[0].message);
    }else if(event.detail[0].type == 'info'){
        toastr.info(event.detail[0].message);
    }

});
