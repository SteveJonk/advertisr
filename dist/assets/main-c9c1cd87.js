const a=document.getElementById("js__open-nav"),o=document.getElementById("js__close-nav"),n=document.getElementById("js__nav");a.addEventListener("click",e=>{e.preventDefault(),n.classList.add("open")});o.addEventListener("click",e=>{e.preventDefault(),n.classList.remove("open")});const s=document.querySelectorAll(".menu-item-has-children > a"),t="show-sub-menu";s.forEach(e=>{e.addEventListener("click",c=>{c.preventDefault(),e.parentElement.classList.contains(t)?e.parentElement.classList.remove(t):(s.forEach(l=>{l.classList.remove(t)}),e.parentElement.classList.add(t))})});
