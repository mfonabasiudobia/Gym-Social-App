const deleteAction  = (e) => {
        Swal.fire({
                      title: 'Are you sure?',
                      text: 'Please confirm this action to continue',
                      icon: 'warning',
                      confirmButtonColor: '#d33',
                      denyButtonColor: '#d33',
                      showDenyButton: false,
                      showCancelButton: true,
                      confirmButtonText: 'Delete',
                      // denyButtonText: 'Delete'
                    }).then((result) => {

                      if (result.isConfirmed) {
                        Livewire.emit('deleteItem',[e.detail[0], e.detail[1]]);
                      }


                      //else if (result.isDenied) {
                      //   Livewire.emit('forceDelete',[e.detail.model,e.detail.id])
                      // 


                    })
}




window.addEventListener('set-new-item-popup', e => {

         Swal.fire({
                      title: "This is a new item",
                      text: "Do you wish to continue?",
                      icon: 'warning',
                      confirmButtonColor: '#d33',
                      denyButtonColor: '#d33',
                      showDenyButton: false,
                      showCancelButton: true,
                      confirmButtonText: 'Yes',
                      cancelButtonText: 'No'
                    }).then((result) => console.log(result))

});

 window.addEventListener('set-barcode-not-found', e => {

         Swal.fire({
                      title: e.detail.title,
                      text: e.detail.message,
                      icon: 'warning',
                      confirmButtonColor: '#d33',
                      denyButtonColor: '#d33',
                      showDenyButton: false,
                      showCancelButton: true,
                      confirmButtonText: 'Yes',
                      cancelButtonText: 'No'
                    }).then((result) => console.log(result))

});

 window.addEventListener('set-expiry-date-not-found', e => {

         Swal.fire({
                      title: "Expiry Date is incorrect",
                      text: "Do you wish to continue?",
                      icon: 'warning',
                      confirmButtonColor: '#d33',
                      denyButtonColor: '#d33',
                      showDenyButton: false,
                      showCancelButton: true,
                      confirmButtonText: 'Yes',
                      cancelButtonText: 'No'
                    }).then((result) => console.log(result))

});

window.addEventListener('set-quantity-greater', e => {

         Swal.fire({
                      title: "The quantity you enter is greater than the quantity available",
                      text: "Do you wish to continue?",
                      icon: 'warning',
                      confirmButtonColor: '#d33',
                      denyButtonColor: '#d33',
                      showDenyButton: false,
                      showCancelButton: true,
                      confirmButtonText: 'Yes',
                      cancelButtonText: 'No'
                    }).then((result) => console.log(result))

});

window.addEventListener('set-total-quantity-greater', e => {

         Swal.fire({
                      title: "The quantity you enter is greater than the total quantity available",
                      text: "Do you wish to continue?",
                      icon: 'warning',
                      confirmButtonColor: '#d33',
                      denyButtonColor: '#d33',
                      showDenyButton: false,
                      showCancelButton: true,
                      confirmButtonText: 'Yes',
                      cancelButtonText: 'No'
                    }).then((result) => console.log(result))

});


/* Toast Notification */
 window.addEventListener('toaster', event => {

    if(event.detail.status == "success") toastr.success(event.detail.message);
        else if(event.detail.status == "warning")  toastr.warning(event.detail.message);
        else if(event.detail.status == "info")  toastr.info(event.detail.message);
        else if(event.detail.status == "error")  toastr.error(event.detail.message);  
})


/* FlatPicker Date */
config = {
        enableTime: false,
        dateFormat: "Y-m-d",
        altInput: true,
        disableMobile: true,
        altFormat: "F j, Y"
}

flatpickr(".custom-date",{...config, dateFormat : 'm-y', altFormat : 'j-y' });
// flatpickr(".custom-date-from-today",{...config,minDate:'today'});
// flatpickr(".custom-date-range",{...config,mode: "range"});
// flatpickr(".custom-date-from-today-range",{...config,mode: "range",minDate:'today'}); 


$(document).ready(function()
{   
   

       $('#new-date-formatted').datepicker({
                                dateFormat: 'mm-y',
                                changeMonth: true,
                                changeYear: true,
                                showButtonPanel: false,
                                onClose: function(dateText, inst) {

                                    var month = $('#ui-datepicker-div .ui-datepicker-month :selected').val();
                                    var year = $('#ui-datepicker-div .ui-datepicker-year :selected').val();
                                    const newDate = $.datepicker.formatDate('mm-y', new Date(year, month, 1));
                                    $(this).val(newDate);

                                }
         }); 



});
