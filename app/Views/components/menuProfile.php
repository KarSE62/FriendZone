<script>
    // const list = document.querySelectorAll('.div-menu');
    // function activeLink(){
    //     list.forEach((item) =>
    //     item.classList.remove('active'));
    //     this.classList.add('active');
    // }
    // list.forEach((item) =>
    // item.addEventListener('click',activeLink))

    let divmenu = document.querySelectorAll('.divmenu');
    for (let i=0; i<divmenu.length; i++) {
        divmenu[i].onclick = function(){
            let j = 0;
            while(j < divmenu.length){
                divmenu[j++].className = 'divmenu';
            }
            divmenu[i].className = 'divmenu active';
        }
    }
</script>

<div class="menu-card">
    <ul>
        <li class="divmenu" id="div-menu-text-post">
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
        <li class="divmenu active" id="div-menu-text-review">
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