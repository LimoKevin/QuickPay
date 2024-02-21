
document.addEventListener('DOMContentLoaded', function () {
    // Get the modal, buttons, and overlay
    var modal = document.getElementById('modal-login');
    var openModalBtn = document.getElementById('btn-login');
    var modal_register = document.getElementById('modal-register');
    var registerBtn = document.getElementById('btn-register');
    var overlay = document.getElementById('overlay');

  
   
    registerBtn.onclick = function () {
        overlay.style.display = 'block';
        modal_register.style.display = 'block';
        modal.style.display = 'none';
    };

    // Open the modal
    openModalBtn.onclick = function () {
        overlay.style.display = 'block';
        modal.style.display = 'block';
        modal_register.style.display = 'none';
    };
    overlay.onclick = function () {
        setTimeout(function () {
            overlay.style.display = 'none';
            modal.style.display = 'none';

            modal_register.style.display = 'none';
        }, 100);
    };

    var write_btn = document.getElementById('write-btn');
    var write_content =  document.getElementById('write-content');
    var write_text = document.getElementById('write-text');
    var scan_btn = document.getElementById('scan-btn');
    var scan_content =  document.getElementById('scan-content');
    var scan_text =  document.getElementById('scan-text');

    write_btn.onclick = function () {
        write_content.style.display = 'block';
        scan_content.style.display = 'none';
        write_text.style.color = 'green';
        scan_text.style.color = '#212121';

    };

    scan_btn.onclick = function () {
        scan_content.style.display = 'block';
        write_content.style.display = 'none';
        scan_text.style.color = 'green';
        write_text.style.color = '#212121';
        s
    };
});