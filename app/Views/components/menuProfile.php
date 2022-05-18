<div class="menu-card">
    <ul id="menu">
        <li class="divmenu active" id="div-menu-text-post">
            <span class="menu-text menu-text-post">
                <i class="fas fa-file-invoice fa-menu-post"></i>
                &nbsp; โพสต์
            </span>
        </li>
        <li class="divmenu" id="div-menu-text-trip">
            <span class="menu-text menu-text-trip">
                <i class="fas fa-atlas fa-menu-trip"></i>
                &nbsp; กิจกรรมที่เคยเข้าร่วม
            </span>
        </li>
        <li class="divmenu" id="div-menu-text-review">
            <span class="menu-text menu-text-review">
                <i class="fas fa-stars fa-menu-review"></i>
                &nbsp; รีวิว
            </span>
        </li>
        <li class="divmenu" id="div-menu-text-setting">
            <span class="menu-text menu-text-setting">
                <i class="fas fa-cog fa-menu-setting"></i>
                &nbsp; จัดการข้อมูลส่วนตัว
            </span>
        </li>
    </ul>
</div>

<script>
    const list = document.querySelector("#menu");
    list.addEventListener("click", function(e){
        const divmenu = e.target.closest(".divmenu");
        if (!divmenu) return
            console.log(divmenu);
            const alldivmenu = list.querySelectorAll(".divmenu");
            alldivmenu.forEach(function(el){
                el.classList.remove("active")
            })
            divmenu.classList.add("active");
    })
    
</script>