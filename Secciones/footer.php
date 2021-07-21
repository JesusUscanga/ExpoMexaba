</body>
<script src="../bootstrap/js/popper.min.js "></script>
<script src="../bootstrap/js/bootstrap.min.js "></script>
<script src="../js/imageMapResizer.min.js"></script>
<script>
    //1320 x1062
    imageMapResize();
    const open = document.getElementById('open');
    const modal_container = document.getElementById('modal_container');
    const close = document.getElementById('close');
    modal_container.classList.add('show');
    open.addEventListener('click', () => {
        modal_container.classList.add('show');
    });

    close.addEventListener('click', () => {
        modal_container.classList.remove('show');
    });
</script>



</html>