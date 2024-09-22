<div class="btn-back-to-top justify-content-center align-items-center" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </span>
</div>

<script>
    let mybutton = document.getElementById("myBtn");

    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "flex";
        } else {
            mybutton.style.display = "none";
        }
    };

    mybutton.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
</script>