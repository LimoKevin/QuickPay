document.addEventListener('DOMContentLoaded', function () {

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