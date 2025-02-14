window.addEventListener('swal:modal', event => {
            swal.fire({
                title: event.detail[0].message,
                text: event.detail[0].text,
                icon: event.detail[0].type,
            });
        });

        window.addEventListener('swal:confirm', event => {
            swal.fire({
                title: event.detail[0].message,
                text: event.detail[0].text,
                icon: event.detail[0].type,
            });

        });
